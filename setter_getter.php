<?php

class contoh2
{
    // variable global
    public $nama;
    private $harga;

    // constructor
    public function __construct (string $nama = "kopi", int $harga = 1000)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }
    // function starter dengan parameter
    public function setnama(string $nama)
    {
        $this->nama = $nama;
    }

    public function setharga(int $harga)
    {
        $this->harga = $harga;
    }

    public function getnama()
    {
        return $this->nama;
    }

    public function getharga()
    {
        return $this->harga;
    }

    public function display():void
    {
        echo $this->getnama()."<br>";
        echo $this->getharga();
    }
}

$contoh1 = new contoh2();

$contoh1->setnama($nama = "buku");
$contoh1->setharga($harga = 1000);

echo $contoh1->display();