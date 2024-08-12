package main

func hammingWeight(n int) int {
	var quotient int
	var remainder int
	var count int
	for n > 0 {
		quotient = n / 2
		remainder = n % 2
		if remainder == 1 {
			count++
		}
		n = quotient
	}
	return count
}
