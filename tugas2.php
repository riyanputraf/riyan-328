<?php
class Senjata{
    public function menembak()
    {
        return "menembak lawan";
    }
    public function reload()
    {
        return "mengisi peluru";
    }    
}

abstract Class Equipment{
    abstract public function details(); 
    abstract public function utility();    
}

class Catalyst extends Equipment{
    
    use details, utility, Shield{
        details::details insteadOf Shield;
        utility::utility insteadOf Shield; 
    }


}

trait details{
    public function details(){
        return "details";
    }
}

trait utility{
    public function utility(){
        return "utility";
    }
}

trait Shield{
    public function details()
    {
        return "Shield 1";
    }
    public function utility()
    {
        return "Shield 2";
    }
}

$childClass = new Catalyst;
$result = $childClass->details();
echo $result;
?>