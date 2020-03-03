<?php 
    include('inc/questions.php');
    session_start();
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
//sets session variable basics
if (isset($_POST['page'])){
    $q_num = filter_input(INPUT_POST, 'page', FILTER_VALIDATE_INT);
    if ($q_num >= 10){
        $q_num = 0;
        session_destroy();
    }
} else {
$q_num = 0;
}
//store session information in two arrays - question location information and answers given. 
$_SESSION['wrongAnswer'][$q_num-1] = filter_input(INPUT_POST, 'answer', FILTER_VALIDATE_INT);
$_SESSION['correctAnswer'][$q_num-1] = filter_input(INPUT_POST, 'correctAnswer', FILTER_VALIDATE_INT);
//remove NULL values for shortened arrays. 
$wrongs = array_filter($_SESSION['wrongAnswer']);
$rights = array_filter($_SESSION['correctAnswer']);
?>

    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question #<?= $q_num + 1;?> of <?= $total_questions;?></p>
            <p class="quiz">What is <?php 
            //displays question from array based on question number
           echo $questions[$q_num]["leftAdder"] . " + " . $questions[$q_num]["rightAdder"] . "?"
            ?> </p>
            <form action="index.php" method="POST">
                <input type="hidden" name="page" value="<?=$q_num+1?>" />
                <?php 
                //creates and randomizes answers buttons.
                   $answers[] = '<input type="submit" class="btn" name="correctAnswer" value="' . $questions[$q_num]['correctAnswer'] . '" />';
                   $answers[] = '<input type="submit" class="btn" name="answer" value="' . $questions[$q_num]['firstIncorrectAnswer'] . '" />';
                   $answers[] = '<input type="submit" class="btn" name="answer" value="' . $questions[$q_num]['secondIncorrectAnswer'] . '" />';
                shuffle($answers);
                echo $answers[0] . " " . $answers[1] . " " . $answers[2];
                ?>
            </form>
            <div id="count">
              <?php
                 //displays numbers right & wrong. 
                echo "<br><br>You have " . sizeof($rights) . " answers correct & " . sizeof($wrongs) . " answers wrong.";
                  echo "<br>";
                 ?>
            </div>
        </div>
    </div>
</body>
</html>

