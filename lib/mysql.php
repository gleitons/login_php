<?php 
function conecta() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'concessionaria';
    $mysqli = mysqli_connect($host, $user, $password, $database);
    if (mysqli_connect_errno()){
        echo 'houve erro';
    } else {
        echo 'tudo Certo';
        var_dump($mysqli);
    }


}
conecta();
?>