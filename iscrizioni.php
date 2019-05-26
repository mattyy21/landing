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
$password = base64_encode($_POST['password']); //conversione password in base64
if (!empty($_POST['telefono'])){
  $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
} else {
  $telefono = 'NULL';
}
$data_di_nascita = mysqli_real_escape_string($conn, $_POST['giorno'].'/'.$_POST['mese'].'/'.$_POST['anno']);

$checkbox1 = mysqli_real_escape_string($conn, $_POST['checkbox1']);
$checkbox2 = mysqli_real_escape_string($conn, $_POST['checkbox2']);

$sql = "INSERT INTO iscritti (nickname, email, password, telefono, data_di_nascita, check_1, check_2) VALUES ('$nickname', '$email', '$password', '$telefono', '$data_di_nascita' , '$checkbox1', '$checkbox2')";

if($conn->query($sql) === TRUE){
 echo "<h1>Record aggiunto con successo!</h1>";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();

?>
