<?php 
include 'connection.php';

function insertUser($db, $data) {
	$statement = $db->prepare("INSERT INTO users (FirstName, LastName, Email, Password) values (?, ?, ?, ?)");
	$statement->execute($data);
}

function deleteUserByEmail($db, $data) {
	$statement = $db->prepare("DELETE FROM users WHERE Email=?");
	$statement->execute($data);
}

function deleteUserByID($db, $data) {
	$statement = $db->prepare("DELETE FROM users WHERE ID=?");
	$statement->execute($data);
}

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = array($firstName, $lastName, $email, $password);

//deleteUserByEmail($db, array('paulbird1993@gmail.com'));

insertUser($db, $data);

header('Location: success.php');


?>