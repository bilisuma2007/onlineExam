
<?php  

 require 'dbconfig/config.php';
$input = filter_input_array(INPUT_POST);

$fullName = mysqli_real_escape_string($conn, $input["fullname"]);
$gender = mysqli_real_escape_string($conn, $input["gender"]);
$phone = mysqli_real_escape_string($conn, $input["phone"]);
$username = mysqli_real_escape_string($conn, $input["username"]);
$password = mysqli_real_escape_string($conn, $input["password"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE student 
 SET fullname = '".$fullName."', 
 gender = '".$gender."' ,
  phone = '".$phone."' ,
  username = '".$username."' ,
  password = '".$password."' 
      
     

 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($conn, $query);
  header('location:adminstudentlist.php'); 

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM student 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($conn, $query);
   header('location:adminstudentlist.php'); 
}

echo json_encode($input);

?>