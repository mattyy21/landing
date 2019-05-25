<?php

$server = "localhost";
$user = "root";
$pass = "root";
$dbname = "iscrizioni";

//Creo connessione per mysqli
$conn = new mysqli($server, $user, $pass, $dbname);

//Cerca connessione
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$nickname = mysqli_real_escape_string($conn, $_POST['nickname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
$giorno = mysqli_real_escape_string($conn, $_POST['giorno']);
$mese = mysqli_real_escape_string($conn, $_POST['mese']);
$anno = mysqli_real_escape_string($conn, $_POST['anno']);

$sql = "INSERT INTO iscritti (nickname, email, password, telefono, giorno, mese, anno) VALUES ('$nickname', '$email', '$password', '$telefono', '$giorno', '$mese', '$anno')";

if($conn->query($sql) === TRUE){
 echo "<h1>Record aggiunto con successo!</h1>";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();


?>
