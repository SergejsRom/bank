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
    
    <h3 class="add-margin-25">GO TO:</h3>

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
        $two = $_POST['pass1'];
        //echo $one." ".$two;
        $sqlvar="select * from adminTab where adminName='$one' and password='$two'";
       $result=$conn ->query($sqlvar);
       if($result -> num_rows > 0) {
           header("Location: http://localhost/bank/pages/admin.php");
       }else{
           echo '<span>password and/or name is wrong</span>';
       }
        
    }

    ?>


    <a href="http://localhost/bank/pages/account.php">CREATE ACCOUNT</a>
    <a href="http://localhost/bank/pages/all-acc.php">ALL ACCOUNTS</a>
    
    </div>
    <a class="add-margin-25 center" href="http://localhost/bank/index.php">LOGOUT</a>
</body>
</html>