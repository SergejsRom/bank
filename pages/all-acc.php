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
    <h3>ALL ACC LIST</h3>

    <?php
    
    $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "BankData";
    
    
    //create connection
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
    
    //get results from database
    $result = mysqli_query($connection, "SELECT * FROM accTab");
    $all_property = array();  //declare an array for saving property
    
    //showing property
    echo '<div class="width-80">';
    echo '<table class="table table-bordered table-hover">
            <tr class="data-heading">';  //initialize table tag
    while ($property = mysqli_fetch_field($result)) {
        echo '<td>' . $property->name . '</td>';  //get field name for header
        $all_property[] = $property->name;  //save those to array
    }
    echo '</tr>'; //end tr tag
    
    //showing all data
    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        foreach ($all_property as $item) {
            echo '<td>' . $row[$item] . '</td>'; //get items using property value
        }
        echo '<td>'.'<button type="submit" class="btn btn-danger">DELETE</button>'.'</td>';'</tr>';
    }
    echo "</table>";
    echo '</div>';
       

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