<?php

/*** Definition for a binary tree node.
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
  private $result = false;
  /**
   * @param TreeNode $root
   * @param Integer $targetSum
   * @return Boolean
   */
  function hasPathSum($root, $targetSum)
  {
    if (!$root) {
      return false;
    } else {
      $this->checkNode($root, 0, $targetSum);
      return $this->result;
    }
  }
  function checkNode($node, $sum, $targetSum)
  {
    if ($this->result) {
      return;
    }
    $is_leaf = !$node->left && !$node->right;
    if (!$is_leaf) {
      if ($node->left) {
        $this->checkNode($node->left, $sum + $node->val, $targetSum);
      }
      if ($node->right) {
        $this->checkNode($node->right, $sum + $node->val, $targetSum);
      }
    } else {
      if ($sum + $node->val == $targetSum) {
        $this->result = true;
      }
    }
  }
}