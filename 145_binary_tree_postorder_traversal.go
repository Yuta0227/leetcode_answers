package main

/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 */

func postorderTraversal(root *TreeNode) []int {
	var result []int
	checkNode(root, &result)
	return result
}
func checkNode(node *TreeNode, result *[]int) {
	if node == nil {
		return
	}
	if node.Left != nil {
		checkNode(node.Left, result)
	}
	if node.Right != nil {
		checkNode(node.Right, result)
	}
	*result = append(*result, node.Val)
}
