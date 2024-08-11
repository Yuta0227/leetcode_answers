<?php
class Solution
{
  /**
   * @param Integer $n
   * @return Integer
   */
  function climbStairs($n)
  {
    $previous = 1;
    $current = 1;
    for ($i = 2; $i <= $n; $i++) {
      $next = $current;
      $current = $previous + $current;
      $previous = $next;
    }
    return $current;
  }
}