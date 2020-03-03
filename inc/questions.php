<?php
session_start();
// initialize questions variable
$questions = [];
function generate_question(){
    $question_data=[];
    // generate two random numbers
    $number_a = rand(1, 225);
    $number_b = rand(1, 225);
    // add data to array
    $question_data["leftAdder"] = $number_a;
    $question_data["rightAdder"] = $number_b;
    // creates and adds correct answer
    $question_data["correctAnswer"] = $number_a + $number_b;
    //creates and adds incorrect answers
    $question_data["firstIncorrectAnswer"] = $number_b + rand(1, 13);
    $question_data["secondIncorrectAnswer"] = $number_a + rand(3, 255);
    //returns array with question data
    return $question_data;
}

// Loop for required number of questions

while  (count($questions) < 10)
{
    $questions[] = generate_question();
}

