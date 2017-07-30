<?php

$con = mysqli_connect("localhost","root","","feedback5") or die(mysqli_error($con));

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];

$user_select_query = "INSERT INTO answers (id, q1, q2) VALUES (NULL, '$q1', '$q2')";
$user_query_result = mysqli_query($con, $user_select_query);
header('Location: page5.php');

?>

