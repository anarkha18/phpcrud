<?php
require("dbconnection.php");
if(isset($_POST['username'])){
    $username=$_POST['username'];
    // echo $username;
    $exec_query=mysqli_query($connection,"SELECT * FROM users WHERE users_username='$username'");
    if(mysqli_num_rows($exec_query)>0){
        echo "<span style='color:red'>Username is not available</span>";
        echo "<script>$('#submitbtn').attr('disabled',true);</script>";
        }
    else{
        echo "<span style='color:green'>Username is available</span>";
        echo "<script>$('#submitbtn').attr('disabled',false);</script>";
    }
}
?>