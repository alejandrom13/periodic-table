<?php
require_once('data.php');
$csv_details = getData();
$symbol = $_GET['Symbol'];
error_reporting(E_ERROR | E_PARSE);
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>

    <style>
        img {
          display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
            float: center;
            width:  1000px;
            height: 200px;
            object-fit: cover;
        }


    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Home</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="#"><strong>Details</strong></a>
              </li>

            </ol>
          </nav>
        </div>
      </nav>
<?php
    echo '  <div class="d-flex justify-content-center  p-5">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img
                src="'. $details[3] .'"
                class="img-fluid"
              />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body" align="center">
              <h5 class="card-title"><strong style="color:royalblue">['. $symbol .']</strong> '. $details[1] .'</h5>
              <p class="card-text"><strong>Peso atómico:</strong> '. $details[2] .'
            <br> <strong>Cosas de la vida que tienen que ver: </strong> '. $details[4] .'
            </p>
            </div>
          </div>
      </div> '

      ?>

<footer class="bg-light text-center text-lg-start">


<!-- Copyright -->
<div class="text-center p-3" style="">
<form class="d-flex justify-content-center input-group w-auto " align="center">


<a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button">
<i class="fab fa-instagram"></i></a>

<a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button">
<i class="fab fa-linkedin-in"></i></a>

<a class="btn btn-primary" style="background-color: #333333;" href="#!" role="button"
><i class="fab fa-github"></i
></a>

<a class="btn btn-primary" style="background-color: #ec4a89;" href="#!" role="button"
><i class="fab fa-dribbble"></i
></a>

<a class="btn btn-primary" style="background-color: #443dc4;" href="aboutme.php" role="button"
><i class="fas fa-user-alt fa-xs"></i
></a>
</form>
<br />
  © 2021 Copyright:
  <a class="text-dark" href="https://mdbootstrap.com/">Made with ❤️ by Alejandro M.</a>


  

</div>



<!-- Copyright -->
</footer>

</body>
</html>