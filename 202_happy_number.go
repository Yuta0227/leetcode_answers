package main

func isHappy(n int) bool {
	pastSum := make(map[int]bool)
	for {
		sum, isLoop := getSum(n, pastSum)
		if sum == 1 {
			return true
		} else if isLoop {
			return false
		} else {
			n = sum
		}
	}
}

func getSum(num int, pastSum map[int]bool) (int, bool) {
	var remainder int
	var sum int
	for num > 0 {
		remainder = num % 10
		sum += remainder * remainder
		num /= 10
	}
	isLoop := pastSum[sum]
	pastSum[sum] = true
	return sum, isLoop
}
