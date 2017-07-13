<?php

$con = mysqli_connect("localhost","root","","feedback") or die(mysqli_error($con));

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

$user_select_query = "INSERT INTO results (id, q1, q2, q3, q4, q5, q6, q7, q8) VALUES (NULL, '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8')";
$user_query_result = mysqli_query($con, $user_select_query);
header('Location: index.php');

?>