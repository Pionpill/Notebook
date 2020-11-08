max_num = int(input('输入一个正整数：'))
sum = 0
n = len(str(max_num))

temp = max_num
while temp:
    single = temp % 10
    sum += single**n
    temp //= 10

if sum == max_num:
    print(max_num,"是阿姆斯特朗数")
else:
    print("不是呢")