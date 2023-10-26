<?php
session_start();
include('../testconect.php');
if(isset($_POST['register_btn']))
{
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $Last_name= mysqli_real_escape_string($con,$_POST['Last_name']);
    $Company_name= mysqli_real_escape_string($con,$_POST['Company_name']);
    $Contact= mysqli_real_escape_string($con,$_POST['Contact']);
    $Email= mysqli_real_escape_string($con,$_POST['Email']);
    $Full_address= mysqli_real_escape_string($con,$_POST['Full_adress']);
    $Additional= mysqli_real_escape_string($con,$_POST['Additional']);
    if($name != 0)
    {
        $insert_query = "INSERT INTO `user`( `name`, `Last name`, `Company name`, `Contact`, `Email address`, `Full address`, `Additional`) VALUES ('$name','$Last_name','$Company_name',' $Contact','$Email','$Full_address','$Additional')";
        
        $insert_query_run = mysqli_query($con, $insert_query);

    }


}

?>