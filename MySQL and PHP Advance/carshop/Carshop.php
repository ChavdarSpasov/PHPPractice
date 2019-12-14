<?php
class Carshop
{
    private $db = false;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function main()
    {
        do{
            $input_str = trim(fgets(STDIN));
            $input_arr = explode(",", $input_str);
            //Sample: Audi, A4, 2004, Ivan, Ivanov, BGN 7000
            if(count($input_arr)  == 6){
                $car = [
                    'make' => $input_arr[0],
                    'model'=> $input_arr[1],
                    'year' => $input_arr[2],
                ];
                $person = [
                    'name' =>  $input_arr[3],
                    'family' => $input_arr[4]
                ];
                $amount = [
                    'amount' => str_replace("BGN","",$input_arr[5])
                ];
            
                $sale_id = $this->setSale($car, $person, $amount);

                if($sale_id){
                    echo $this->getSale($sale_id);
                }

            }elseif(count($input_arr) == 1 and $input_arr[0] == 'sales'){
                $this->getSalesSum();
            }
        }
        while($input_str != "end");
    }

    //Get 
    protected function getSale($sale_id)
    {
        $stmt = $this->db->prepare("
            SELECT date_time 
            FROM sales
            WHERE id = $sale_id");
        $stmt->execute();    
    
        while($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
            return "New sale entered " . $row['date_time'] . PHP_EOL;
        }
    }

    //Get Sum
    protected function getSalesSum()
    {
        $stmt = $this->db->prepare("
            SELECT make,model,date_time,amount
            FROM cars 
            INNER JOIN sales 
            ON cars.id = sales.car_id"); 
        
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $row['make'] . " ".$row['model'] . " ".
                  $row['date_time'] . " ".$row['amount'] . PHP_EOL; 
        }
        
        $stmt_sum = $this->db->prepare("
            SELECT SUM(amount) AS sum
            FROM sales");
        
        $stmt_sum->execute();
        
        $out_sum = $stmt_sum->fetch(PDO::FETCH_ASSOC);
        echo str_repeat('-', 10) . PHP_EOL;
        echo "Sum: " . $out_sum['sum'] . PHP_EOL;
    }

    //Set
    protected function setSale($car, $person, $amount)
    {
        try {
            // Insert into car
            
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
              INSERT INTO `cars`
                (`make`, `model`, `year`) 
              VALUES
                ( ?, ?, ?)");
            //$car_id = "null";
            //$stmt->bindParam(1, $car_id);
            $stmt->bindParam(1, $car['make']);
            $stmt->bindParam(2, $car['model']);
            $stmt->bindParam(3, $car['year']);
            $stmt->execute();
            $car_id  = $this->db->lastInsertId();
            
            // Insert into customers

            $stmt= $this->db->prepare("
              INSERT INTO customers 
                (first_name, family_name) 
              VALUES 
                (?, ?)");

            $stmt->bindParam(1,$person['name']);
            $stmt->bindParam(2,$person['family']);
            $stmt->execute();
            $customer_id  = $this->db->lastInsertId();
            
            // Insert into sales

            $stmt= $this->db->prepare("
              INSERT INTO sales 
                (date_time, amount, car_id, customer_id) 
              VALUES 
                (NOW(), ?, ?, ?)");

            $stmt->bindParam(1, $amount['amount']);
            $stmt->bindParam(2,$car_id);
            $stmt->bindParam(3,$customer_id);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();

            $this->db->commit();

            return $sale_id;
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}

