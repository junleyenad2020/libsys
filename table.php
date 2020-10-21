<?php

 include ("config.php");
?>

 <!DOCTYPE html>
 <html lang="en">
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <body background ="picture.jpg">
</head>




  <body>
      <div class="container">
 
      <form action="insert.php" method="POST">

      <div class="form-group">
   	  
    
 <div class="container">
            <div class="form">
			
				    <h1> Sign Up </h1> 
                   <p>Its free and always will be</p> 
               

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
       <input type="text" class="form-control" placeholder="Your firstname" name="fname" value=""/>
                            </div>
                            <div class="form-group">
							
				   <div class="form-group">
        <input type="text" class="form-control" placeholder="Your lastname "name="lname" value=""/>
                            </div>
                            <div class="form-group">						
              <input type="text" class="form-control" placeholder="email" name="email" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
			<input type="password" name="password" class="form-control" id="password" placeholder="Enter password" >
                            </div>
							<div>
							<div class="col-md-6">
							</div>
                         
                   <div class="form-group">
				   
				
				   
                        </div>
                    </div>
                 
    
   
	
	
	       <div class="form-group">
			<label for ="gender" gender </label>
	    <select name="gender"  class="form-control selcls" id="gender1">
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			</div>
	</select>
		
	
	 <div class="form-group">
	  <label for="example-date-input" class="col-2 col-form-label">birthday</label> 
	   <div class"col=10">
	  <input clss="form-control" type="date" name ="birthday" value ="2011-08-19" id="example-date-input">
	   </div>
	   </div>
				
		    
		 <br>
		      <div class="form-group">
           <input type="submit" name="submit" value="Sign-up"  class="btn btn-primary"><br></br>
			
			</div>
			</br>
		
 </div>
   </div>
  </div>
				

</body>
</html>