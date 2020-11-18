# pylint: disable=no-member
from math import *

a = float(input('a='))
b = float(input('b='))
c = float(input('c='))

s = (a+b+c)/2

area = sqrt(s*(s-a)*(s-b)*(s-c))

print('三角形面积为：{0:3f}'.format(area))
