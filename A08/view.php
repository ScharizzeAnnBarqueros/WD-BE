<?php
include("php/connect.php");
include("php/classes.php");
include("php/navbar.php");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Island Contents</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="assets/img/Frame 1.png" >

  <style>
    h1,
    h4,
    h6 {
      font-family: "Oswald"
    }

    body {
      font-family: "Open Sans"
    }
  </style>


  <?php

  $islandID = $_GET['id'];
  $contentList = array();

  if (isset($_GET['id'])) {
    $contentQuery = "SELECT *, islandsofpersonality.image AS islandImage, islandsofpersonality.color AS islandColor, islandcontents.image AS contentImage FROM islandcontents JOIN islandsofpersonality ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID WHERE islandcontents.islandOfPersonalityID = '$islandID'";
    $contentResult = executeQuery($contentQuery);

    if (mysqli_num_rows($contentResult) > 0) {
      while ($contentRow = mysqli_fetch_assoc($contentResult)) {
        $islandContent = new islandContent(
          $islandID,
          $contentRow["name"],
          $contentRow["contentImage"],
          $contentRow["content"],
          $contentRow["longDescription"]
        );

        array_push($contentList, $islandContent);
      }
    }
  }


  ?>

</head>

<body class="w3-light-grey">


  <h1 class="w3-xxxlarge" style="text-align:center;padding:2%"><b><?php echo $islandContent->islandName ?></b></h1>
  <h4 class="px-5" style="text-align:center; "><?php echo $islandContent->description ?> </h4>



  <div class="container mt-5 p-5">
    <div class="row justify-content-center">
      <?php
      foreach ($contentList as $content) {
        echo $content->createContent();
      }
      ?>

    </div>
  </div>



  <footer style="background-color:#7EB0F9; padding:15px; font-family: Hanken Grotesk, sans-serif; text-align: center;">
    ©2024
    scharizzeannbarqueros.github.io
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>