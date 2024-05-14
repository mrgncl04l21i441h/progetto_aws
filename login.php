<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && isset($password)) {
    require "connect.php";
        
    $query = "SELECT * FROM utenti WHERE username='".$username."' AND password='" . md5($password) . "';";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        header("location: relazione.html");
    } else {
        echo "errore con le credenziali <a href='login.php'>login</a>";
    }
}else{
    echo "errore bello brutto con i dati ;(";
}
?>