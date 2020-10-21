<?php

include_once("config.php");


	
	
	if(isset($_POST['submit'])) {
					$error=0;
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$email=$_POST['email'];
					$password=$_POST['password'];
					$birthday=$_POST['birthday'];
					$gender=$_POST['gender'];
					
					
					
				
					
			if(!$fname){						
				$error++;
				echo "<tr><td>".$error.".Please enter a first name.</td></tr>";							}
				if(!$lname){						
				$error++;
				echo "<tr><td>".$error.".Please enter a last name.</td></tr>";							}
				if(!$email){						
				$error++;
				echo "<tr><td>".$error.".Please enter a email.</td></tr>";							}
				
			if(!$password){						
				$error++;
				echo "<tr><td>".$error.".Please enter a password.</td></tr>";							}
			if($fname){						
				if(strlen($fname)>20){
				$error++;
				echo "<tr><td>".$error.".Your first name is too long.</td></tr>";
				}						
				}
				if(strlen($fname)<3){
				$error++;
				echo "<tr><td>".$error.".Your first name is too short(3-20 characters).</td></tr>";
							}						
						
			if($password){						
				if(strlen($password)>20){
				$error++;
				echo "<tr><td>".$error.".Your password is too long.</td></tr>";
					}						
				}
											
				if(strlen($password)<5){
				$error++;
				echo "<tr><td>".$error.".Your password is too short(5-20 characters).</td></tr>";
					}						
				 
				
				else{
					//$password = md5($password);
					
				$query= "INSERT INTO `register_tbl`(`fname`, `lname`, `email`, `password`, `birthday`, `gender`) VALUES ('$fname','$lname','$email','$password','$birthday','$gender')";
				$result = mysqli_query($conn, $query);
				
				
				//header:('Location:'.$_SERVER['PHP_SELF']);
				echo "You have been registered";
				 echo "<br/><a href='index.php'>View Result</a>";
		}
					}

?>
