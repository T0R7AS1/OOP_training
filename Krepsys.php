<?php
include ('./Grybas.php');

class Krepsys extends Grybas{

    private $max;
    private $kartai;
    private $bag;


    public function __construct($bagSize)
    {
        $this->bag=$bagSize;   
    }

    public function eitiGrybauti(){
        do {
            $this->setSukirmijes(rand(0,1));
            $this->setvalgomas(rand(0,1));
            $this->setSvoris(rand(5,45));
            if ($this->getSukirmijes() == false && $this->getValgomas() == true) {
                $this->max += $this->getSvoris();
                echo '<div style="color:green">radote sveika gryba ir idejote ji i krepseli jo buvo: '. $this->getSvoris() . 
                ' gramu isviso turite krepselyje: ' . $this->max . '</div>';
            }else{
                echo 'radote nevalgoma arba sukirmijusi gryba :( <br>';
            }
            $this->kartai++;
        } while ($this->max < $this->bag);
        echo "<br> <br> <br> isviso radote grybu: $this->kartai";
    }
}


?>