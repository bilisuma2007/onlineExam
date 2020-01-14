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
                        <li  ><a href ="homepage.php" id="onlink"><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>add Exam</a></li>
                        <li><a href ="facultystudlist.php"><img src="icons/student.ico" alt="student icon" class="icon" id="icon2"/> View Students</a></li>
                          <li><a href ="facultystudlist.php"><img src="icons/student.ico" alt="student icon" class="icon" id="icon2"/> View Result</a></li>
                     
                       






                    </ul>


                </div>

        </div>

        <div class="mainc">


            <div class="tabcon">
                <div class="fmyform">
                    <h3> Question adding form</h3>
                               <form method="post">
					
					  <label class="label">Question</label>
					  <input type="text"  name="qus"  class="input" placeholder="Enter question">
                                          <br>

					
					  <label class="label"> option-1</label>
					  <input type="text"  name="op1"  class="input" placeholder="Enter option-1">
				
                                          <br>
					  <label class="label">option-2</label>
					  <input type="text"  name="op2"  class="input" placeholder="Enter option-2">
                                          <br>
					
				
					  <label class="label">option-3</label>
					  <input type="text"   name="op3"  class="input" placeholder="Enter option-3">
					
                                          <br>
				
					  <label class="label">option-4</label>
					  <input type="text"   name="op4"  class="input"  placeholder="Enter option-4">
                                          <br>
				
					  <label class="label">answer</label>
					  <input type="text" name="ans"  class="input" placeholder="Enter answer">
                                          
                                          
                                      	     <label class="label">Subject Category </label>
						   <select  id="sel1" name="cat">
						   
								<option value="" disabled>choose category</option>
								<?php
                                                                
                                                              
                                        $query= ' select * from category';
                                           $result= $conn->query($query);
                                            $cat=array();
        
                                         while ($row=$result->fetch_assoc()){
                                          $cat[]=$row;
                      
                                         }   
                                                                
								foreach($cat as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                                                                }
								
								?>								
						  </select>
                      
                                          
                                          <br>
                                          <button type="submit" name="sbutton" id="signupb" >Submit</button><br>
                                                
                                                
                                                
                                                
                                                
                      <?php  
                      
                       if(isset($_POST['sbutton']))
   
            try     { 
            extract($_POST);
                                                          
                    $qus=htmlentities($qus);
                    $option1=htmlentities($op1);
                    $option2=htmlentities($op2);
                    $option3=htmlentities($op3);
                    $option4=htmlentities($op4);
                    $array=[$option1,$option2,$option3,$option4];
                    
                       $answer=array_search($ans,$array);
                       $query="insert into questions values ('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
                         
                         $conn->query($query);
                          
                          
                   echo '<script type="text/javascript"> alert(" succefully inserted to database")   </script>';
                       
                 }
                     
                 
 catch (exception $e) {
                 echo '$e';
}
     
     
 
                 
               ?>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                </div>



            </div>






                </div>










     


    </body>




</html>
