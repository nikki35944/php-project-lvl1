<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

function startGame()
{
    $gameDescription = 'What is the result of the expression?';

    $roundsCount = 3;
    $gameData = [];
    $operations = ['+', '-', '*'];

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        $number1 = rand(1, 15);
        $number2 = rand(1, 15);
        $randomKey = array_rand($operations);
        $operator = $operations[$randomKey];

        switch ($operator) {
            case '+':
                $answer = $number1 + $number2;
                break;
            case '-':
                $answer = $number1 - $number2;
                break;
            case '*':
                $answer = $number1 * $number2;
                break;
        }

        $question = "{$number1} {$operator} {$number2}";

        $gameData[$question] = (string) $answer;
    }

    run($gameDescription, $gameData);
}
