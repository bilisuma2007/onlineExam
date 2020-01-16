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
    background-color:#007bff;
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
    width: full;
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
.scroll
{
  height:500px;
   margin:2px;
   overflow-y: scroll;
   
   
}



        </style>

    </head>

    <body>

         <header>

        <form  method=post>
            <input   class="btn btn-primary" type="submit" name="logu"  id="logoutbn" value="log out" /></form>
        <h4  id="status"> <span id="log"><?php   echo $_SESSION['username'];?></span> Logged In </h4>
         <?php
       if (isset ($_POST['logu']))

      {

             session_destroy();
              header('location:index.php');


      }



    ?>
        <h2 id="title">   <img  src="image/avatara.jpg.jpg" alt="test icon"  id="avator" > ASTU  Online Examination System -Student DashBoard</h2>








        </header>


        <div class="vnav">

               <div class="sidebar">

                    <h2> Navigator </h2>
                    <ul>
                        <li  ><a href ="#" id="onlink" ><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>Take Tests</a></li>        
                        <li><a href="#"><img src="icons/feedback.ico" alt="feedback icon" class="icon" id="icon4"/>Feedback</a></li>






                    </ul>


                </div>

        </div>

        <div class="container">
            
             
            <div class="tabcon">
                    
	   <div class="col-sm-8"></div>
	   <div class="col-sm-8"><br>
	   <div >
               <center>
                   <form  method="post" action="studquestions.php">
                           <label class="label">Subject Category </label>
                           <br>
                           <br> <select  id="sel1"  name="cat">
						   
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
                                          <button type="submit"  class="btn btn-primary" name="sbutton"  >Submit</button><br>
                                          
                      
		  
		 
		</form>
               </center>
           </div>
              
           </div> 
            </div>
           </div>
 
</html>

