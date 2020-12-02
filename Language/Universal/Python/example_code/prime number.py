while True:
    mark = True
    try:
        num = int(input("请输入一个正整数:"))
    except ValueError:
        print("输入的不是正整数")
        continue

    if num == 1:
        mark = False
    else:
        for i in range(2, num):
            if num % i == 0:
                mark = False
                break
    if mark:
        print(num, '是质数')
    else:
        print(num, '不是质数')


