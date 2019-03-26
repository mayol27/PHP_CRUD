<?php 
include '../model/dbconn.php';
$ok=deleteact(array($_GET['id']));
if($ok)
{
    header("location:../view/create.php?Deleted");
}
else
{
    header("location:../view/create.php?DELTE_FAILED");
}
?>