<?php declare(strict_types=1);

namespace Crossroads;

use function Siler\IO\csv_to_array;

require_once __DIR__ . '/vendor/autoload.php';

$a = csv_to_array($argv[1]);
$b = csv_to_array($argv[2]);

$a_head = [];
$b_head = [];

$inner = fopen(__DIR__ . '/var/inner.csv', 'w');
$outer = fopen(__DIR__ . '/var/outer.csv', 'w');

foreach ($a as $a_row) {
    if (empty($a_head)) {
        $a_head = $a_row;
        continue;
    }

    $match = false;

    foreach ($b as $b_row) {
        if (empty($b_head)) {
            $b_head = $b_row;

            fputcsv($inner, array_merge($a_head, $b_head, ['ACOL_MATCH', 'ACOL_VAL', 'BCOL_MATCH', 'BCOL_VAL']));
            fputcsv($outer, $a_head);

            continue;
        }

        foreach ($a_row as $a_col => $a_val) {
            foreach ($b_row as $b_col => $b_val) {
                if (!$match && match($a_val, $b_val)) {
                    $match = true;
                    fputcsv($inner, array_merge($a_row, $b_row, [$a_head[$a_col], $a_val, $b_head[$b_col], $b_val]));
                    continue;
                }
            }
        }
    }

    if (!$match) {
        fputcsv($outer, array_merge($a_row));
    }
}

function match(string $a, string $b): bool
{
    return trim($a) == trim($b);
}

fclose($inner);