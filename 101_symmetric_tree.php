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

  private $result = 0;
  /**
   * @param TreeNode $root
   * @return Integer
   */
  function maxDepth($root)
  {
    $this->getDepth($root, 1);
    return $this->result;
  }
  function getDepth($node, $depth)
  {
    if (is_null($node)) {
      return;
    }
    if ($depth > $this->result) {
      $this->result = $depth;
    }
    $this->getDepth($node->left, $depth + 1);
    $this->getDepth($node->right, $depth + 1);
  }
}