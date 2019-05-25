<?php
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$giorno = $_POST['giorno'];
$mese = $_POST['mese'];
$anno = $_POST['anno'];

if (!empty($nickname) || !empty($email) || !empty($password) || !empty($telefono) || !empty($giorno) || !empty($mese) || !empty($anno)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "iscritti";

    //Crea connessione
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From iscrizioni Where email = ? Limit 1";
     $INSERT = "INSERT Into iscrizioni (nickname, email, password, telefono, giorno, mese, anno) values(?, ?, ?, ?, ?, ?, ?)";

     //Preparo statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $nickname, $email, $password, $telefono, $giorno, $mese, $anno);
      $stmt->execute();
      echo "Nuovo record inserito con successo";
     } else {
      echo "Qualcuno si è già registrato con questa email";
     }
     $stmt->close();
     $conn->close();
    }
 } else {
  echo "Tutti i campi sono richiesti";
  die();
}
?>
