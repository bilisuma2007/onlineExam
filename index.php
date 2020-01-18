 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

session_start();
 require 'dbconfig/config.php';


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body style="background-color: #7f8c8d">

        <div id="main">


            <center>
                <h2>Online Exam System</h2>
                <img src="image/avatara.jpg.jpg" class="avatar">




            </center>

            <form class="myform" method="post">

                <label> Login as</label>
                <select  name="sel"  id="loginas">

                    <option value="admin" selected >admin</option>
                   <option value="student">student</option>
                    <option value="faculty">Faculty</option>



                </select>

                <br>
                <br>

                <label class="label">Username:</label>
                <br>
                <input type="text" name="username"  class="input" placeholder="Type username"/>
                <br>
                <label class="label">Password: </label>
                <br>
                <input type="password" name="password" class="input" placeholder="Type Password"/>
                <br>
                <input type="submit" name="loginbn" id="loginb"  value="Login"/>
                <br>

                <a href="signup.php"> <input type="button" id="registerbt"  value="Register"/>


   <?php



            if( isset($_POST['loginbn']) ) {

              $username=$_POST['username'];
              $password=$_POST['password'];
              $select=$_POST['sel'];
              

              $query="select * from  $select  where username='$username' and password='$password'";

               $result= mysqli_query($conn, $query);
                 if(mysqli_num_rows($result))
                 {
                     $_SESSION['username']=$username;
                     
                     if ($select==admin)
                     {
                         header('location:adminhomepage.php'); 
                     }
                     
                     if($select==student)
                     {
                         
                          header('location:studhomepage.php'); 
                          
                         
                     }
                       if($select==faculty)
                     {
                         
                          header('location:fachomepage.php'); 
                          
                         
                     }
                     

                 }


              else{



              echo '<script type="text/javascript"> alert(" Username or password is not correct")   </script>';



         }



             }
             ?>








        </div>
    </body>
</html>
*/
