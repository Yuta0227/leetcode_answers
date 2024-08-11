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
  private $result = true;
  /**
   * @param TreeNode $root
   * @return Boolean
   */
  function isBalanced($root)
  {
    $this->checkNode($root);
    return $this->result;
  }
  function checkNode($node)
  {
    // all nodes' subtrees have to be height-balanced
    // recurse until height of subtree can be calculated
    // calculate the max height, apply that to the parent nodes' one subtree height
    // keep recursing until left and right subtree of root node can be calculated
    if (!$node) {
      return 0;
    } else {
      $left = $this->checkNode($node->left);
      $right = $this->checkNode($node->right);
      if (abs($left - $right) > 1) {
        $this->result = false;
      }
      return max($left, $right) + 1;
    }
  }
}