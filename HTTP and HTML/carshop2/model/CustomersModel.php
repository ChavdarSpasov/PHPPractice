<?php
class CustomersModel extends Model
{
	private $name;
	private $family;
  
  public function __construct($db)
  {
      parent::__construct($db);
      $this->table = 'customers';
  }

	public function create($fisrtName,$lastName)
	{
    
    $this->name = $fisrtName;
    $this->family = $lastName;

		try{
          // Insert into customers
    
            $stmt = $this->db->prepare("
              INSERT INTO `".$this->table."`
                (`first_name`, `family_name`)
              VALUES
                (?, ?)");
            $stmt->bindParam(1, $this->name);
            $stmt->bindParam(2, $this->family);
            $stmt->execute();
            $customer_id = $this->db->lastInsertId();
            return($customer_id);
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}

    public function readAll()
    {
      try {
        $stm = $this->db->prepare("
          SELECT first_name, family_name 
          FROM customers");
        $stm->execute();
        $result = $stm->fetchALL(PDO::FETCH_ASSOC);
        return $result;

      } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . PHP_EOL;
      }
    }

}