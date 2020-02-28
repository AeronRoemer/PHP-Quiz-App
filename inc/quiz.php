<?php

// Includes questions
include('inc/questions.php');

//sets questions
$total_questions = 10;
$p_num = 10;
if (isset($_POST['page'])){
    $q_num = filter_input(INPUT_POST, 'page', FILTER_VALIDATE_INT);
    if ($q_num >= 10){
        $q_num = "Session Over";
    }
} else {
$q_num = 1;
}

