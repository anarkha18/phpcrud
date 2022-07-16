<?php
require("dbconnection.php");
$msg="";
// echo "hai"

$s_id=$_GET['id'];
$query="DELETE FROM students WHERE student_id='$s_id'";
$exec_query=mysqli_query($connection,$query);
if($exec_query){
    // $msg="Data deleted successfully!";
    header('location:table.php');
}
else{
    $msg="error!";
}
// echo $msg;
?>