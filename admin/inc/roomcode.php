<?php 
session_start();
require 'connect.php';

if(isset($_POST['delete_room']))
{
    $R_NUMBER = mysqli_real_escape_string($con, $_POST['delete_room']);
    $query = "DELETE FROM room WHERE Room_No='$R_NUMBER'";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Staff Deleted successfully";
        header("Location: ../roomtable.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "Staff not Deleted successfully";
        header("Location: ../roomtable.php");
        exit(0);
     }
}

if(isset($_POST['update_room']))
{
   $DATES = mysqli_real_escape_string($con, $_POST['DATES']); 
   $R_NUMBER = mysqli_real_escape_string($con, $_POST['R_NUMBER']);
   $W_NUMBER = mysqli_real_escape_string($con, $_POST['W_NUMBER']);
   $TYPES = mysqli_real_escape_string($con, $_POST['TYPES']);
   $AVAILABILITY = mysqli_real_escape_string($con, $_POST['AVAILABILITY']);

 $query="UPDATE room SET Dates='$DATES', Room_No='$R_NUMBER', Ward_No='$W_NUMBER', Types='$TYPES', Available='$AVAILABILITY'
  WHERE Room_No='$R_NUMBER' ";
 $query_run = mysqli_query($con, $query);

 if ($query_run)
 {
    $_SESSION['message'] = "room updated successfully";
    header("Location: ../roomtable.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "room not updated successfully";
    header("Location: ../roomtable.php");
    exit(0);
 }
}

if (isset($_POST['submit_room']))
{

    
    $DATES = mysqli_real_escape_string($con, $_POST['DATES']); 
    $R_NUMBER = mysqli_real_escape_string($con, $_POST['R_NUMBER']);
    $W_NUMBER = mysqli_real_escape_string($con, $_POST['W_NUMBER']);
    $TYPES = mysqli_real_escape_string($con, $_POST['TYPES']);
    $AVAILABILITY = mysqli_real_escape_string($con, $_POST['AVAILABILITY']);
  

 $query = "INSERT INTO room(Dates,Room_No,Ward_No,Types,Available) VALUES 
 ('$DATES','$R_NUMBER','$W_NUMBER','$TYPES','$AVAILABILITY')";

 $query_run=mysqli_query($con, $query);
 if($query_run)
 {
    $_SESSION['message'] = "Room created successfully";
    header("Location: ../room.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Room not created successfully";
    header("Location: ../room.php");
    exit(0);
 }

}


?>