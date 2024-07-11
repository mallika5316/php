<?php
include('mypage.php');
$s_key=$_GET['id'];

$query = "SELECT * FROM student WHERE id='$s_key'";
//fetch all the data from the database
      $result = mysqli_query($conn, $query);// display the data store in result
      while($data=mysqli_fetch_array($result))//creae the loop to fetch each data line by line
      {
        
        
        $s_usn=$data["usn"];
        $s_name=$data["name"];
        $s_age=$data["age"];
        $s_branch=$data["branch"];
        $s_section=$data["section"];
      
   
      }
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>google form</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>
    <form action="update.php?key=<?php echo $s_key ;?>" method="post">

    <div class="form">
        <h2>Enter your details here</h2>
        <input type="text" name="usn"  placeholder="enter usn" value="<?php echo $s_usn;?>">
        <input type="text" name="name" placeholder="enter name" value="<?php echo $s_name;?>">
        <input type="number" name="age" placeholder="Enter ur age" value="<?php echo $s_age;?>">
        <input type="text" name="branch" placeholder="Enter the branch" value="<?php echo $s_branch;?>">
        <input type="text" name="section" placeholder="Enter section" value="<?php echo $s_section;?>">
       
    
        <!-- <input type="password" name="" placeholder="Enter Password Here">
        <input type="date" name="date_of_birth" placeholder="enter your DOB">
        <select name="gender" id="gender">
            <option>Select ur gender</option>
            <option value="Male">Male</option>
            <option value="female">female</option>
            <option value="other">other</option>
        </select> -->
        
        <button class="btnn">submit</button>
        <button type="reset" class="reset-btn">reset</button>
      
    </div>
</form>  
    
</body>
</html>