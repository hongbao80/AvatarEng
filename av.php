<?php
/**
 * Auto English
 * @author HBTeamobi
 * @Contact: Fb.com/HBTeamobi
 */
$question = $_POST['q'];
$server = "localhost";
$user = "root";
$pass = "";
$database = "auto_av";

$connection = new mysqli($server, $user, $pass, $database);

if ($connection -> connect_error) {
	die("Connect DB failed");
}

$stmt = $connection -> prepare("SELECT answer from english WHERE question = ?");
$stmt -> bind_param("s", $question);
$stmt -> execute();
$result = $stmt -> get_result();
$answer = $result -> fetch_assoc();

if (isset($answer)) {
	echo $answer['answer'];
} else {
	echo "Not found";
}
?>