<!DOCTYPE html>
<?php

session_start();
 require 'dbconfig/config.php';


?>



<html>
    <head>

             <link rel="stylesheet" href="style.css">
               <link rel="stylesheet" href="bootstrap.css">
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
    width:full;
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
.fmyform{
 width: 750px;
margin: 0 auto;
height: 700px;
    
    
}



.table {
border-collapse:collapse;
width:600px;
color:red;
font-family: monospace;
font-size:20px;
text-align:left;
 margin-left: auto;
 margin-right:auto;
width: 1200px;
border-radius: 5px 5px 0 0;
overflow: hidden;


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




        </style>

    </head>

    <body>

        <header>

        <form  method=post>
            <input   type="submit" name="logu"  id="logoutbn" value="log out" /></form>
        <h4  id="status"> <span id="log"><?php   echo $_SESSION['username'];?></span> Logged In </h4>
        <?php
      if (isset ($_POST['logu']))

      {

             session_destroy();
              header('location:index.php');


      }



    ?>
        <h2 id="title">   <img  src="image/avatara.jpg.jpg" alt="test icon"  id="avator" > ASTU  Online Examination System -Faculty DashBoard</h2>








        </header>


        <div class="vnav">

               <div class="sidebar">

                    <h2> Navigator </h2>
                    <ul>
                       <li  ><a href ="homepage.php" ><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>add Exam</a></li>
                        <li><a href ="facultystudlist.php"><img src="icons/student.ico" alt="student icon" class="icon" id="icon2"/> View Students</a></li>
                        <li><a href ="facstudresult.php" id="onlink"><img src="icons/student.ico" alt="fucstud" class="icon" id="icon2"/> View Result</a></li>
                     





                    </ul>


                </div>

        </div>

        <div class="mainc">


            <div class="tabcon">
                    
              
            <h2> Exam Result of Students</h2>
            <table class="table">
              <thead>
              <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Total Question</th>
                <th>Wrong answered</th>
                <th>right answered</th>
                 <th>Non answered</th>
                  <th>subject id </th>
                   <th>Result 100%</th>
                
       


              </tr>
            </thead>
   <?php
              $query= ' select id,username,totalquestion,wrongan,rightans,noanswer,subjectid,result  from result ';
                $result= $conn->query($query);

                if ($result->num_rows >0)
                {
                  while ($row=$result->fetch_assoc()){
                   echo"<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["totalquestion"]."</td><td>"
                   .$row["wrongan"]."</td><td>".$row["rightans"]."</td><td>".$row["noanswer"]."</td><td>".$row["subjectid"]
                           ."</td><td>".$row["result"]."</td></tr>";
                  }
                }

   ?>

            </table>



            </div>     
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                                                
                                                
                                                
                                                </div>



         






               










     


    </body>




</html>
