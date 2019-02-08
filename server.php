<?php


session_start();


$date_in = "";
$date_out = "";
$id = 0;
$edit_state = false;
//Creating a connection to the database

$db = mysqli_connect('localhost', 'root', 'MyNewPass', 'testcrud2');

if (isset($_POST['check'])) {
    
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    $query = "INSERT INTO date_info (date_in, date_out) VALUES ('$date_in', '$date_out')";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "TASK SAVED";
    header('location: index.php');


}







$results = mysqli_query($db, "SELECT * FROM date_info");


?>