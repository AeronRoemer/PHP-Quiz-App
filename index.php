<?php 
    include('inc/quiz.php');
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


    <div class="container">
        <div id="quiz-box">
            <p class="breadcrumbs">Question #<?= $q_num;?> of <?= $total_questions;?></p>
            <p class="quiz">What is <?php 
           echo $questions[$q_num]["leftAdder"] . " + " . $questions[$q_num]["rightAdder"] . "?"
            ?> </p>
            <form action="index.php" method="POST">
                <input type="hidden" name="page" value="<?=$q_num+1?>" />
                <?php 
                //creates and randomizes answers buttons
                   $answers[] = '<input type="submit" class="btn" name="answer" value="' . $questions[$q_num]['correctAnswer'] . '" />';
                   $answers[] = '<input type="submit" class="btn" name="answer" value="' . $questions[$q_num]['firstIncorrectAnswer'] . '" />';
                   $answers[] = '<input type="submit" class="btn" name="answer" value="' . $questions[$q_num]['firstIncorrectAnswer'] . '" />';
                shuffle($answers);
                echo $answers[0] . " " . $answers[1] . " " . $answers[2]
                ?>
            </form>
        </div>
    </div>
</body>
</html>

