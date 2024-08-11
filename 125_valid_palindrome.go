package main
import(
    "strings"
    "regexp"
)
func isPalindrome(s string) bool {
    s=strings.ToLower(s)
    var result bool = true
    re:=regexp.MustCompile("[^a-zA-Z0-9]+")
    cleanedStr :=re.ReplaceAllString(s,"")
    left:=0
    right:=len(cleanedStr)-1
    for left < right {
        if cleanedStr[left]!=cleanedStr[right]{
            result=false
        }
        left++
        right--
    }
    return result
}