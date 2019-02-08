<?php


session_start();


$date_in = "";
$date_out = "";
$id = 0;
$edit_state = false;
//Creating a connection to the database

$db = mysqli_connect('localhost', 'root', 'MyNewPass', 'testcrud2');

if (isset($_POST['save'])) {
    
    $date_in = $_POST['date_in'];
    $date_out = $_POST['date_out'];

    $query = "INSERT INTO date_info (date_in, date_out) VALUES ('$date_in', '$date_out')";
    mysqli_query($db, $query);
    $_SESSION['msg'] = "TASK SAVED";
    header('location: index.php');


}

if (isset($_POST['update'])) {

   $id = mysqli_real_escape_string($db, $_POST['id']);
   $date_in = mysqli_real_escape_string($db, $_POST['date_in']);
   $date_out = mysqli_real_escape_string($db, $_POST['date_out']);


   mysqli_query($db, "UPDATE date_info SET date_in='$date_in', date_out='$date_out' WHERE id='$id'");
   $_SESSION['msg'] = "TASK UPDATED";

    header('location: index.php');
}

if (isset($_GET['dlt'])) {
    $id = $_GET['dlt'];
    mysqli_query($db, "DELETE FROM date_info WHERE id=$id");
    $_SESSION['msg'] = "TASK DELETED";
    header('location: index.php');
}




$results = mysqli_query($db, "SELECT * FROM date_info");


?>