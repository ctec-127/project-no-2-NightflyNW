<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
<style>
/* Style the footer */
footer {
  background-color: #777;
  text-align: center;
  color: white;

}

</style>
</head>
<body>
    <?php require "includes/header.inc.php" ?>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <div class="container">
        <h2>Congratulations! You have been chosen to take part in a Time Share Siminar</h2>
        <p>To reward you for letting us tell you about this incredible opportunity. You will be able to choose 2 FREE nights from one of our beautiful hotels!</p>
        <p>To see the list of hotels and make your choice just paste the following url into your browser followed by a list of amentities you would like to see.</p>
        <p>http://localhost:8900/module-4/project-no-2-NightflyNW/page2.php?</p>
        <h2>Hotel Amentities</h2>
        <div>
          <ul>
            <li>Number of hotels you would like to see (1 to 6): hotel=1</li>
            <li>Hotel Photo: &photo=y or &photo=n</li>
            <li>City Name: &name=y or &name=n</li>
            <li>Pool: &pool=y or &pool=n</li>
            <li>Casino: &casino=y or &casino=n</li>
            <li>Bar: &bar=y or &bar=n</li>
            <li>Parking: &parking=y or &parking=n</li>
          </ul>  
        </div>
          <p>or if you would like to see all of the hotels and amenites just paste the following URL in to your browser: http://localhost:8900/module-4/project-no-2-NightflyNW/page2.php?hotel=6&photo=y&city=y&pool=y&casino=y&bar=y&parking=y</p>  
  </div>
  
  </div>
</div>
  <?php require "includes/footer.inc.php" ?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>