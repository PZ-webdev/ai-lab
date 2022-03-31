<?php
include('PDOConnect.php');

$email = $_REQUEST['email'];
$continet = $_REQUEST['continent'];
$type = $_REQUEST['type'];
$description = $_REQUEST['description'];

$sql = "INSERT INTO trip_questions (email, continent, type, description) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email, $continet, $type, $description]);

header('Location: ' . $_SERVER['HTTP_REFERER']);
