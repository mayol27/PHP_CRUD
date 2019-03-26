<?php
function dbconn()
{
    try
    {
            return new PDO("mysql:hostname=localhost;dbname=killtest","root","");              
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}// end dbconn()

function destroy()
{
    return null;
}// end of destroy

function addrecord($data)
{
    try
    {   
    $db=dbconn();
    $sql="INSERT INTO account(act_fname,act_lname,act_email,act_password,act_type) VALUES(?,?,?,?,?) ";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();        
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}//end of addrecord

function getUser()
{
    $db;
    $rows;
    try
    {
        $db=dbconn();
        $sql="SELECT * FROM account";
        $stmt=$db->prepare($sql);
        $stmt->execute();
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOExeception $e)
    {
        echo $e->getMessage();
    }
    $db=null;
    return $rows;
}// end of getting data from account

function update($data)
{
    $db=dbconn();
    $sql="UPDATE account SET act_fname=?, act_lname=?, act_email=?, act_password=?, act_type=? WHERE act_id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=null;
}// end of update

function deleteact($data)
{
    $db=dbconn();
    $sql="DELETE FROM account WHERE act_id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=null;
}//end of delete

function getact($data)
{
    $db=dbconn();
    $sql="SELECT * FROM account WHERE act_id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function searchAcc($data)
{
    $db;
    $rows;
    try
    {
        $db=dbconn();
        $sql="SELECT * FROM account WHERE CONCAT(act_id,act_fname,act_lname,act_email,act_password,act_type) LIKE '%$data%'";
        $stmt=$db->prepare($sql);
        $stmt->execute(array($data));
        $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOExeception $e)
    {
        echo $e->getMessage();
    }
    $db=null;
    return $rows;
}// end of getting data from account


?>