<?php
$hostname_db = "localhost";
$username_db = "root";
$password_db = "";
$database_db = "bd_aula";
$dbconn = new mysqli($hostname_db, $username_db, $password_db, $database_db);
if ($dbconn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $dbconn->connect_error);
}
$dbconn->set_charset("utf8");
?>