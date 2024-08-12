package main

// Boyer-Moore Voting Algorithm
func majorityElement(nums []int) int {
	var candidate int
	var count int
	for _, val := range nums {
		if count == 0 {
			candidate = val
			count++
		} else if candidate == val {
			count++
		} else if candidate != val {
			count--
		}
	}
	return candidate
}
