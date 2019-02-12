<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>

<?php include("includes/inc_vars.php"); ?>


<?php require "includes/header.inc.php" ?>

<?php 
#check for vars so we know what to do
$errors_flag = FALSE;
$errors_count = 0;
$hotel_count = 0;
$errors = "";

#check for hotel params and check to see if expected values are set
if(isset($_GET["hotel"])){
    if($_GET["hotel"] > 0 && $_GET["hotel"] <= 10){
        $hotel_count = $_GET["hotel"];
    } else {
        $errors = "<p><b>Error:</b> Please include the number of hotels to display from 1-6.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors = "<p><b>Error hotel parameter not found:</b> A parameter to display the number of hotels to display.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for photo params and check to see if expected values are set
if(isset($_GET["photo"])){
    if($_GET["photo"] == strtolower("y") || $_GET["photo"] == strtolower("n")){
        $photo_display = $_GET["photo"];
    } else {
        $errors .= "<p><b>Error with photo parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error photo parameter not found:</b> A parameter to include or exclude photo was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for city params and check to see if expected values are set
if(isset($_GET["city"])){
    if($_GET["city"] == strtolower("y") || $_GET["city"] == strtolower("n")){
        $city_display = $_GET["city"];
    } else {
        $errors .= "<p><b>Error with city parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error city parameter not found:</b> A parameter to include or exclude bios was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for pool params and check to see if expected values are set
if(isset($_GET["pool"])){
    if($_GET["pool"] == strtolower("y") || $_GET["pool"] == strtolower("n")){
        $pool_display = $_GET["pool"];
    } else {
        $errors .= "<p><b>Error with pool parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error pool parameter not found:</b> A parameter to include or exclude pool was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for casino params and check to see if expected values are set
if(isset($_GET["casino"])){
    if($_GET["casino"] == strtolower("y") || $_GET["casino"] == strtolower("n")){
        $casino_display = $_GET["casino"];
    } else {
        $errors .= "<p><b>Error with casino parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error casino parameter not found:</b> A parameter to include or exclude casino was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for bar params and check to see if expected values are set
if(isset($_GET["bar"])){
    if($_GET["bar"] == strtolower("y") || $_GET["bar"] == strtolower("n")){
        $bar_display = $_GET["bar"];
    } else {
        $errors .= "<p><b>Error with bar parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error bar parameter not found:</b> A parameter to include or exclude bar was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

#check for parking params and check to see if expected values are set
if(isset($_GET["parking"])){
    if($_GET["parking"] == strtolower("y") || $_GET["parking"] == strtolower("n")){
        $parking_display = $_GET["parking"];
    } else {
        $errors .= "<p><b>Error with parking parameter:</b> A value of \"y\" or \"n\" was expected.</p>";
        $errors_flag = TRUE;
        ++$errors_count;
    }
} else {
    $errors .= "<p><b>Error parking parameter not found:</b> A parameter to include or exclude parking was not supplied. A value of \"y\" or \"n\" was expected.</p>";
    $errors_flag = TRUE;
    ++$errors_count;
}

if($errors_flag){
    echo "<div id=\"errors\">";
    echo "<h2>There are $errors_count error(s) you must review</h2>";
    echo $errors . "</div>";
}

?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
      <p><a href="#"></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Hotels Available</h1>
      <?php
        if($hotel_count > 0 && $errors_flag == 0){
            for ($i = 0;$i < $hotel_count;++$i){
                echo "<div class=\"row\">";
                echo "<div>";
                #should we show photo?
                if($photo_display == 'y'){
                    echo "<div class=\"media\">
                        <div class=\"media-left\">
                        <img src=\"img/$photo[$i] \" class=\"media-object\" style=\"width:200px\"/>
                        </div>
                    </div>";
                     // echo "<img class=\"photo\" src=\"img/$photo[$i] \" alt=\"\" />";
                }

                echo "<br /><b>" . $hotel[$i] . "</b>";
                #now check to see if we should include city
                if($city_display == "y"){
                    echo "<br>" . "City: "  ;
                    echo $city[$i] . "</b>";
                }
                
                #now check to see if we should include pool
                if($pool_display == "y"){
                    echo "<br>" . "Pool: "  ;
                    echo $pool[$i] . "</b>";
                }

                #now check to see if we should include casino
                if($casino_display == "y"){
                    echo "<br>" . "Casino: "  ;
                    echo $casino[$i] . "</b>";
                }

                #now check to see if we should include bar
                if($bar_display == "y"){
                    echo "<br>" . "Bar: "  ;
                    echo $bar[$i] . "</b>";
                }

                #now check to see if we should include parking
                if($parking_display == "y"){
                    echo "<br>" . "Parking: "  ;
                    echo $parking[$i] . "</b>";
                }

                echo "</div>";
                echo "</div>";
                echo "<hr>";
            }
        }
        ?>
        <hr>
     
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p></p>
      </div>
      <div class="well">
        <p></p>
      </div>
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