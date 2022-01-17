<?php

class binatang
{
    public $nama;
    public $jenis;

    public function __construct($nama = "yuki",$jenis = "anjing")
    {
        $this->nama ="$nama";
        $this->jenis ="$jenis";
    }

    public function display():void
    {
       echo "nama : " .$this->nama . "<br>";
       echo "jenis : ". $this->jenis;
    }

}


$binatang1 = new binatang("black", "herder");

echo $binatang1->display();