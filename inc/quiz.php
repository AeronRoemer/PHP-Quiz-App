<?php

// Includes questions
include('inc/questions.php');

//question number
$q_num = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
var_dump($q_num);
if (empty($q_num)){
    $q_num = 1;
}
$p_num = 10;
// Keep track of which questions have been asked
$questions_remaining = $questions;

// Show random question
function getRandom($array){
  shuffle($array);
  array_shift($array);
  return $array;
}

// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score