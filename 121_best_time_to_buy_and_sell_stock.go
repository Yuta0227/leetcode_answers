package main
import (
    "math"
)
func maxProfit(prices []int) int {
    minPrice:=math.MaxInt
    maxProfit:=0
    for _,value := range prices{
        if value < minPrice{
            minPrice=value
        }
        profit:=value-minPrice
        if profit>maxProfit{
            maxProfit=profit
        }
    }
    return maxProfit;
}