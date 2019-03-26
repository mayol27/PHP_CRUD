<?php 
    include '../model/dbconn.php';
    $update=getact(array($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Account</h1>
    <form action="../controller/update_act.php" method="POST">
        <label for="idno">IDNO</label>
        <!-- <input type="text" class="form-control" name="id" placeholder="Model ID" value="<?php echo $edit['model_id']?>" > -->
        <input type="text" name="act_id" id="id" value="<?php echo $update['act_id']?>" disabled> 
        <br>
        <label for="fname">First Name</label>
        <input type="text" name="fname" placeholder="First Name" value="<?php echo $update['act_fname']?>" required>
        <br>
        <label for="lname">last Name</label>
        <input type="text" name="lname" placeholder="Last Name" value="<?php echo $update['act_lname']?>" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" value="<?php echo $update['act_email']?>" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>
        <select name="type" value="<?php echo $update['act_type']?>" required>
            <option value="">Acount Type</option>
            <option value="admin">ADMIN</option>
            <option value="user">USER</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Update" name="updateperson">
    </form>
    <br>
    <br>
</body>
</html>