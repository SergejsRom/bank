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
        $four = $_POST['num1'];
        //echo $one." ".$two;
        
        $sql="INSERT INTO accTab (accName,	accSurname, accNum, accBalance) 
        VALUES('$one','$two','$three',$four)";
   
        
       if (strlen($one) > 3 && strlen($two > 3)) {
        $result=$conn -> query($sql);
        } else{

            echo 'CHECK the data';
        }
       

    }
       

    ?>
    

    <form class=center action="http://localhost/bank/pages/account.php" method="post" >
        Name <input class="margin-5" type="text" name="name1">
        Surname<input class="margin-5" type="text" name="name2">
        ACC number<input class="margin-5" type="text" value="LT<?= rand(100000000000000000, 999999999999999999);?>" name="name3">
        Start Balance<input class="margin-5" type="number" name="num1">
        <button type="submit" class="btn btn-success margin-5">ADD</button>
    </form>
    <form action="http://localhost/bank/index.php" method="get">
    <button class="btn btn-secondary margin-5">LOGOUT</button>
    </form>
    
    </div>
</body>
</html>