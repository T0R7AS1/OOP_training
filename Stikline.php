<?php

class Stikline {
    protected $turis;
    protected $kiekis;


    public function getTuris(){
        return $this->turis;
    }

    public function setTuris($kiekis){
        $this->turis = $kiekis;
    }
    
    public function getKiekis(){
        return $this->kiekis;
    }

    public function setKiekis($kiekis){
        $this->kiekis = $kiekis;
    }

    public function ipilti($kiekis){
        $this->kiekis += $kiekis;
        if ($this->kiekis > $this->turis) {
            $this->kiekis = $this->turis;
        }
        if ($this->kiekis < 0) {
            $this->kiekis = 0;
        }
    }
    public function ispilti($kiekis){
        $this->kiekis -= $kiekis;
        if ($this->kiekis < 0) {
            $this->kiekis = 0;
        }
    }
}

?>