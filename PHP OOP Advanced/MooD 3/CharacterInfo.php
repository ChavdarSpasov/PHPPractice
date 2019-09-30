<?php

abstract class CharacterInfo implements Password
{
    protected $user_name;
    protected $character_type;
    protected $level;

     protected function setUserName(string $user_name)
    {
        if (strlen($user_name) > 10) {
            throw new Exception("User name should be less then 10 characters!");
        } else {
            $this->user_name = $user_name;
        }
    }

     protected function setCharacterType(string $type)
    {
        if ($type == "Demon" or $type == "Archangel"){
            $this->character_type = $type;
        }else{
            throw new Exception('Character type must be Demon or Archangel!');
        }

    }

    protected function setLevel(int $level)
    {
        if ($level == (int)$level){
            $this->level = $level;
        }else{
            throw new Exception('Level must be integer!');
        }

    }

}