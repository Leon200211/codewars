<?php

// https://www.codewars.com/kata/561c20edc71c01139000017c

function buildMatchesTable(int $numberOfTeams): array
{
    $teams = range(1, $numberOfTeams);

    $away = array_splice($teams, (count($teams) / 2));
    $home = $teams;
    $rounds = [];
    
    for ($i=0; $i < count($home) + count($away) - 1; $i++) {
        for ($j=0; $j < count($home); $j++) {
            $rounds[$i][$j][] = $home[$j];
            $rounds[$i][$j][] = $away[$j];
        }

        if (count($home) + count($away) - 1 > 2) {
            $array = array_splice($home, 1, 1);
            array_unshift($away, array_shift($array));
            array_push($home, array_pop($away));
        }
    }

    return $rounds;
}

function getFactorial(int $factorial): int
{
    $result = 1;

    for($i = 1; $i <= $factorial; $i++) {
        $result *= $i;
    }

    return $result;
}

// Не работает при большом количестве команд
function buildMatchesTable_2(int $numberOfTeams): array
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