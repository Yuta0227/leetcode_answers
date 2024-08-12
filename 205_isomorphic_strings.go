package main

// comma ok pattern
func isIsomorphic(s string, t string) bool {
	result := true
	sToT := make(map[rune]rune)
	tToS := make(map[rune]rune)
	for index := 0; index < len(s); index++ {
		sChar := rune(s[index])
		tChar := rune(t[index])
		if mappedTChar, ok := sToT[sChar]; ok {
			if mappedTChar != tChar {
				return false
			}
		} else {
			sToT[sChar] = tChar
		}
		if mappedSChar, ok := tToS[tChar]; ok {
			if mappedSChar != sChar {
				return false
			}
		} else {
			tToS[tChar] = sChar
		}
	}
	return result
}
