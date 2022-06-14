<?php

// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, 'https://www.distance24.org/route.json?stops=Hamburg|Berlin');

 //return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  // $output contains the output string
$output = curl_exec($ch); //siunciam, laukiam, gaunam

// close curl resource to free up system resources
curl_close($ch); 

$output = json_decode($output);

if($_SERVER['REQUEST_METHOD'] == 'GET')
?>
<form action="" method="post">
    from: <input type="text" name="">
    from: <input type="text" name="">
</form>

echo $output->distance;



