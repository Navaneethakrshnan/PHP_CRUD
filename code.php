<?php
session_start();
require 'dbcon.php'; 

if(isset($_POST['delete_student']))
  {
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);
    
    $query = "DELETE FROM students WHERE id ='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    { 
        $_SESSION['message'] = "student Deleted Successfully";
        header("Location: records.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "student Not Deleted ";
        header("Location: records.php");
        exit(0);
    }

 }  


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con,$_POST['student_id']);

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
    

    $query= "UPDATE students SET  name ='$name',gender='$gender',email='$email',password='$password',mobile='$mobile'
              WHERE id= '$student_id' ";

    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "student Updated Successfully";
        header("Location: records.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "student NOT Updatesd";
        header("Location: records.php");
        exit(0);
     }
}


if(isset($_POST['save_student']))
{

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $mobile = mysqli_real_escape_string($con,$_POST['mobile']);
   

    $query = "INSERT INTO students (name,gender,email,password,mobile) VALUES 
    ('$name','$gender','$email','$password','$mobile')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {       
        $_SESSION['message'] = "student Created Successfully";
        header("Location: records.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "student not Created ";
        header("Location: records.php");
        exit(0);  
    }
}
?>  
