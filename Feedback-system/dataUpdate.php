<?php

$con = mysqli_connect("localhost","root","","feedback1") or die(mysqli_error($con));

$q1 = $_POST['available'];
$q2 = $_POST['feedback'];
$q3 = $_POST['review'];
$q4 = $_POST['encourage'];
$q5 = $_POST['guidance'];
$q6 = $_POST['biased'];
$q7 = $_POST['improvement'];
$q8 = $_POST['recommend'];

$user_select_query = "INSERT INTO guidance ( c1,c2,c3,c4,c5,c6,c7,c8) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8')";
$user_query_result = mysqli_query($con, $user_select_query);

header('Location: index.php');

?>
