<?php 
session_start();
require 'connect.php';

if(isset($_POST['delete_staff']))
{
    $S_ID = mysqli_real_escape_string($con, $_POST['delete_staff']);
    $query = "DELETE FROM staff WHERE Staff_ID='$S_ID'";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Staff Deleted successfully";
        header("Location: ../stafftable.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "Staff not Deleted successfully";
        header("Location: ../stafftable.php");
        exit(0);
     }
}

if(isset($_POST['update_staff']))
{
 $S_ID = mysqli_real_escape_string($con, $_POST['S_ID']);
 $S_NAME = mysqli_real_escape_string($con, $_POST['S_NAME']); 
 $S_ADD = mysqli_real_escape_string($con, $_POST['S_ADD']);
 $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
 $EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
 $CONTACT_P = mysqli_real_escape_string($con, $_POST['CONTACT_P']);
 $CONTACT_H = mysqli_real_escape_string($con, $_POST['CONTACT_H']);
 $S_S= mysqli_real_escape_string($con, $_POST['S_S']);
 $S_TYPE = mysqli_real_escape_string($con, $_POST['S_TYPE']);

 $query="UPDATE staff SET Staff_Name='$S_NAME', Staff_Address='$S_ADD', DOB='$DOB', Email='$EMAIL', Contact_P='$CONTACT_P', Contact_H='$CONTACT_H', Specialization='$S_S', S_Type='$S_TYPE'
  WHERE Staff_ID='$S_ID' ";
 $query_run = mysqli_query($con, $query);

 if ($query_run)
 {
    $_SESSION['message'] = "Staff updated successfully";
    header("Location: ../stafftable.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Staff not updated successfully";
    header("Location: ../stafftable.php");
    exit(0);
 }
}

if (isset($_POST['submit_staff']))
{

    
    $S_NAME = mysqli_real_escape_string($con, $_POST['S_NAME']); 
    $S_ADD = mysqli_real_escape_string($con, $_POST['S_ADD']);
    $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
    $EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
    $CONTACT_P = mysqli_real_escape_string($con, $_POST['CONTACT_P']);
    $CONTACT_H = mysqli_real_escape_string($con, $_POST['CONTACT_H']);
    $S_S= mysqli_real_escape_string($con, $_POST['S_S']);
    $S_TYPE = mysqli_real_escape_string($con, $_POST['S_TYPE']);

 $query = "INSERT INTO staff(Staff_Name,Staff_Address,DOB,Email,Contact_P,Contact_H,S_Type,Specialization) VALUES 
 ('$S_NAME','$S_ADD','$DOB','$EMAIL','$CONTACT_P','$CONTACT_H','$S_TYPE','$S_S')";

 $query_run=mysqli_query($con, $query);
 if($query_run)
 {
    $_SESSION['message'] = "Staff created successfully";
    header("Location: ../staff.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Staffnot created successfully";
    header("Location: ../staff.php");
    exit(0);
 }

}


?>