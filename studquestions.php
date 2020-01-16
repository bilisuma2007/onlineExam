<!DOCTYPE html>
<?php

session_start();
 require 'dbconfig/config.php';
$cat=$_POST['cat'];

$_SESSION['cat']=$cat;

              
                                            



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
#start
{
    
    margin-top: 200px;
    text-align: center;
    margin-right: 300px;
    
}
.testscroll
{
 
  height: 500px;
  overflow-y: scroll; 
  width:full;
  
    
}




        </style>
        
        
        
        <script type="text/javascript">
	function timeout()
	{
		var hours=Math.floor(timeLeft/3600);
		var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
		var second=timeLeft%60;
		var hrs=checktime(hours);
		var mint=checktime(minute);
		var sec=checktime(second);
		if(timeLeft<=0)
		{
			clearTimeout(tm);
			document.getElementById("form1").submit();
		}
		else
		{

			document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
		}
		timeLeft--;
		var tm= setTimeout(function(){timeout()},1000);
	}
	function checktime(msg)
	{
		if(msg<10)
		{
			msg="0"+msg;
		}
		return msg;
	}
	</script>
        
        
        
        
        
        
        
        
        
        
        
        

    </head>

    <body onload="timeout()">

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
                        <li  ><a href ="homepage.php" id="onlink"><img  src="icons/test.ico" alt="test icon" class="icon" id="icon1"/>Tests</a></li>
                 
                        <li><a href="#"><img src="icons/feedback.ico" alt="feedback icon" class="icon" id="icon4"/>Feedback</a></li>






                    </ul>


                </div>

        </div>

        <div class="container">


            <div class="tabcon">
              	<div class="col-sm-2"></div>
	       <div class="col-sm-8">
                   <script type="text/javascript">
		  var timeLeft=2*1*60;
		  
		  </script>
                  <h6 style="float:right; marign-left:5px"  > Time left</h6>
                    <div id="time" style="float:right"> timeout</div>
                    <div class="testscroll">
                <?php
                    
                 
                      
                 
                                               
                                        $query= " select * from questions where cat_id='$cat' ";
                                           $result= $conn->query($query);
                                            $qus=array();
        
                                         while ($row=$result->fetch_assoc()){
                                          $qus[]=$row;
                                          
                      
                                         }   
                                         
                                						                
                                                
                    
               
                    
                ?>  
              
             	<?php
		$i=1;
		foreach($qus as $qust) {?> 
                        <form method="POST" id="form1" action="studanswer.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="danger">
				<th><?php echo $i;?>  <?php echo $qust['question'];?>  </th>
			  </tr>
			</thead>
			
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="info">
				<td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?> </td>
			  </tr>
			<?php }?>
			<?php if(isset($qust['ans2'])){?>
			  <tr class="info">
				<td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="info">
				<td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr class="info">
				<td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
			  </tr>
			  <?php }?>
			<tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
			
		  </table>
		<?php $i++;}?>
	<center><input type="submit" value="submit Quiz" class="btn btn-success" /></center>
</form>	
                
                
                
                
                
                
               </div>  
               </div>    
                
           </div>


          

</html>
