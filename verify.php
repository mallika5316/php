<?php

include('mypage.php');
$s_name=$_POST['name'];
// $s_email=$_POST["email"];

$s_password=$_POST['password'];

$query = "SELECT name,password FROM `loginpage` WHERE name='$s_name' and password='$s_password'";//fetch all the data from the database
      $result = mysqli_query($conn, $query);

      while($data = mysqli_fetch_array($result)){
        $use=$data['name'];
        $pass=$data['password'];
      }
      if($use==$s_name && $pass==$s_password){
        echo "login sucessful";
        header('location:table.php');
    }
      else{
        echo "login failed";
        header('location:login.php');

      }
    ?>