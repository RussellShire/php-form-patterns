<!-- Currently this is terminal only, needs converting to output to browser -->

<?php
$answers = [
    'It is certain.',
    'It is decidedly so.',
    'Without a doubt.',
    'Yes - definitely.',
    'You may rely on it.',
    'As I see it, yes.',
    'Most likely.',
    'Outlook good.',
    'Yes.',
    'Signs point to yes.',
    'Reply hazy, try again.',
    'Ask again later.',
    'Better not tell you now.',
    'Cannot predict now.',
    'Concentrate and ask again.',
    "Don't count on it.",
    'My reply is no.',
    'My sources say no.',
    'Outlook not so good.',
    'Very doubtful.'];


function magic8Ball(){
    global $answers;
    echo "I can answer any yes or no question. \n";
    $question = readline("What would you like to know? \n");
    echo "So you want to know, '${question}?'... \n";

    $rand_int = rand(0,19);
    echo $answers[$rand_int] . "\n";
}

magic8Ball(); 
