<?php

class User 
{
    public $name;

    public function __construct()
    {
        $this->name = "";
    }
}

$user1 = new User;

echo $user1->name = "SefryantoV <br>";
echo $user1->umur = "18";