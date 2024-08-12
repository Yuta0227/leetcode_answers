package main
/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func getIntersectionNode(headA, headB *ListNode) *ListNode {
    var visited=make(map[*ListNode]bool)
    for headA != nil || headB != nil {
        if headA != nil {
            if visited[headA] {
                return headA
            }
            visited[headA] = true
            headA=headA.Next
        }
        if headB != nil {
            if visited[headB] { 
                return headB
            }
            visited[headB] = true
            headB=headB.Next
        }
    }
    return nil
}