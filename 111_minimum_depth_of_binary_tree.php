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
    private $min_depth;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDepth($root)
    {
        if (!$root) {
            return 0;
        } else {
            $this->checkNode($root, 1);
            return $this->min_depth;
        }
    }
    function checkNode($node, $depth)
    {
        if ($this->min_depth && $this->min_depth < $depth) {
            return;
        }
        if (!$node->left && !$node->right) {
            $this->min_depth = $depth;
            return;
        }
        if ($node->left) {
            $this->checkNode($node->left, $depth + 1);
        }
        if ($node->right) {
            $this->checkNode($node->right, $depth + 1);
        }
    }
}