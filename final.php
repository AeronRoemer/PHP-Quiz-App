<?php 
 session_start();
 $wrongs = array_filter($_SESSION['wrongAnswer']);
 $rights = array_filter($_SESSION['correctAnswer']);
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Results</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php

?>

    <div class="container">
            <div id="quiz-box">
              <?php
                 //displays numbers right & wrong. 
                echo "<br><br><h1>Your total:<br><br>" . sizeof($rights) . " answers correct & " . sizeof($wrongs) . " answers wrong.</h1>";
                  echo "<br>";
                 ?>
                 <a class="btn" href="index.php" value='<?php
                 $q_num = 0;
                 session_destroy(); ?>'
                 role="button">Try Again</a>
            </div>
    </div>
</body>
</html>

<!-- FUTURE? ADD COOKIES -->