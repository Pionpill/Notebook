# **OPERATOR**
参考文献 [runoob](https://www.runoob.com/python3/python3-basic-operators.html)

## **arithmatic opertaor** 
| operator |  description   |
| :------: | :------------: |
|    +     |                |
|    -     |                |
|    *     |                |
|    /     |     divide     |
|    %     |    delivery    |
|    **    |      pow       |
|    //    | exact division |
|          |                |

```python
#example
a = 21,b = 10,c = 0
c = a + b
print ("1 - c 的值为：", c)
c = a - b
print ("2 - c 的值为：", c)
c = a * b
print ("3 - c 的值为：", c)
c = a / b
print ("4 - c 的值为：", c)
c = a % b
print ("5 - c 的值为：", c)
 
# 修改变量 a 、b 、c
a = 2,b = 3,c = a**b 
print ("6 - c 的值为：", c)
 
a = 10,b = 5,c = a//b 
print ("7 - c 的值为：", c)

#consequence
1 - c 的值为： 31
2 - c 的值为： 11
3 - c 的值为： 210
4 - c 的值为： 2.1
5 - c 的值为： 1
6 - c 的值为： 8
7 - c 的值为： 2
```
<br>

## **comparing operator**
| operator | description |
| :------: | :---------: |
|    ==    |             |
|    !=    |             |
|    >     |             |
|    <     |             |
|    >=    |             |
|    <=    |             |
|          |             |
<br>

## **assigning operator**
| operator |      description      |
| :------: | :-------------------: |
|    =     |                       |
|    +=    |                       |
|    -=    |                       |
|    *=    |                       |
|    /=    |                       |
|    %=    |                       |
|   **=    |                       |
|   //=    |                       |
|    :=    | omit unnecessary step |
|          |                       |
<br>

## **bit operator**
| operator | description |
| :------: | :---------: |
|    &     |   与运算    |
|    \|    |   或运算    |
|    ^     |  异或运算   |
|    ~     |  取反运算   |
|    <<    |    左移     |
|    >>    |    右移     |
|          |             |
```python
# example
a = 60            # 60 = 0011 1100 
b = 13            # 13 = 0000 1101 
c = 0
 
c = a & b;        # 12 = 0000 1100
print ("1 - c 的值为：", c)
c = a | b;        # 61 = 0011 1101 
print ("2 - c 的值为：", c)
c = a ^ b;        # 49 = 0011 0001
print ("3 - c 的值为：", c)
c = ~a;           # -61 = 1100 0011
print ("4 - c 的值为：", c)
c = a << 2;       # 240 = 1111 0000
print ("5 - c 的值为：", c)
c = a >> 2;       # 15 = 0000 1111
print ("6 - c 的值为：", c)

# consequence
1 - c 的值为： 12
2 - c 的值为： 61
3 - c 的值为： 49
4 - c 的值为： -61
5 - c 的值为： 240
6 - c 的值为： 15
```
<br>

## **logical operator**
* similar to Boolean operation    

| operator | example |              description              |
| :------: | :-----: | :-----------------------------------: |
|   and    | x and y | if x=false return false else return y |
|    or    | x or y  |   if x=true return x else return y    |
|   not    |  not x  |
|          |         |                                       |
<br>

## **member operator**
| operator |        expression        |
| :------: | :----------------------: |
|    in    |  如果在序列中，返回true  |
|  not in  | 如果在不序列中，返回true |
|          |                          |

``` python
# example
a = 10 , b = 20
list = [1, 2, 3, 4, 5 ];
 
if ( a in list ):
   print ("1 - 变量 a 在给定的列表中 list 中")
else:
   print ("1 - 变量 a 不在给定的列表中 list 中")
 
if ( b not in list ):
   print ("2 - 变量 b 不在给定的列表中 list 中")
else:
   print ("2 - 变量 b 在给定的列表中 list 中")
 
a = 2
if ( a in list ):
   print ("3 - 变量 a 在给定的列表中 list 中")
else:
   print ("3 - 变量 a 不在给定的列表中 list 中")

# consequence
1 - 变量 a 不在给定的列表中 list 中
2 - 变量 b 不在给定的列表中 list 中
3 - 变量 a 在给定的列表中 list 中
```
<br>

## **identity operator**
| operator |       example        |
| :------: | :------------------: |
|    is    | 判断是否引用相同对象 |
|  is not  | 判断是否引用不同对象 |
|          |                      |
``` python
# example
a = 20 , b = 20
 
if ( a is b ):
   print ("1 - a 和 b 有相同的标识")
else:
   print ("1 - a 和 b 没有相同的标识")
 
if ( id(a) == id(b) ):
   print ("2 - a 和 b 有相同的标识")
else:
   print ("2 - a 和 b 没有相同的标识")
 
b = 30
if ( a is b ):
   print ("3 - a 和 b 有相同的标识")
else:
   print ("3 - a 和 b 没有相同的标识")
 
if ( a is not b ):
   print ("4 - a 和 b 没有相同的标识")
else:
   print ("4 - a 和 b 有相同的标识")

# consequence
1 - a 和 b 有相同的标识
2 - a 和 b 有相同的标识
3 - a 和 b 没有相同的标识
4 - a 和 b 没有相同的标识
```
<br>

## **priority**
|         operator         |   description    |
| :----------------------: | :--------------: |
|            **            |       指数       |
|          ~ + -           | 位翻转，一元加减 |
|         * / % //         |                  |
|           + -            |                  |
|          >> <<           |                  |
|            &             |     位'AND'      |
|           ^ \|           |                  |
|        < <= > >=         |                  |
|          == !=           |                  |
| = %= /= //= -= += *= **= |                  |
|        is is not         |    身份运算符    |
|        in not in         |    成员运算符    |
|        not and or        |    逻辑运算符    |
|                          |                  |

