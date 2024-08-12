package main

func reverseBits(num uint32) uint32 {
	var result uint32 = 0
	for i := 0; i < 32; i++ {
		// get last bit
		bit := num & 1
		// shift result to left and add the bit to the end
		// bit=1 result=0101 => 1010+0001=1011
		result = (result << 1) | bit
		// shift num to the right by one
		// num 110 => 011
		num >>= 1
	}
	return result
}
