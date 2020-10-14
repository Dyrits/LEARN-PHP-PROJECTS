<?php
function magic8Ball() {
    $answers = [
    "It is certain.",
    "It is decidedly so.",
    "Without a doubt.",
    "Yes - definitely.",
    "You may rely on it.",
    "As I see it, yes.",
    "Most likely.",
    "Outlook good.",
    "Yes.",
    "Signs point to yes.",
    "Reply hazy, try again.",
    "Ask again later.",
    "Better not tell you now.",
    "Cannot predict now.",
    "Concentrate and ask again.",
    "Don't count on it.",
    "My reply is no.",
    "My sources say no.",
    "Outlook not so good.",
    "Very doubtful."
    ];
    echo "Enter a question I can answer: "."\n";
    $question = readline(">> ");
    echo "\nHmm I see... Your question is $question... I understand why this weighs on you... I have consulted the spirit world.\nHere is your answer: ";
    echo $answers[rand(0, 19)];
}

magic8Ball();
