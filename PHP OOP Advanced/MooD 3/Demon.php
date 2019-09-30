<?php

class Demon extends CharacterInfo
{
    private $pass_word;
    private $energy;

    public function __construct(string $user_name,string $character_type,float $energy,int $level)
    {
        $this->setUserName($user_name);
        $this->setCharacterType($character_type);
        $this->energy = $energy;
        $this->setLevel($level);
        $this->setHashedPassword();

    }

    public function setHashedPassword()
    {
        $this->pass_word = strlen($this->user_name) * 217;

    }



    public function __toString()
    {
        return '"'.$this->user_name.'" | "'.$this->pass_word.'" -> Demon'."\n".
            sprintf("%0.1f",round($this->energy*$this->level,1));
    }
}