<?php
include("php/connect.php");
include("php/classes.php");
include("php/navbar.php");


?>

<!DOCTYPE html>
<html>

<head>
  <title>Island of Personalities</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/img/Frame 1.png" >
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    
  <style>
    h1,
    h4,
    h6 {
      font-family: "Oswald"
    }

    .header-text h1{
      font-size:  4.5rem;
      color:white;

    }

    .header-text h6{
      font-size:  2rem;
    }
    body {
      font-family: "Open Sans"
    }
  </style>


<body class="w3-light-grey">



  <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->

  <!-- Header -->
  <header class="w3-container-fluid w3-center w3-white" style="position: relative; width: 100%; height: 100vh;">
  <img src="assets/img/headquartersbg.jpg" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
  <div class="header-text"style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; z-index: 1;">
    <h1><b>Scharizze's Memories</b></h1>
    <h6>Welcome to <span class="w3-tag">Scha's mind</span></h6>
  </div>
</header>


  <!-- islandsQuery -->
  <?php
  $islands = array();

  $islandsQuery = "SELECT * FROM islandsofpersonality";
  $islandsResult = executeQuery($islandsQuery);

  while ($islandRow = mysqli_fetch_array($islandsResult)) {
    $island = new islandCard(
      $islandRow["islandOfPersonalityID"],
      $islandRow["name"],
      $islandRow["shortDescription"],
      $islandRow["color"],
      $islandRow["image"]
    );

    array_push($islands, $island);
  }
  ?>

  <div class="container px-5">
    <h1 class="mt-5" style="text-align:center">Island of Personalities</h1>
    <div class="row justify-content-center">
      <?php foreach ($islands as $islandCard) {
        echo $islandCard->buildCard();
      }
      ?>
    </div>
  </div>
  <footer
        style="background-color:#7EB0F9; padding:15px; font-family: Hanken Grotesk, sans-serif; text-align: center;">
        ©2024
        scharizzeannbarqueros.github.io</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>