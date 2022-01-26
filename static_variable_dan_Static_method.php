<?php

class contohstatic
{
    public static $nama = ["Sefry", "Ricardo", "Stenly"];

    public static $index = 1;

    public static function all ()
    {
        $index = 1;

        foreach (self::$nama as $na)
        {
            echo $index++ .".".$na . "<br>";
        }
    }

    public function display ()
    {
        echo self::all();
    }
}

class substatic extends contohstatic
{

}



echo "<br>";

$obj2 = new substatic();

echo $obj2->display();