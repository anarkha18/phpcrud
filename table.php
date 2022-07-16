<?php
require("dbconnection.php");

$query="SELECT *FROM students";

$exec_query=mysqli_query($connection,$query);
// print_r($exec_query);
// echo mysqli_num_rows($exec_query);
// $row=mysqli_fetch_assoc($exec_query);
// print_r($row);

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
</head>
<boddy>
    <div class="container">

    <table class="table my-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">DOB</th>
      <th scope="col">DOB</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if(mysqli_num_rows($exec_query)){
        while($row=mysqli_fetch_assoc($exec_query)){

    ?>
  <tr>
      <td><?php echo $row['student_id'] ?></td>
      <td><?php echo $row['student_name'] ?></td>
      <td><?php echo $row['student_email'] ?></td>
      <td><?php echo $row['student_username'] ?></td>
      <td><?php echo $row['student_pass'] ?></td>
      <td><?php echo $row['student_dob'] ?></td>
      <td><?php echo $row['student_course'] ?></td>
      <td><a href="delete.php?id=<?php echo $row['student_id']; ?>" onclick="confirm('are you sure you want to delete?');">Delete</a></td>
      <td><a href="update.php?id=<?php echo $row['student_id']; ?>">Update</a></td>
    </tr>
    <?php
        }
    }
    ?>
  </tbody>
</table>
</div>
    
</body>
</html>