<?php

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function getValgomas(){
        return $this->valgomas;
    }
    public function setvalgomas($tof){
        $this->valgomas = $tof;
    }
    
    public function getSukirmijes(){
        return $this->sukirmijes;
    }
    public function setSukirmijes($tof){
        $this->sukirmijes = $tof;
    }

    public function getSvoris(){
        return $this->svoris;
    }
    public function setSvoris($kiekis){
        $this->svoris = $kiekis;
    }
}


?>