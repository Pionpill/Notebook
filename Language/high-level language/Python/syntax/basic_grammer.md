# **basic grammer**
参考文献 [runoob](https://www.runoob.com/python3/python3-basic-syntax.html)

## **keyword**
> 'False', 'None', 'True', 'and', 'as', 'assert', 'break', 'class', 'continue', 'def', 'del', 'elif', 'else', 'except', 'finally', 'for', 'from', 'global', 'if', 'import', 'in', 'is', 'lambda', 'nonlocal', 'not', 'or', 'pass', 'raise', 'return', 'try', 'while', 'with', 'yield'

<br>

## **annotation**
> single line: #  
  ```python
  # this is annotation
  print ("hello world") #alse annotation
  ```
> multiple lines: '''~~coding~~''' or """~~coding~~"""
```python
'''
the first sentence
the second sentence
'''
```
```python
"""
the first sentence
the second sentence
"""
```
<br>

## **line ＆ retract**
> replace retract with {　}
``` python
if True
    print("yes")
else
    print("no")
```
<br>

## **long sentence**
> use \ to mark linefeed
``` python 
total = item_one + \
        item_two + \
        item_three
```
> don't need to use \ while in []&{}&()
``` python
total = ['item_one', 'item_two', 'item_three',
    'item_four', 'item_five']
```
<br>

## **number type**
> four basic type:　int　bool　float　complex  

> string
* the same function:　'　&　"
* through multiple:　'''　&　"""
* escape character:　\
* disable escape aharacter:　r" "
* atuo link string: "this""is""string" &rArr; this is string
* linking string character:　+
* repeating string character:　*
* unable to change string in python
* intercept string:　variable [head subscript : tail subscript : length]
```python
str='Runoob'

print(str)                 # 输出字符串
print(str[0:-1])           # 输出第一个到倒数第二个的所有字符
print(str[0])              # 输出字符串第一个字符
print(str[2:5])            # 输出从第三个开始到第五个的字符
print(str[2:])             # 输出从第三个开始后的所有字符
print(str * 2)             # 输出字符串两次
print(str + '你好')        # 连接字符串
 
print('------------------------------')
 
print('hello\nrunoob')      # 使用反斜杠(\)+n转义特殊字符
print(r'hello\nrunoob')     # 在字符串前面添加一个 r，表示原始字符串，不会发生转义
```
<br>

## **waiting to input**
```python
input("\n\n按下 enter 键后退出。")
```
<br>

## **code groups**
```python
if expression : 
   suite
elif expression : 
   suite 
else : 
   suite
```
<br>

## **print**
> have linefeed tacitly
``` python
x="a"
y="b"
# 换行输出
print( x )
print( y )
```
> use end=" " to forbide linedeed
```python
print( x, end=" " )
print( y, end=" " )
```
<br>

## **import & from...import**
* whole moudule : import somemodule
* one function : from somemodule import somefunction
* some function : from somemodule import firstfunc, secondfunc, thirdfunc
* all functions : from somemodule import *
    ```python
    import sys
    print('================Python import mode==========================')
    print ('命令行参数为:')
    for i in sys.argv:
        print (i)
    print ('\n python 路径为',sys.path)
    ```
    ```python
    from sys import argv,path  #  导入特定的成员
    print('================python from import===================================')
    print('path:',path) # 因为已经导入path成员，所以此处引用时不需要加sys.path
    ```
<br>

## **command line parameter**
> -h     : print this help message and exit