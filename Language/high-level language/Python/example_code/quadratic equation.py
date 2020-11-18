from math import *

a = float(input('a:'))
b = float(input('b:'))
c = float(input('c:'))

delta = b**2-4*a*c

x1 = (-b+sqrt(delta))/(2*a)
x2 = (-b-sqrt(delta))/(2*a)

print('两个结果为:x1={0:3f},x2={1:3f}'.format(x1, x2))