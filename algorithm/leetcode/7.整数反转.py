#
# @lc app=leetcode.cn id=7 lang=python3
#
# [7] 整数反转
#

# @lc code=start
class Solution:
    def reverse(self, x: int) -> int:
        out = 0
        negative = False
        if x < 0:
            negative = True
            x = abs(x)
        while x != 0:
            temp = x % 10
            out = out * 10 + temp
            x //= 10
        if negative:
            out = 0 - out
        if out < -pow(2, 31) or out > pow(2, 31) - 1:
            out = 0
        return out
# @lc code=end
