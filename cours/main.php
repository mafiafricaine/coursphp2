<?php
require "Sudoku.php";

$sudoku = new Sudoku();
$grid = $sudoku->generate();

echo '<table>';
for($i = 0; $i < 9; $i++) {
    echo '<tr>';
    for($j = 0; $j < 9; $j++) {
        echo '<td>' . $grid[$i][$j] . '</td>';
    }
    echo '</tr>';
}
echo '</table>';