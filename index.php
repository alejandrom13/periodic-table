<?php 
    require_once('data.php');
    $csv_index = getData();//to get data from data.php
    error_reporting(E_ERROR | E_PARSE); //To clear warnings

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
    <link rel="stylesheet" href="css/test.css"/>


</head>

<body class="preload">

    <style>
        body {
          
          background-color: white;
          color: black;
          
        }
        .dark-mode {
          background-color: #2b2b2b;
          color: white;
        }

        .zoom {
          transition: transform .2s; /* Animation */
        }
        
        .zoom:hover {
          transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        img {
            float: center;
            width:  100px;
            height: 100px;
            object-fit: cover;
        }


    </style>

    <nav class="navbar navbar-light">
        <div class="container-fluid">
          <h3 class="font-monospace">Tabla periódica</h3>
          <div class="d-flex justify-content-center">
 
          <form class="d-flex input-group w-auto">
          
          <script>
          function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
          }
          </script>

          <div class="form-check form-switch" onclick="myFunction()">
          <label class="form-check-label" for="flexSwitchCheckDefault">🌙</label>
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" />

        </div>
          </form>
        </div>
      </nav>

      <div class="d-flex p-5">
      <div class="row row-cols-1 row-cols-md-6 g-4">



        <?php 

            foreach($csv_index as $location => $data)
            {

            if ($data[3] != ""){   
            echo '
                <a href="details.php?Symbol='. $data[0] .'" class="zoom">
                <div class="col"> 
                <div class="card h-100" style="background-color: '. $data[5] .'">
                    <img
                    src="'. $data[3] .'"
                    class="ripple card-img-top"
                    alt="..."
                    />
                    <div class="card-body">
                    <h5 class="card-title font-monospace">'. $data[1] .'</h5>
        
                    </div>
                </div>
                </div>
                </a> 
            ';

            }

            }

            ?>
    

 
      </div>

    </div>
    </div>

</div>
      <footer class="bg-light text-center text-lg-start">


        <!-- Copyright -->
        <div class="text-center p-3">
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
         
          <a class="text-dark" href="https://mdbootstrap.com/"> © 2021 Copyright: Made with ❤️ by Alejandro M.</a>


          

        </div>



        <!-- Copyright -->
      </footer>




      <script src="js/test.js"></script>
    
</body>
</html>