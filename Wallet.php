<?php
class Wallet{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $kiekisP;
    private $kiekisM;


    public function getMetaliniaiPinigai(){
        return $this->metaliniaiPinigai;
    }

    public function setMetaliniaiPinigai($kiekis){
        $this->metaliniaiPinigai = $kiekis;
    }
    
    public function getPopieriniaiPinigai(){
        return $this->popieriniaiPinigai;
    }

    public function setPopieriniaiPinigai($kiekis){
        $this->popieriniaiPinigai = $kiekis;
    }

    public function ideti($kiekis){
        if ($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        }elseif($kiekis >= 2){
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti(){
        echo "isviso pinigu yra: ".$this->metaliniaiPinigai + $this->popieriniaiPinigai . "<br>";
    }

    public function popieriniai(){
        for ($i=0; $i < $this->popieriniaiPinigai; $i++) { 
            $this->kiekisP++;
            $i++;
        }
        echo "popieriniu pinigu buvo: $this->kiekisP <br>";
    }

    public function monetos(){
        for ($i=0; $i < $this->metaliniaiPinigai; $i++) { 
            $this->kiekisM++;
        }
        echo "metaliniu pinigu buvo: $this->kiekisM <br>";
    }
}




?>