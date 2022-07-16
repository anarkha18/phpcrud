<?php
$servername="localhost";
$username="root";
$password="";
$database="users";


$connection= mysqli_connect($servername,$username,$password,$database);

if(!$connection){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
// else{
//     echo "Connection was successfull <br>";
// }
?>