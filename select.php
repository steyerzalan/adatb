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

$sql="Select id, vezeteknev, keresztnev from emberek";
$eredmeny=$conn->query($sql);

if ($eredmeny->num_rows > 0)
{
    //minden adatot sorokból rakok ki
    while($row = $eredmeny->fetch_assoc())
    {
        echo "id: " . $row["id"] .  " -nev: ". $row["vezeteknev"]. " ". $row["keresztnev"]. "<br>";
    }
}
else
{
    echo "0 rekord az eredmény";
}

$conn->close();