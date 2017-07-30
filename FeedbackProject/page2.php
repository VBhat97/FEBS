<?php

$con = mysqli_connect("localhost","root","","feedback2") or die(mysqli_error($con));

$q1 = $_POST['leave'];
$q2 = $_POST['healthcare'];
$q3 = $_POST['infrastructure'];
$q4 = $_POST['resource'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

$user_select_query = "INSERT INTO answers (id, q1, q2, q3, q4, q5, q6, q7, q8) VALUES (NULL, '$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8')";
$user_query_result = mysqli_query($con, $user_select_query);
header('Location: index.php');

?>