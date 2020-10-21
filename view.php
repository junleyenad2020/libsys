<?php
//including the database connection file
include_once("config.php");
 

$select = "SELECT * FROM register_tbl ORDER BY id DESC";
$result = mysqli_query($conn,$select ); 
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="config.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=1>
        <tr bgcolor='#CCCCCC'>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
			
            <td>Password</td>
			<td>Birthday</td>
			
			<td>Gender</td>
			
			<td>Update</td>
			<td>Delete</td>
			
        </tr>
        <?php 
          while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['fname']."</td>";
            echo "<td>".$res['lname']."</td>";
			 echo "<td>".$res['email']."</td>";
			 			 
			echo "<td>".$res['password']."</td>";
            echo "<td>".$res['birthday']."</td>"; 
			echo "<td>".$res['gender']."</td>";			
			
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> </td>
			<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
			echo"</tr>";
		}
		
        ?>
    </table>
</body>
</html>