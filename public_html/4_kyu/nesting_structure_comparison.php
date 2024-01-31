<?php

function same_structure_as(array $a, array $b): bool {
    if (count($a) !== count($b)) {
        return false;
    }

    for ($i = 0; $i < count($a); $i++) {
        $typeA = is_array($a[$i]);
        $typeB = is_array($b[$i]);

        if ($typeA !== $typeB) {
            return false;
        }

        if ($typeA && $typeB) {
            $reqRes = same_structure_as($a[$i], $b[$i]);
            if (!$reqRes) return false;
        }
    }

    return true;
}