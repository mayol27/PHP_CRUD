<?php
include '../model/dbconn.php';

if(isset($_POST['addperson']))
{
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $type = htmlentities($_POST['type']);
    $data=array($fname,$lname,$email,$password,$type);
    addrecord($data);

    header("location:../view/create.php?Succes_Register");
}
?>