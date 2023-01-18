<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\run;

function startGame()
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';

    $roundsCount = 3;
    $gameData = [];

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        $number1 = rand(1, 50);
        $number2 = rand(1, 50);
        $answer = gcd($number1, $number2);

        $question = "{$number1} {$number2}";

        $gameData[$question] = (string) $answer;
    }

    run($gameDescription, $gameData);
}


function gcd(int $number1, int $number2)
{
    while (true) {
        if ($number1 == $number2) {
            return $number2;
        }
        if ($number1 > $number2) {
            $number1 -= $number2;
        } else {
            $number2 -= $number1;
        }
    }
}
