<?php
$firstName = trim(filter_var($_POST['firstName'], FILTER_SANITIZE_SPECIAL_CHARS));
$middleName = trim(filter_var($_POST['middleName'], FILTER_SANITIZE_SPECIAL_CHARS));
$lastName = trim(filter_var($_POST['lastName'], FILTER_SANITIZE_SPECIAL_CHARS));
$numberPhone = trim(filter_var($_POST['numberPhone'], FILTER_SANITIZE_SPECIAL_CHARS));
$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

require_once "../mysql.php";

$sql = 'INSERT INTO review(firstName, middleName, lastName, numberPhone, login, password) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$firstName, $middleName, $lastName, $numberPhone, $login, $password]);

echo "Done";