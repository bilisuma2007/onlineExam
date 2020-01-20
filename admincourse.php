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
        <h2 id="title">   <img  src="image/avatara.jpg.jpg" alt="test icon"  id="avator" >Online Examination System -Admin dashboard</h2>








        </header>


        <div class="vnav">

               <div class="sidebar">

                    <h2> Navigator </h2>
                    <ul>
                        <li  ><a href ="adminhomepage.php"  ><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>Tests</a></li>
                        <li><a href ="adminstudentlist.php"  ><img src="icons/student.ico" alt="student icon" class="icon" id="icon2"/>Students</a></li>
                        <li><a href="adminfacultymanage.php"><img src="icons/faculty.ico" alt="faculty icon" class="icon" id="icon3"/>Faculty </a></li>
                        <li><a href="admincourse.php" id="onlink"><img src="icons/feedback.ico" alt="feedback icon" class="icon" id="icon4"/>Add course</a></li>

                    </ul>


                </div>

        </div>

        <div class="mainc">


           <div class="tabcon">
               <form  style="text-align:center"" method="POST">
                   <h4 style="text-align:center"> add course</h4>
                <label >SubjectID:</label>
                   <br>
             
                   <input type="number" name="cid"   placeholder="Course Id"/>
                <br>
                 <label >Course Name:</label>
                <br>
                <input type="text"  name="cname" placeholder="Course name"  />
                <br>    
                 
                <input type="submit" name="coursesub"   value="submit"/>  
                   
                   
    <?php  
                 if(isset($_POST['coursesub']))
   
     { 
   
     
             $cid=$_POST['cid'];
             $cname=$_POST['cname'];
        
             
                  try {
             
                      $query='insert into category  values( "'.$cid.'","'.$cname.'")';
                     
                      
                      $result=mysqli_query($conn,$query);
                      
                  }
 catch ( Exception  $e)
 {
     
     throw $e;
     
     
 }
 }

                        
                      
                    
                     
     
                        
             
             
             
             
             
             
             
             
             
             
             
     
             
             
             
             
             
                
                ?>
                
                
                
                
                
                
                
                   
                   
               </form>

                
              <div class="table-responsive"> 
               <h5> list of courses </h5>
                <center>
              
                <table  id="editable_table" class="table table-bordered table-" >
               <thead>
              <tr>
               
                <th>course ID</th>
                <th>Course Name</th>
               


              </tr>
            </thead>
            <tbody>
   <?php
              $query= ' select idn, cid , cat_name from category';
                $result= $conn->query($query);

                if ($result->num_rows >0)
                {
                  while ($row=$result->fetch_assoc()){
                   echo"<tr>"
                    
                      . "<td>".$row["cid"]."</td>"
                           . "<td>".$row["cat_name"]."</td>"
                           . "</tr>";
                  }
                }

                ?>        
            </tbody>

            </table>

                </center>
              </div>
               
              <script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'actionc.php',
      columns:{
       identifier:[0, "idn"],
       editable:[[1, 'cid'], [2,'cat_name']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
               
               
               
               
               

            </div>



          





        <footer>
        <footer>
        <h2  id="copy">&copy; Copyright 2019
                     </h2></footer>


        </footer>


    </body>




</html>
