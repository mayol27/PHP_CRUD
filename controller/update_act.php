<?php 
include '../model/dbconn.php';

if(isset($_POST['updateperson']))
{
    $flag=false;
    $fname=htmlentities($_POST['fname']);
    $lname=htmlentities($_POST['lname']);
    $email=htmlentities($_POST['email']);
    $password=htmlentities($_POST['password']);
    $type=htmlentities($_POST['type']);
    $id=htmlentities($_POST['act_id']);
    
    $data=array($fname,$lname,$email,$password,$type,$id);

    $ok=update($data);
    if($ok)
    {
        header("location:../view/create.php?Updated");
    }
    else
    {
        header("location:../view/create.php?update_FAILED");
    }
}
 ?>