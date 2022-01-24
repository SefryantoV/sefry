<?php

class contohstatic
{
    public static $nama = "nama variable";

    public static function all ()
    {
        echo "ini contoh function static";
    }
}

class substatic extends contohstatic
{
    
}


echo contohstatic::$nama;

echo contohstatic::$nama;

echo "<br>";
echo contohstatic::$all();