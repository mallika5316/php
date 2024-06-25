<?php
include('mypage.php');
$s_usn=$_POST["usn"];
$s_name=$_POST["name"];
$s_age=$_POST["age"];
$s_branch=$_POST["branch"];
$s_section=$_POST["section"];
$query="INSERT INTO `student`(`usn`, `name`, `age`, `branch`, `section`) VALUES ('$s_usn','$s_name','$s_age','$s_branch','$s_section')";

$result =mysqli_query($conn,$query);

if($result){
    echo 'Inserted';
}else{
    echo 'something went wrong';
}

?>