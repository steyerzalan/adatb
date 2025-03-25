<?php
//belépéshez szükséges adatokat változókba tesszük
//változó az $ jeles
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enABm";

//készíteni kell egy csatlakozást
$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    //hiba esetén lelőjük a csatlakozást
    die("Csatlakozási hiba" . $conn->connect_error);
}
else
{
    echo "Csatlakozás megtörtént";
}

