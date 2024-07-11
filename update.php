<?php
include('mypage.php');
$s_key=$_GET['key'];
$s_usn=$_POST["usn"];
$s_name=$_POST["name"];
$s_age=$_POST["age"];
$s_branch=$_POST["branch"];
$s_section=$_POST["section"];
$query="UPDATE `student` SET `usn`='$s_usn',`name`='$s_name',`age`='$s_age',`branch`='$s_branch',`section`='$s_section' WHERE `id`='$s_key'";

$result =mysqli_query($conn,$query);

if($result){
    echo 'updated';
}else{
    echo 'something went wrong';
}

?>