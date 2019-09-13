<?php
class Topping
{
    private $weight;
    private $toppingType;
    private $toppingName;

    public function __construct($toppingType,$weight)
    {
        $this->setToppingName($toppingType);
        $this->setToppingType($toppingType);
        $this->setWeight($weight);
    }

    public function setToppingName($toppingName)
    {
        $this->toppingName = $toppingName;
    }



    public function setToppingType($toppingType)
    {
        switch ($toppingType){
            case 'Meat': $this->toppingType = 1.2;break;
            case 'Veggies': $this->toppingType = 0.8;break;
            case 'Cheese': $this->toppingType = 1.1;break;
            case 'Sauce': $this->toppingType = 0.9;break;
            default: throw new Exception("Cannot place $toppingType on top of your pizza.");
        }
    }

    public function setWeight($weight)
    {
        if ($weight >=1 and $weight <= 50) {
            $this->weight = $weight;
        }else{
            throw new Exception("$this->toppingName weight should be in the range [1..50].");
        }
    }

    public function getCalories(){
        return $this->weight * (2 * $this->toppingType);
    }

}