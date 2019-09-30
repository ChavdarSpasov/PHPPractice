<?php
class LeutenantGeneral extends PrivateSoldier implements ILeutenantGeneral
{
    private $arrayPrivateSoldiersId;
    protected $arrayPrivateSoldiers;

   public function __construct($id,
                               $fName,
                               $lName,
                               $salary,
                               array $arrayPrivateSoldiersId = null,
                               array $arrayPrivateSoldiers = null )
   {
       parent::__construct($id, $fName, $lName, $salary);

       $this->arrayPrivateSoldiers = $arrayPrivateSoldiers;
       $this->arrayPrivateSoldiersId = $arrayPrivateSoldiersId;

   }

    public function getPrivatesInCommand()
    {
        return $this->arrayPrivateSoldiers;
    }


    function __toString()
   {
       $leutenantGeneralPrivateSoldierList = [];

        foreach ($this->arrayPrivateSoldiersId as $item){
            foreach ($this->arrayPrivateSoldiers as $key => $value){
                if ($item == $key){
                    $leutenantGeneralPrivateSoldierList[] = $value;
                }
            }
        }

       return parent::__toString() . "\r\n" .
           'Private:'. "\r\n" . implode("\r\n",$leutenantGeneralPrivateSoldierList);
   }
}