package main

/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

var result []int

func preorderTraversal(root *TreeNode) []int {
	result = []int{}
	checkNode(root)
	return result
}
func checkNode(node *TreeNode) {
	if node == nil {
		return
	}
	result = append(result, node.Val)
	if node.Left != nil {
		checkNode(node.Left)
	}
	if node.Right != nil {
		checkNode(node.Right)
	}
}
