<?php
class Solution
{

  /**
   * @param Integer $rowIndex
   * @return Integer[]
   */
  function getRow($rowIndex)
  {
    if ($rowIndex == 0) {
      return [1];
    } elseif ($rowIndex == 1) {
      return [1, 1];
    } else {
      return $this->createRow(0, $rowIndex, []);
    }
  }
  function createRow($currentRowIndex, $goalRowIndex, $previousRowWithoutEdge)
  {
    if ($currentRowIndex == 0) {
      return $this->createRow($currentRowIndex + 1, $goalRowIndex, []);
    } elseif ($currentRowIndex == 1) {
      return $this->createRow($currentRowIndex + 1, $goalRowIndex, []);
    } else {
      $addendOne = [1, ...$previousRowWithoutEdge];
      $addendTwo = [...$previousRowWithoutEdge, 1];
      $newRowWithoutEdge = array_map(fn($a, $b) => $a + $b, $addendOne, $addendTwo);
    }
    if ($currentRowIndex == $goalRowIndex) {
      return [1, ...$newRowWithoutEdge, 1];
    } else {
      return $this->createRow($currentRowIndex + 1, $goalRowIndex, $newRowWithoutEdge);
    }
  }
}