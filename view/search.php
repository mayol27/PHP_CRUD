<?php 
    include '../model/dbconn.php';
    $show_act = searchAcc("j");

    echo $_GET['search'];
        // $show_act=searchAcc($_GET['search']);
        var_dump($show_act);
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    
</body>
</html>