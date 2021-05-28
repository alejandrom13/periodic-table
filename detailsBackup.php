<?php
require_once('data.php');
$csv_details = getData();
$symbol = $_GET['Symbol'];
//echo "$symbol";

//$res = array_keys(array_column($csv_details, 0), "$symbol");
//echo $res[1];

foreach($csv_details as $line){
    if($line[0] == $symbol){
        //do what ever you want
        $details = [$line[0], $line[1], $line[2], $line[3], $line[4]];
        
    }
} 



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periódica</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<?php 

echo '<h1>'. $details[0] .'</h1>
<h1>'. $details[1] .'</h1>
<h1>'. $details[2] .'</h1>

<img src="'. $details[3] .'">
<h1>'. $details[4] .'</h1>

'

?>  

</body>
</html>