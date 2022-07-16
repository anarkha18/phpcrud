<?php
// echo "hai";
require("dbconnection.php");
session_start();
// echo   $_SESSION['users_id'];
if(isset($_SESSION['users_id'])){
    $id=$_SESSION['users_id'];
}
else{
?>
<script>
    alert('Please login!!')
    window.location="login.php";
</script>
<?php
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
    <style>
        .div1 {
            height: 400px;
            background-color: rgb(245, 245, 213);

        }

        .div2 {
            height: 400px;
            background-color: rgb(175, 239, 239);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container my-5 mx-4">
            <div class="row">
                <div class="col-lg-3 div1 p-5">
                    <a href="viewpost.php">
                    <button type="button" class="btn btn-primary">View Posts</button>
                    </a>
                    <a href="post.php">
                    <button type="button" class="btn btn-primary mt-5">Post Your Quotes</button>
                    </a>
                <a href="logout.php">
                    <button type="button" class="btn btn-primary mt-5">Log Out</button>
                </a>
                </div>
                <div class="col-lg-9 div2">
                </div>
            </div>
        </div>
    </div>
</body>

</html>