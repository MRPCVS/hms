<?php 
session_start();
require 'connect.php';

if(isset($_POST['delete_shedule']))
{
    $SH_ID = mysqli_real_escape_string($con, $_POST['delete_shedule']);
    $query = "DELETE FROM shedule WHERE Shedule_ID='$SH_ID'";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "shedule Deleted successfully";
        header("Location: ../sheduletable.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "shedule not Deleted successfully";
        header("Location: ../sheduletable.php");
        exit(0);
     }
}

if(isset($_POST['update_shedule']))
{   
    $SH_ID = mysqli_real_escape_string($con, $_POST['SH_ID']); 
    $P_ID = mysqli_real_escape_string($con, $_POST['P_ID']); 
    $S_ID = mysqli_real_escape_string($con, $_POST['S_ID']);
    $R_NO = mysqli_real_escape_string($con, $_POST['R_NO']);
    $DATES = mysqli_real_escape_string($con, $_POST['DATES']);
    $TIMES = mysqli_real_escape_string($con, $_POST['TIMES']);
    $COMMENTS = mysqli_real_escape_string($con, $_POST['COMMENTS']);

 $query="UPDATE shedule SET Patient_ID='$P_ID', Staff_ID='$S_ID', Room_No='$R_NO', Dates='$DATES', Timess='$TIMES', Comments='$COMMENTS
  WHERE Shedule_ID='$SH_ID' ";
 $query_run = mysqli_query($con, $query);

 if ($query_run)
 {
    $_SESSION['message'] = "shedule updated successfully";
    header("Location: ../sheduletable.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Shedule not updated successfully";
    header("Location: ../sheduletable.php");
    exit(0);
 }
}

if (isset($_POST['submit_shedule']))
{

    
    $P_ID = mysqli_real_escape_string($con, $_POST['P_ID']); 
    $S_ID = mysqli_real_escape_string($con, $_POST['S_ID']);
    $R_NO = mysqli_real_escape_string($con, $_POST['R_NO']);
    $DATES = mysqli_real_escape_string($con, $_POST['DATES']);
    $TIMES = mysqli_real_escape_string($con, $_POST['TIMES']);
    $COMMENTS = mysqli_real_escape_string($con, $_POST['COMMENTS']);
   

 $query = "INSERT INTO shedule(Patient_ID,Staff_ID,Room_No,Dates,Timess,Comments) VALUES 
 ('$P_ID','$S_ID','$R_NO','$DATES','$TIMES','$COMMENTS')";

 $query_run=mysqli_query($con, $query);
 if($query_run)
 {
    $_SESSION['message'] = "shedule created successfully";
    header("Location: ../shedule.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "shedule not created successfully";
    header("Location: ../shedule.php");
    exit(0);
 }

}


?>