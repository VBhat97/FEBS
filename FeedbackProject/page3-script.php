<?php

$con = mysqli_connect("localhost","root","","feedback3") or die(mysqli_error($con));

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

$user_select_query = "INSERT INTO answers (id, q1, q2, q3, q4, q5) VALUES (NULL, '$q1', '$q2', '$q3', '$q4', '$q5')";
$user_query_result = mysqli_query($con, $user_select_query);
header('Location: page3.php');

?>

