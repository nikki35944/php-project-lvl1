<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\run;

function startGame()
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $roundsCount = 3;
    $gameData = [];

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        $question = rand(1, 100);
        $answer = isPrime($question) ? 'yes' : 'no';
        $gameData[$question] = $answer;
    }

    run($gameDescription, $gameData);
}

function isPrime($number)
{
    if ($number == 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
