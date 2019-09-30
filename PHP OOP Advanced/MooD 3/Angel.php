<?php

class Angel extends CharacterInfo
{
    private $pass_word;
    private $mana;

    public function __construct(string $user_name,string $character_type,int $mana,int $level)
    {
        $this->setUserName($user_name);
        $this->setCharacterType($character_type);
        $this->mana = $mana;
        $this->setLevel($level);
        $this->setHashedPassword();

    }

    public function setHashedPassword()
    {
         $this->pass_word = strrev($this->user_name) . strlen($this->user_name)*21;
    }

    public function __toString()
    {
        return '"'.$this->user_name.'" | "'.$this->pass_word. '" -> Archangel'.
            "\n".intval($this->mana*$this->level);
    }

}