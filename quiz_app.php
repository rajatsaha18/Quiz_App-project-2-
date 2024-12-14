<?php

$questions = [
    ['question' => 'what is 2 + 2 ?', 'correct' => '4'],
    ['question' => 'what is the capital of France ?', 'correct' => 'Paris'],
    ['question' => 'who wrote Hamlet ?', 'correct' => 'Shakespeare']
];

$answers = [];

foreach($questions as $index => $question)
{
    echo ($index + 1) . "." . $question['question'] . "\n";
    // user input for answer
    $answers[] = trim(readline("Your Answer : "));
}

//evaluate function
function evaluateQuiz(array $questions, array $answers)
{
    $score = 0;
    foreach($questions as $index => $question)
    {
        if($answers[$index] === $question['correct'])
        {
            $score++;
        }
    }
    return $score;
}

//calculate score
$score = evaluateQuiz($questions, $answers);

echo "\n your scored $score out of " . count($questions) . "\n";

// feedback based on performance
if($score === count($questions))
{
    echo "Excellent job!";
}
else if($score > 1)
{
    echo "Good Effort!";
}
else
{
    echo"Better luck next time!";
}