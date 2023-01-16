<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function startGame()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $roundsCount = 3;

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        line('Answer "yes" if the number is even, otherwise answer "no".');
        $number = rand(0, 100);
        line('Question: %s', $number);
        $isEven = ($number % 2 === 0) ? 'yes' : 'no';
        $answer = prompt('Your answer');

        if ($isEven !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$isEven}'.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line('Correct!');
        }
    }
    line("Congratulations, {$name}!");
}
