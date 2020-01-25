<?php
class SalesModel extends Model{
	private $date_time;
	private $amount;
	private $car_id;
	private $customer_id;
	
	public function create($carId,$customerId,$price)
	{
        // Insert into sales

        $this->car_id = $carId;
        $this->customer_id = $customerId;
        $this->amount = $price;

		try{
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
                INSERT INTO `sales`
                  (`date_time`,`amount`,`car_id`,`customer_id`)
                VALUES 
                   (NOW(), ?, ?, ?)");
            $stmt->bindParam(1, $this->amount);
            $stmt->bindParam(2, $this->car_id);
            $stmt->bindParam(3, $this->customer_id);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();
            $this->db->commit();
            return($sale_id);
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}
	
	public function readAll()
	{
        try {
            $stmt = $this->db->prepare("
                SELECT make,model,year,date_time AS date_of_deal,amount 
                FROM cars 
                INNER JOIN sales ON cars.id = sales.car_id;");
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);

        } catch(PDOException $e){
		    print "Error!: " . $e->getMessage() . "<br/>";
        }
	}
	
	public function readTotal()
	{
        $stmt = $this->db->prepare("
            SELECT SUM(`amount`) as `total_amount`
              FROM `sales`");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['total_amount'])
			return $row['total_amount'];
		else
			return false;
	}

    public function getSaleTime($saleId)
    {
        $stm = $this->db->prepare("
            SELECT date_time 
            FROM sales
            WHERE id = $saleId");
        $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);
     
        if($row['date_time']){
            return $row['date_time'];
        }else{
            return false;
        }
    }
}