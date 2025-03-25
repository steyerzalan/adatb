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

//tábla létrehozása
$sql= "DROP TABLE if EXISTS emberek";
if ($conn->query($sql) === true)
{
    echo "Sikeres táblatörlés";
}
else
{
    echo "Nem sikerült a táblatörlés";
}
$sql="";
$sql ="CREATE TABLE if NOT EXISTS emberek(
    id INT unsigned AUTO_INCREMENT PRIMARY KEY,
    vezeteknev VARCHAR(30) NOT NULL,
    keresztnev VARCHAR(30) NOT NULL,
    beosztas VARCHAR(50) NOT NULL,
    regiszt_datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ($conn->query($sql) === true)
{
    echo "Sikeres létrehozás";
}
else
{
    echo "Nem sikerült a táblalétrehozás";
}

//lezárni az adatbázis kapcsolatot, erőforrást felszabadítunk
$conn->close();

