<?php

class bapak
{
    public static string $judul = "ini dari class bapak";

    public static function getjudul():string
    {
        return static::$judul;
    }

    public static function showclass()
    {
        return new static;
    }
}


class anak extends bapak
{
    public static string $judul = "ini dari class anak";
}


echo bapak::getjudul();
echo "<br>";
echo var_dump (bapak::showclass());
echo "<br>";
echo "<hr>";
echo anak::getjudul();
echo "<br>";
echo var_dump (anak::showclass());