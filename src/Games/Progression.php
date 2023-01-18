<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\run;

function startGame()
{
    $gameDescription = 'What number is missing in the progression?';
    $roundsCount = 3;
    $gameData = [];
    $progressionLength = 10;
    $minValue = 1;
    $maxValue = 10;

    for ($wins = 0; $wins < $roundsCount; $wins++) {
        $firstProgressionNumber = rand($minValue, $maxValue);
        $step = rand(1, 10);

        $progressionNumbers = [];
        for ($i = 0; $i < $progressionLength; $i += 1) {
            $progressionNumbers[$i] = $firstProgressionNumber + $step * $i;
        }

        $hiddenIndex = array_rand($progressionNumbers);
        $answer = (string) $progressionNumbers[$hiddenIndex];
        $progressionNumbers[$hiddenIndex] = '..';
        $question = implode(' ', $progressionNumbers);
        $gameData[$question] = $answer;
    }

    run($gameDescription, $gameData);
}
