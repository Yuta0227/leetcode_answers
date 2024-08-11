<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 * public $val = null;
 * public $left = null;
 * public $right = null;
 * function __construct($val = 0, $left = null, $right = null) {
 * $this->val = $val;
 * $this->left = $left;
 * $this->right = $right;
 * }
 * }
 */
class Solution
{
  /**
   * @param Integer[] $nums
   * @return TreeNode
   */
  function sortedArrayToBST($nums)
  {
    $tree = $this->setToTree($nums, 0, count($nums) - 1);
    return $tree;
  }

  function setToTree($nums, $start_index, $end_index)
  {
    // if range is less than 1, new treenodes are unnecessary
    if ($start_index > $end_index) {
      return null;
    }
    $middle_index = intdiv($start_index + $end_index, 2);
    // create treenodes using range avoiding the middle index
    $node = new
      TreeNode($nums[$middle_index], $this->setToTree($nums, $start_index, $middle_index - 1), $this->setToTree($nums, $middle_index + 1, $end_index));
    return $node;
  }
}