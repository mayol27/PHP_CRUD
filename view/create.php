<?php 
    include '../model/dbconn.php';
    $show_act = getUser();

    if(isset($_POST['btnsearch'])){
        $show_act=searchAcc($_POST['search']);
        
    }

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
    <form action="../controller/add_act.php" method="POST">
        <input type="text" name="fname" placeholder="First Name">
        <br>
        <input type="text" name="lname" placeholder="Last Name">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Password">
        <br>
        <select name="type">
            <option value="">Acount Type</option>
            <option value="admin">ADMIN</option>
            <option value="user">USER</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit" name="addperson">
    </form>
    <br>
    <br>
    <!-- search -->
    <form method="post">
        <input type="text" name="search" placeholder="Search">
        <input type="submit" name="btnsearch" value="go!">
    </form>
    <br>
    <br>
    <table>
        <thead>
            <td>
                ID
            </td>
            <td>
                First Name
            </td>
            <td>
                Last Name
            </td>
            <td>
                Email 
            </td>
            <td>
                Type
            </td>
            <td>
                Status
            </td>
        </thead>
        <tbody>
        <?php foreach($show_act as $s) 
                {?>
                    <tr>
                        <td><?php echo $s['act_id'] ?></td>
                        <td><?php echo $s['act_fname'] ?></td>
                        <td><?php echo $s['act_lname'] ?></td>
                        <td><?php echo $s['act_email'] ?></td>
                        <td><?php echo $s['act_type'] ?></td>
                        <td>
                        <a href="update.php?id=<?php echo $s['act_id']?>">Update</a> 
                        <a href="../controller/delete_act.php?id=<?php echo $s['act_id']?>">Delete</a>  
                        </td>
                    </tr> 
                <?php } ?>
        </tbody>
    </table>
</body>
</html>