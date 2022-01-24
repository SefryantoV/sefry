<?php
abstract class product
{
    abstract public function judul(string $nama):void;
}

class buku extends product
{
    public $nama;

    public function __construct(string $nama = "moralandscape")
    {
        $this->nama = $nama;
    }

    public function getnama () :string
    {
        return $this->nama;
    }

    public function judul (string $nama) : void
    {
        $this->nama = $nama;
    }

    public function getjudul()
    {
        return $this->nama;
    }
}

$buku1 = new buku();

echo $buku1->getjudul();