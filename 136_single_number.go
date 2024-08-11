package main
func singleNumber(nums []int) int {
	var singleNumber int = 0
	for _,val :=range nums{
			singleNumber ^= val
	}
	return singleNumber
}