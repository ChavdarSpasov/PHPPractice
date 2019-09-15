<?php

class Tiger extends Felime
{
    public function makeSound()
    {
        print "ROARRRRR!\r\n";
    }

    public function eat($food)
    {
        if ($food->name == 'Vegetable'){
            print 'Tiger are not eating that type of food!' . "\r\n";
        }else{
            $this->setFoodEaten($food->getQuantity());
        }
    }

}