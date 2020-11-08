try:
    num = int(input('输入一个整数：'))
except (ValueError):
    print('输入的不是整数')

if num % 2 == 0:
    print('{0}是偶数'.format(num))
else:
    print('{0}是奇数'.format(num))