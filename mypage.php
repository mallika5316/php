<?php $server='localhost';
$usernae='root';
$password='';
$database='alvas';
$conn=mysqli_connect($server,$usernae,$password,"$database");
if($conn->connect_error){
    echo'connection failed';
}
echo 'connection sucess';
?>