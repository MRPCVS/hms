<?php 
session_start();
require 'connect.php';

if(isset($_POST['delete_medical']))
{
    $P_ID = mysqli_real_escape_string($con, $_POST['delete_medical']);
    $query = "DELETE FROM medical WHERE Patient_ID='$P_ID'";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "medical Deleted successfully";
        header("Location: ../medicaltable.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "Patient not Deleted successfully";
        header("Location: ../medicaltable.php");
        exit(0);
     }
}

if(isset($_POST['update_medical']))
{
   $P_ID = mysqli_real_escape_string($con, $_POST['P_ID']); 
   $M_DATE = mysqli_real_escape_string($con, $_POST['M_DATE']);
   $D_NAME = mysqli_real_escape_string($con, $_POST['D_NAME']);
   $M_DETAILS = mysqli_real_escape_string($con, $_POST['M_DETAILS']);

 $query="UPDATE medical SET M_Date='$M_DATE', Doctor_Name='$D_NAME', Medical_Details='M_DETAILS'
  WHERE Patient_ID='$P_ID' ";
 $query_run = mysqli_query($con, $query);

 if ($query_run)
 {
    $_SESSION['message'] = "medical updated successfully";
    header("Location: ../medicaltable.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "medical not updated successfully";
    header("Location: ../medicaltable.php");
    exit(0);
 }
}

if (isset($_POST['submit_medical']))
{

 $P_ID = mysqli_real_escape_string($con, $_POST['P_ID']); 
 $M_DATE = mysqli_real_escape_string($con, $_POST['M_DATE']);
 $D_NAME = mysqli_real_escape_string($con, $_POST['D_NAME']);
 $M_DETAILS = mysqli_real_escape_string($con, $_POST['M_DETAILS']);
 
 $query = "INSERT INTO medical (Patient_ID,M_Date,Doctor_Name,Medical_Details) VALUES 
 ('$P_ID','$M_DATE','$D_NAME','$M_DETAILS')";

 $query_run=mysqli_query($con, $query);
 if($query_run)
 {
    $_SESSION['message'] = "medical created successfully";
    header("Location: ../medical.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "medical not created successfully";
    header("Location: ../medical.php");
    exit(0);
 }

}


?>