# **LOOP**

## **while**
> while...else...
```python
while <expression>:
    <statement1>
else:
    <statement2>
```
> single statement
```python
while <expression>: <statement>
```

## **for**
> comman grammer
```python
for <variable> in <sequence>:
    <statements>
else:
    <statements>
```
> range()
``` python
>>>for i in range(5):
>>>     print(i)
# out
0
1
2
3
4
```
```python
>>>for i in range(5,9) :
    print(i)
# out
5
6
7
8
>>>
```
```python
>>>for i in range(0, 10, 3) :
    print(i)
# out
0
3
6
9
>>>
```
```python
>>> a = ['Google', 'Baidu', 'Runoob', 'Taobao', 'QQ']
>>> for i in range(len(a)):
>>>     print(i, a[i])
# out
0 Google
1 Baidu
2 Runoob
3 Taobao
4 QQ
>>>
```

## **break**
- all loop statement can add else sub-statement, but break will skip else sub-statement
```python
for n in range(2, 10):
    for x in range(2, n):
        if n % x == 0:
            print(n, '等于', x, '*', n//x)
            break
    else:
        # 循环中没有找到元素
        print(n, ' 是质数')
# out
2  是质数
3  是质数
4 等于 2 * 2
5  是质数
6 等于 2 * 3
7  是质数
8 等于 2 * 4
9 等于 3 * 3
```

## **pass**
> placeholder statement
``` python
for letter in 'Runoob': 
   if letter == 'o':
      pass
      print ('执行 pass 块')
   print ('当前字母 :', letter)
print ("Good bye!")
# out
当前字母 : R
当前字母 : u
当前字母 : n
执行 pass 块
当前字母 : o
执行 pass 块
当前字母 : o
当前字母 : b
Good bye!
```