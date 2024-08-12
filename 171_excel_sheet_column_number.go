package main

import (
	"math"
)

func titleToNumber(columnTitle string) int {
	var result int
	dictionary := make(map[rune]int)
	for index, character := range "ABCDEFGHIJKLMNOPQRSTUVWXYZ" {
		dictionary[character] = index + 1
	}
	columnTitleLength := len(columnTitle)
	for index, character := range columnTitle {
		power := float64(columnTitleLength - index - 1)
		result += dictionary[character] * int(math.Pow(26, power))
	}
	return result
}
