<?php
// $username_localhost = "root";
// $password_localhost = "";
// $hostname_localhost = "localhost";
// $database_localhost = "test-spectral";
// $localhost = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(), E_USER_ERROR);

$db = new PDO('mysql:host=localhost;dbname=spectral', 'root','');

?>