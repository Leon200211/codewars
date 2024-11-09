<?php

// https://www.codewars.com/kata/561c20edc71c01139000017c

function buildMatchesTable(int $numberOfTeams): array
{
    $teams = range(1, $numberOfTeams);
    $combinationCount = getFactorial($numberOfTeams) / ((getFactorial(2) * getFactorial($numberOfTeams - 2)));
    $round = 0;
    $games = [];
    $alreadyPlayed = [];
    $alreadyRoundsPlayed = [];
    $roundsCount = 0;

    while ($roundsCount !== $combinationCount)
    {
        if ($round == 1) {
            $a = 1;
        }

        foreach ($teams as $firstTeam) {
            if (in_array($firstTeam, $alreadyRoundsPlayed)) {
                continue;
            }

            foreach ($teams as $secondTeam) {
                if (in_array($firstTeam, $alreadyRoundsPlayed)
                    || in_array($secondTeam, $alreadyRoundsPlayed)
                    || $firstTeam === $secondTeam
                ) {
                    continue;
                }

                if (!array_key_exists($firstTeam, $alreadyPlayed)) {
                    $alreadyPlayed[$firstTeam] = [];
                }

                if (!array_key_exists($secondTeam, $alreadyPlayed)) {
                    $alreadyPlayed[$secondTeam] = [];
                }


                if (in_array($secondTeam, $alreadyPlayed[$firstTeam]) || in_array($firstTeam, $alreadyPlayed[$secondTeam])) {
                    continue;
                }

                $alreadyPlayed[$firstTeam][] = $secondTeam;
                $alreadyPlayed[$secondTeam][] = $firstTeam;

                $alreadyRoundsPlayed[] = $firstTeam;
                $alreadyRoundsPlayed[] = $secondTeam;

                $games[$round][] = [$firstTeam, $secondTeam];
                $roundsCount++;
            }
        }

        $alreadyRoundsPlayed = [];
        $round++;
    }

    return $games;
}

function getFactorial(int $factorial): int
{
    $result = 1;

    for($i = 1; $i <= $factorial; $i++) {
        $result *= $i;
    }

    return $result;
}