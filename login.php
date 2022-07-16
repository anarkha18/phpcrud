<?php
require("dbconnection.php");

if(isset($_POST['btn_save'])){
    $username=$_POST['u_username'];
    $pass=$_POST['u_pass'];

    $exec_query=mysqli_query($connection,"SELECT *FROM users WHERE users_username='$username' AND users_pass='$pass'");
 
    if(mysqli_num_rows($exec_query)>0){
        $userdata=mysqli_fetch_array($exec_query);
        // print_r($userdata);
        session_start();
        $_SESSION['users_id']=$userdata[0];
        if($userdata[5]==1){
            header('location:home.php');
        }
        else{
            header('location:adminhome.php');
        }
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Login Failed")';
        echo '</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="alert alert-primary my-3" role="alert">
            <h3 class="text-dark text-center">
                LOGIN
            </h3>
        </div>
    <form action="" method="post">
        <div class="formbox shadow-lg p-4">
            <div class="mb-3">
                <label for="" class="form-label">User Name:</label>
                <input type="text" class="form-control" name="u_username" id="un" placeholder="Enter your username" required>
                <span id="uninvalid"></span>
                <small id="unin"></small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pas" name="u_pass" placeholder="Password" required>
                <span id="pasinvalid"></span>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary shadow-lg" name="btn_save">Submit</button>
            </div>
        </div>
    </form>
</div>
<script src="loginval.js"></script>
</body>
</html>