<?php
class Dough
{
    private $type;
    private $bakingTechnique;
    private $weight;

    function __construct($type,$bakingTechnique,$weight)
    {
        $this->setType($type);
        $this->setBakingTechnique($bakingTechnique);
        $this->setWeight($weight);
    }

    private function setType($type)
    {
        switch ($type){
            case 'White': $this->type = 1.5;break;
            case 'Wholegrain': $this->type = 1.0;break;
            default: throw new Exception('Invalid type of dough.');
        }

    }

    private function setBakingTechnique($bakingTechnique)
    {
        switch ($bakingTechnique){
            case 'Crispy': $this->bakingTechnique = 0.9;break;
            case 'Chewy': $this->bakingTechnique = 1.1;break;
            case 'Homemade': $this->bakingTechnique = 1.0;break;
            default: throw new Exception('Invalid type of dough.');
        }

    }

    private function setWeight($weight)
    {
        if ($weight >= 1 and $weight <= 200){
            $this->weight = $weight;
        }else{
            throw new Exception('Dough weight should be in the range [1..200].');
        }

    }

    function getCalories():float
    {
        $result =(2 * $this->weight) * $this->type * $this->bakingTechnique;

        return $result;
    }
}