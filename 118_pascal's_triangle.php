<?php
class Solution
{
    private $result = [];
    /** * @param Integer $numRows * @return Integer[][] */ function generate($numRows)
    {
        $this->generateRow(1, $numRows, []);
        return $this->result;
    }

    function generateRow($currentRow, $maxRows, $previousRowWithoutEdge)
    {
        if ($currentRow == 1) {
            $newRowWithoutEdge = [];
            $this->result[] = [1];
        } elseif ($currentRow == 2) {
            $newRowWithoutEdge = [];
            $this->result[] = [1, 1];
        } else {
            $addendOne = array_merge([1], $previousRowWithoutEdge);
            $addendTwo = array_merge($previousRowWithoutEdge, [1]);
            $newRowWithoutEdge = array_map(fn($a, $b) => $a + $b, $addendOne, $addendTwo);
            $this->result[] = array_merge([1], $newRowWithoutEdge, [1]);
        }
        if ($currentRow != $maxRows) {
            $this->generateRow($currentRow + 1, $maxRows, $newRowWithoutEdge);
        }
    }
}