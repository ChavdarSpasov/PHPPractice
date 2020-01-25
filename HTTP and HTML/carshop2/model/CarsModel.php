<?php
class CarsModel extends Model
{
	
	private $make;
	private $model;
	private $year;
	
	public function __construct($db)
	{
    parent::__construct($db);
    $this->table = "cars";
	}
  
  public function create($name,$model,$year)
  {
    $this->make = $name;
    $this->model = $model;
    $this->year = $year; 

		try {
            // Insert into car
            
            $stmt = $this->db->prepare("
              INSERT INTO `".$this->table."`
                (`make`, `model`, `year`)
              VALUES
                (?, ?, ?)");
            $stmt->bindParam(1, $this->make);
            $stmt->bindParam(2, $this->model);
            $stmt->bindParam(3, $this->year);
            $stmt->execute();
            $car_id = $this->db->lastInsertId();
			return $car_id;
		 } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}

  public function realAll()
  {
    try {
      $stm= $this->db->prepare("
        SELECT make, model, year
        FROM cars");
      $stm->execute();
      $all = $stm->fetchAll(PDO::FETCH_ASSOC);
      return $all;

    } catch (PDOException $e) {
      print "Error: " . $e->getMessage() . PHP_EOL;
    }
    
  }

}