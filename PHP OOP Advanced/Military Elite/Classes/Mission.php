<?php
class Mission
{
    private $codeName;
    private $state;

    public function __construct($codeName, $state)
    {
        $this->codeName = $codeName;
        $this->CompeteMission($state);
    }

    public function CompeteMission($state)
    {
        $this->state = $state;
    }

    public function __toString()
    {
        return "Code Name: $this->codeName State: $this->state";
    }


}