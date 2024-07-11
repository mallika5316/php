<?php
include('mypage.php');
$s_key=$_GET['id'];


$query="DELETE FROM `student` WHERE id=$s_key";

$result =mysqli_query($conn,$query);

if($result){
    echo 'deleted';
}else{
    echo 'something went wrong';
}

?>