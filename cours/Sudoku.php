<?php 
class Sudoku {
    private $grid;

    public function __construct() {
        $this->grid = array_fill(0, 9, array_fill(0, 9, 0));
    }

    private function is_valid($x, $y, $n) {
        for ($i = 0; $i < 9; $i++) {
            if ($this->grid[$x][$i] == $n || $this->grid[$i][$y] == $n) {
                return false;
            }
        }
        $x0 = (int)($x / 3) * 3;
        $y0 = (int)($y / 3) * 3;
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($this->grid[$x0 + $i][$y0 + $j] == $n) {
                    return false;
                }
            }
        }
        return true;
    }

    private function fill_grid($pos = 0) {
        if ($pos == 81) {
            return true;
        }
        $x = (int)($pos / 9);
        $y = $pos % 9;
        if ($this->grid[$x][$y] != 0) {
            return $this->fill_grid($pos + 1);
        }
        for ($n = 1; $n < 10; $n++) {
            if ($this->is_valid($x, $y, $n)) {
                $this->grid[$x][$y] = $n;
                if ($this->fill_grid($pos + 1)) {
                    return true;
                }
                $this->grid[$x][$y] = 0;
            }
        }
        return false;
    }

    public function generate() {
        $this->fill_grid();
        return $this->grid;
    }
}
