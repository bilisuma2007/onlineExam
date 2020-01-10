<?php

 require 'dbconfig/config.php';


?>


<html>
    <head>
        <meta charset="UTF-8">
        <title> Signup page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #7f8c8d">
       
        <div id="main">
            
            
            <center>
                <h2>SignUp Form</h2>
                <img src="image/signup.png" class="avatar">
                
                
                
                
            </center>
            
            <form class="myform" method="post">
                
                 <label class="label">Full name:</label>
                <br>
                <input type="text" name="fullName"  class="input" placeholder="Type Full name"/>
                <br>
                 <label class="label">phone number:</label>
                <br>
                <input type="tel"  name="phone" class="input" placeholder="Enter your phone number"  />
                <br>
                <label> Gender</label>
                <input   type="radio" class="radiobtn"  name="gender" value="male"   checked required  />Male
                <input   type="radio" class="radiobtn"  name="gender" value="female"   required   />Male
                <br>
                <br>
                <label class="label">Username:</label>
                <br>
                <input type="text"  name="username"  class="input" placeholder="Type username" required/>
                <br>
                <label class="label">Password: </label>
                <br>
                <input type="password" name="password" class="input" placeholder="Type Password" required/>
                <br>
                <label class="label">confirm password: </label>
                <input type="password" name="cpassword"  class="input" placeholder="Retype Password" required/>
                <br>

                <input type="submit" name="submitbn"  id="signupb"  value="SignUp"/>
                       <br>
               <a href="index.php"> <input type="button" id="back_btn"  value="Back "/>
                
                
            
             
                
                
                
                
                
            </form>
            
   <?php 
    
   
     if(isset($_POST['submitbn']))
   
     { 
   
     
             $fullName=$_POST['fullName'];
             $gender=$_POST['gender'];
             $phone=$_POST['phone'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            
            
            
            if($password==$cpassword)
            {
                
             
                $query="select * From student  WHERE username='$username'";
                $result= mysqli_query($conn, $query);
                   
                
                  if( mysqli_num_rows($result)>0)
                  {
                     echo '<script type="text/javascript"> alert("username is taken tryanother ")   </script>'; 
                  }
                  
                 {
                      $query="insert into student (fullname,gender,phone,username,password) values( '$fullName','$gender','$phone', '$username', '$password')";
                      
                      $result=mysqli_query($conn,$query);
                      
                        
                      
                        if($result)
                        {
                           echo '<script type="text/javascript"> alert("Successfully Registerd  go to bakck to login page")   </script>'; 
                            
                        }
                        else{
                       
                          echo '<script type="text/javascript"> alert("error registering")   </script>';
                            
                        }
                      
                   }
                
                
                
                
            }
             
         else{
             
             
             
              echo '<script type="text/javascript"> alert(" password dont mach!!")   </script>'; 
             
             
             
         }   
       
       
           
     
     
     
     
     
     
     }
      
   
   ?>




            
            
        </div>
    </body>
</html>
