#
# @lc app=leetcode.cn id=1 lang=python3
#
# [1] 两数之和
#

# @lc code=start
class Solution:
    # def twoSum(self, nums: List[int], target: int) -> List[int]:
    #     """暴力枚举"""
    #     for i in range(len(nums) - 1):
    #         base = nums[i]
    #         for j in range(i + 1, len(nums)):
    #             if base + nums[j] == target:
    #                 return [i, j]

    def twoSum(self, nums: List[int], target: int) -> List[int]:
        """哈希表法"""
        hashTable = dict()
        for index, value in enumerate(nums):
            if target - value in hashTable:
                return [hashTable[target - value], index]
            hashTable[nums[index]] = index
            # @lc code=end
