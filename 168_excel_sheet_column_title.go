package main

func convertToTitle(columnNumber int) string {
    var result string = ""
    dictionary := make(map[int]rune)
    for index,character := range "ABCDEFGHIJKLMNOPQRSTUVWXYZ" {
        dictionary[index+1]=character
    }
    for columnNumber > 0 {
        quotient := columnNumber / 26
        remainder := columnNumber % 26
        if remainder == 0{
            result=string(dictionary[26])+result
            columnNumber = quotient-1
        }else{
            result=string(dictionary[remainder])+result
            columnNumber = quotient
        }
    }
    return result
}