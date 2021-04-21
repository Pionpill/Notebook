#
# @lc app=leetcode.cn id=1 lang=python3
#
# [1] 两数之和
#

# @lc code=start
class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
        for i in range(len(nums) - 1):
            base = nums[i]
            for j in range(i + 1, len(nums)):
                if base + nums[j] == target:
                    return [i, j]
# @lc code=end
