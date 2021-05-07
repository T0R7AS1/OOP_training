<?php

class Kibiras {

    private $akmenuKiekis;

    public function prideti1Akmeni(){
        $this->akmenuKiekis += 1;
    }

    public function pridetiDaugAkmenu($kiekis){
        $this->akmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu(){
        echo "isviso akmenu yra pririnkta: $this->akmenuKiekis";
    }

}


?>