<?php

class babeh
{
    // data member / attributes
    public $nama;
    public $harga;

    // constructor
    public function __construct (string $marga = "Valentinus", string $nama = "Sefryanto")
    {
        $this->nama = $nama;
        $this->marga = $marga;
    }

    public function setnama(string $nama)
    {
        $this->nama = $nama;
    }

    public function getnama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "nama : " . $this->getnama() . "<br>";
        echo "marga : " . $this->getmarga();
    }

    public function getmarga()
    {
        return $this->marga;
    }
}

class bocil extends babeh
{

}

$bocil1 = new bocil;
echo $bocil1->display();