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
$msg="";
if(isset($_POST['btn_save'])){
    $desc=$_POST['p_desc'];
    $authid=$_SESSION['users_id'];

    header("location:approve.php?desc=".$desc);

    // echo $desc;
    // echo $authid;
    // $msg="Your Post is Pending for approvel";
    $query="INSERT INTO post(post_desc,post_auth_id) VALUES('$desc','$authid')";

    // $exec_query=mysqli_query($connection,$query);

    if($exec_query){
        $msg="Data inserted successfully!";
    }
    else{
        $msg="error";
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
    <style>
        .div1 {
            height: 600px;
            background-color: rgb(245, 245, 213);

        }

        .div2 {
            height:600px;
            /* background-color: rgb(175, 239, 239); */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container my-5 mx-4">
            <div class="row">
                <div class="col-lg-3 div1 p-5">
                <a href="logout.php">
                    <button type="button" class="btn btn-primary mt-5">Log Out</button>
                </a>
                <a href="viewpost.php">
                <button type="button" class="btn btn-primary mt-5">View Posts</button>
                </a>
                <a href="home.php">
                <button type="button" class="btn btn-primary mt-5">Home</button>
                </a>
                </div>
                <div class="col-lg-9 div2">
                    <div class="my-3 text-center">
                        <h1>CREATE POST</h1>
                    </div>
                <form action="" method="post">
                <div class="formbox shadow-lg p-4 mx-3"> 
                    <div class="mb-3 mx-4">
                        <label for="" class="form-label mb-3">Type here:</label>
                        <textarea class="form-control" id="pdesc" rows="6" name="p_desc" required></textarea>
                    </div>
                    <div class="mx-4">
                        <button type="submit" class="btn btn-primary shadow-lg" name="btn_save">Post</button>
                    </div>
                </div>
                </form>
                <p class="my-2 mx-4"><?php echo $msg; ?></p>
                </div>
                <script>
                $(document).ready(function () {
                    $('#pdesc').keyup(function(){
                        var desc=$('#pdesc').val();
                        $.ajax({
                            method:"POST",
                            url:"approval.php",
                            data:{
                                desc
                            },
                            success:function(response){
                            // console.log(response);
                            }
                        });
                    });
                });
                </script>
            </div>
        </div>
    </div>
</body>

</html>