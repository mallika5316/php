<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table style="width:100%" >
        <tr>
          
          <th>usn</th>
          <th>name</th>
          <th>age</th>
          <th>branch</th>
          <th>section</th>
          <th>id</th>
        
          
        </tr>
       
      
      <?php
      include('mypage.php');
      $query = "SELECT * FROM student";//fetch all the data from the database
      $result = mysqli_query($conn, $query);// display the data store in result
      while($data=mysqli_fetch_array($result))//creae the loop to fetch each data line by line
      {
        ?>
        <tr>
        
          <td>
            <?php echo $data['usn'];?>
          </td>
          <td>
            <?php echo $data['name'];?>
          </td>
          <td>
            <?php echo $data['age'];?>
          </td>
          <td>
            <?php echo $data['branch'];?>
          </td>
          <td>
            <?php echo $data['section'];?>
          </td>
          <td>
            <?php echo $data['id'];?>
          </td>
          <td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a></td>
          <td><a href="edit.php?id=<?php echo $data['id'];?>">edit</a></td>
        </tr>
        
      
      <?php
      }
      ?>
      </table>

</body>
</html>