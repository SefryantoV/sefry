<?php

class bapak
{
    public $nama;
    public $marga;
    public $status;

    public function __construct(string $nama = "Sefryanto", string $marga = "Valentinus", string $status = "bapak") 
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
    }

    public function getnama ():string
    {
        return $this->nama;
    }

    public function getmarga() : string
    {
        return $this->marga;
    }
    public function getstatus() : string
    {
        return $this->status;
    }
    public function display():void
    {
        echo "nama : " . $this->getnama() . "<br>";
        echo "marga : " . $this->getmarga() . "<br>";
        echo "status : " . $this->getstatus() . "<br>";
    }

    public function judul()
    {
        echo "ini dari class"; $this->getstatus();
    }
}


class anak extends bapak
{
    public $role;

    public function __construct (
        string $nama = "wenshan", string $marga = "zheng",
        string $status = "anak", string $role = "murid"
    )
    {
        parent::__construct($nama, $marga, $status);
        $this->role = $role;
    }

    public function displaychild():void
    {
        echo parent::display();
        echo "role : " .$this->getrole();
    }

    public function getrole() : string
    {
        return $this->role;
    }
}

$bapak = new bapak ();

$anak1 = new anak ();
echo $bapak->display();
echo "<hr>";
echo $anak1->displaychild();