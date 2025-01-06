<?php 
session_start();
require 'connect.php';

if(isset($_POST['delete_patient']))
{
    $P_ID = mysqli_real_escape_string($con, $_POST['delete_patient']);
    $query = "DELETE FROM patient WHERE Patient_ID='$P_ID'";
    $query_run= mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Patient Deleted successfully";
        header("Location: ../patienttable.php");
        exit(0);
    }
     else
     {
        $_SESSION['message'] = "Patient not Deleted successfully";
        header("Location: ../patienttable.php");
        exit(0);
     }
}

if(isset($_POST['update_patient']))
{
 $P_ID = mysqli_real_escape_string($con, $_POST['P_ID']);
 $P_NAME = mysqli_real_escape_string($con, $_POST['P_NAME']); 
 $P_ADD = mysqli_real_escape_string($con, $_POST['P_ADD']);
 $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
 $EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
 $P_CONTACT_P = mysqli_real_escape_string($con, $_POST['P_CONTACT_P']);
 $P_CONTACT_H = mysqli_real_escape_string($con, $_POST['P_CONTACT_H']);

 $query="UPDATE patient SET Full_Name='$P_NAME', P_Address='$P_ADD', P_DOB='$DOB', P_Email='$EMAIL', Contact_P='$P_CONTACT_P', Contact_H='$P_CONTACT_H'
  WHERE Patient_ID='$P_ID' ";
 $query_run = mysqli_query($con, $query);

 if ($query_run)
 {
    $_SESSION['message'] = "Patient updated successfully";
    header("Location: ../patienttable.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Patient not updated successfully";
    header("Location: ../patienttable.php");
    exit(0);
 }
}

if (isset($_POST['submit_patient']))
{

 $P_NAME = mysqli_real_escape_string($con, $_POST['P_NAME']); 
 $P_ADD = mysqli_real_escape_string($con, $_POST['P_ADD']);
 $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
 $EMAIL = mysqli_real_escape_string($con, $_POST['EMAIL']);
 $P_CONTACT_P = mysqli_real_escape_string($con, $_POST['P_CONTACT_P']);
 $P_CONTACT_H = mysqli_real_escape_string($con, $_POST['P_CONTACT_H']);

 $query = "INSERT INTO patient(Full_Name,P_Address,P_DOB,P_Email,Contact_P,Contact_H) VALUES 
 ('$P_NAME','$P_ADD','$DOB','$EMAIL','$P_CONTACT_P','$P_CONTACT_H')";

 $query_run=mysqli_query($con, $query);
 if($query_run)
 {
    $_SESSION['message'] = "Patient created successfully";
    header("Location: ../patient.php");
    exit(0);
 }
 else
 {
    $_SESSION['message'] = "Patient not created successfully";
    header("Location: ../patient.php");
    exit(0);
 }

}


?>