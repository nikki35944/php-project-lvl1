<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

function startGame()
{
    $roundsCount = 3;
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';

    $gameData = [];

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        $question = rand(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';
        $gameData[$question] = $answer;
    }

    run($gameDescription, $gameData);
}

function isEven(int $question)
{
    return $question % 2 === 0;
}
