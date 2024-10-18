<?php
$quizIsSubmitted = isset($_POST['quiz-submitted']);
if ($quizIsSubmitted) {
    $pi['name'] = $_POST['myname'];
    $pi['answer']  = $_POST['answer'];
    $pi['phone']  = $_POST['phone'];
    $pi['datebirth']  = $_POST['datebirth'];



    $output = showQuizResponse($pi);
    $output .= "<p><a href='index.php?page=quiz'>Try quiz again?</a></p>";
} else {
    $output = include_once "views/test-quiz form.php";
}

return $output;

function showQuizResponse($pi) {
    
    
    $response = "<p>Welcome Ms. " . $pi['name'] . "</p>";
    $response .= "<p>Your phone number: " . $pi['phone'] . "</p>";
    $response .= "<p>Your Date of birth is: " . $pi['datebirth'] . "</p>";
    $response .= "<p>Your education level: " . $pi['answer'] . "</p>";
    $date1 =date_create($pi['datebirth']);
    $date2=date_create(date('now'));
    $age=date_diff(date1,date2);
    $response.="<p> your age is ".$age->format('%R%y years and %m% months') . "</p>";


    return $response;
}
