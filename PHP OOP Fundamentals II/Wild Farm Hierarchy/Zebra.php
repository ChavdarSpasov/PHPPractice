<?php
class Zebra extends Mammal
{
    public function makeSound()
    {
        print "Zz\r\n";
    }

    public function eat($food)
    {
        if ($food->name == 'Meat'){
            return 'Zebra are not eating that type of food!';
        }else{
            $this->setFoodEaten($food->getQuantity());
        }
    }
}