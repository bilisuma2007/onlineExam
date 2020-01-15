<!DOCTYPE html>
<?php

session_start();
 require 'dbconfig/config.php';


?>



<html>
    <head>
  
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
        
             
             <link rel="stylesheet" href="style.css">
          
             
    
         
             
             
             
        <style>

                   *{

   margin:0px;
   padding:0px;


}
header {


  height: 50px;
 background:transparent;
 border-radius:10px;
   padding:5px;
   border:1px solid white;
}
footer {
  background-color: none;
  bottom: 0;
  height: 50px;
  background:transparent;
  float:center;
}

.sidebar{
    margin-top:1px;
    background-color:blue;
        height:570px;
        width:200px;
        float:left;
        border-radius: 5px;



}
.sidebar h2
{

    color:#fff;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 30px;




}
.sidebar ul li{
    margin-top:27px;
    padding: 1px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    border-top: 1px solid  rgba(255,255,255, 0.05) ;

      font-size: 14px;
      list-style: none;
      font-family: sans-serif;
      font-style: normal;
      color:red;



}
.sidebar ul li a{

    text-decoration: none;
   color:#bdb8d7;
   display: block;
   font-style: normal;
   font-size: 14px;

}
.sidebar ul li a.icon {
    width: 5px;

}
.sidebar ul li :hover{
    background:#00cc00;
    width: full;
    border-radius: 3px;
}

.sidebar  ul li #onlink
{
background:black;
color: white;


}



.sidebar  ul li a #onlink:hover
{
background:white;
color:red;


}



.mainc {

background-color: cadetblue;

  height:600px;
  marign-top:100px;
  marign-left:0;


   border-radius:10px;
   padding:5px;
   border:1px solid white;
}
#icon1 #icon2 #icon3  #icon4{

width:30px;

}
#title{

    background-color:white;
    width: 700px;
    height:40px;
    font-size:24px;
    border-radius:2px;
    border: 1px solid  white;
    text-align: left;



}
#logoutbn{
     marign: 0;
     margin-right:30px;
     float:right;
     background-color:red;
margin-top: 10px;
 padding:5px;
 color:white;
 width:full;
  font-size: 18px;
 text-align: center;
 border-radius:10px;
 border: 1px solid red;




}
#copy{
text-align:center


}
#status{
    margin-top: 14px;
    margin-right: 40px;
    margin-bottom: 50px;
    width:full;
    font-size: 14px;
     font-family: sans-serif ;
    float:right
}
#log{
    color:red;




}



#avator{

    float:left;
    width:34px;

}

.tabcon{

    width: 1479px;
    height: 600px;

    background-color:white;
    padding :5px;
    border-radius: 5px;




}

.table  thead tr {

  background:#009879;
  text-align:left;
  font-weight:bold;
  color:#ffffff;
}
.table th,
.table td {

  padding :12px 25px;
}

.table tbody tr
{ border-bottom: 1px solid #dddddd;}
.table tbody tr:last-of-type
{
 border-bottom: 2px solid #009879;


}
h2{

text-align: center;
color: green;
font-family: monospace;
margin-bottom: 35px;


}



        </style>

    </head>

    <body>

        <header>

        <form  method=post>
            <input  type="submit" name="logu"  id="logoutbn" value="log out" /></form>
        <h4  id="status"> <span id="log"><?php   echo $_SESSION['username'];?></span> Logged In </h4>
        <?php
      if (isset ($_POST['logu']))

      {

             session_destroy();
              header('location:index.php');


      }



    ?>
        <h2 id="title">   <img  src="image/avatara.jpg.jpg" alt="test icon"  id="avator" > Online Examination System -Admin dashboard</h2>








        </header>


        <div class="vnav">

               <div class="sidebar">

                    <h2> Navigator </h2>
                    <ul>
                        <li  ><a href ="adminhomepage.php" ><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>Tests</a></li>
                        <li><a href ="adminstudentlist.php" ><img src="icons/student.ico" alt="student icon" class="icon" id="icon2"/>Students</a></li>
                        <li><a href="adminfacultymanage.php" id="onlink" ><img src="icons/faculty.ico" alt="faculty icon" class="icon" id="icon3"/>Faculty </a></li>
                        <li><a href="adminfeedback.php"><img src="icons/feedback.ico" alt="feedback icon" class="icon" id="icon4"/>Feedback</a></li>

                    </ul>


                </div>

        </div>

        <div class="mainc">


            <div class="tabcon">
             
                
               
                  
            <form class="myform" method="post">
                
                 <label class="label">Full name:</label>
                <br>
                <input type="text" name="fullName"  class="input" placeholder="Type Full name"/>
                <br>
                 <label class="label">phone number:</label>
                <br>
                <input type="tel"  name="phone" class="input" placeholder="Enter  phone number"  />
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
                
                <label class="label">email:</label>
                <br>
                <input type="text"  name="email"  class="input" placeholder="Type email" required/>
                <br>
                <label class="label">Password: </label>
                <br>
                <input type="password" name="password" class="input" placeholder="Type Password" required/>
                <br>
                <label class="label">confirm password: </label>
                <input type="password" name="cpassword"  class="input" placeholder="Retype Password" required/>
                <br>

                <input type="submit" name="submitbn"  id="signupb"  value="Register"/>
                       <br>
              
                
                
            
             
                
                
                
                
                
            </form>
            
   <?php 
    
   
     if(isset($_POST['submitbn']))
   
     { 
   
     
             $fullName=$_POST['fullName'];
             $gender=$_POST['gender'];
             $email=$_POST['email'];
             $phone=$_POST['phone'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $cpassword=$_POST['cpassword'];
            
            
            
            if($password==$cpassword)
            {
                
             
                $query="select * From faculty  WHERE username='$username'";
                $result= mysqli_query($conn, $query);
                   
                
                  if( mysqli_num_rows($result)>0)
                  {
                     echo '<script type="text/javascript"> alert("username is taken tryanother ")   </script>'; 
                  }
                  
                 {
                      $query="insert into faculty (InsName,email,username,password,phone,gender) values( '$fullName','$email','$username', '$password', '$phone','$gender')";
                      
                      $result=mysqli_query($conn,$query);
                      
                        
                      
                        if($result)
                        {
                           echo '<script type="text/javascript"> alert("Successfully Registerd ")   </script>'; 
                            
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

            </div>






          





        <footer>
        <footer>
        <h2  id="copy">&copy; Copyright 2019
                   </h2></footer>


        </footer>


    </body>




</html>
