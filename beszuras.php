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
    echo "Csatlakozás megtörtént!";
}

$sql="insert into emberek (vezeteknev, keresztnev, beosztas)
VALUES ('Magyar Úr', 'Roland', 'exec helyettes')";

if ($conn->query($sql) === true)
{
    echo "Sikeres beszúrás.";
}
else
{
    echo "Sikertelen beszúrás!";
}

//lezárni az adatbázis kapcsolatot, erőforrást felszabadítunk
$conn->close();
