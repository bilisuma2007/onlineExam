
<?php  

 require 'dbconfig/config.php';
$input = filter_input_array(INPUT_POST);

$cid = mysqli_real_escape_string($conn, $input["cid"]);
$coursename = mysqli_real_escape_string($conn, $input["cat_name"]);



if($input["action"] === 'edit')
{
 $query = "
 UPDATE category
 SET cid = '".$cid."', 
 cat_name = '".$coursename."' 
      
     

 WHERE idn = '".$input["idn"]."'
 ";

 mysqli_query($conn, $query);
  header('location:admincourse.php'); 

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM category 
 WHERE idn = '".$input["idn"]."'
 ";
 mysqli_query($conn, $query);
   header('location:admincourse.php'); 
}

echo json_encode($input);

?>