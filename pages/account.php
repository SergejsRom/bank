<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Bank Page</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">
    
</head>
<body> 
    <div class="center">
    <h3>ADD ACC</h3>

    <?php
    
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "BankData";
    
    $conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //echo 'ok';
        $one = $_POST['name1'];
        $two = $_POST['name2'];
        $three = $_POST['name3'];
        //echo $one." ".$two;
        $sqlvar="INSERT INTO accTab (accName,	accDetails, minbalance) 
        VALUES('$one','$two',$three)";
        $result=$conn -> query($sqlvar);
       if($result) {
           echo 'OK';
       }else{
           echo 'NOT OK';
       }
         
     }

    ?>
    

    <form class=center action="http://localhost/bank/pages/account.php" method="post" >
        Account Name <input class="margin-5" type="text" name="name1">
        Details<input class="margin-5" type="text" name="name2">
        MinBalance<input class="margin-5" type="text" name="name3">
        <button type="submit" class="btn btn-success margin-5">ADD</button>
    </form>
    <form action="http://localhost/bank/index.php" method="get">
    <button class="btn btn-secondary margin-5">LOGOUT</button>
    </form>
    
    </div>
</body>
</html>