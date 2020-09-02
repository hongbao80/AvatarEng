<?php
/**
 * Auto English
 * @author HBTeamobi
 * @Contact: Fb.com/HBTeamobi
 */
$question = $_POST['q'];
$answer = $_POST['a'];

$server = "localhost";
$user = "root";
$pass = "";
$database = "auto_av";
$conn = new mysqli($server, $user, $pass, $database);

if ($conn -> connect_error) {
  die("Connection DB failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO english (question, answer) VALUES (?, ?)");
$stmt -> bind_param("ss", $question, $answer);
$stmt -> execute();
?>