# **FUNCTION**

## **define**
- grammer 
    ```python
    def func(var):
        expressions
        <return var>
    ```
- example
    ```python
    def max(a, b):
        if a > b:
            return a
        else:
            return b
    a = 4
    b = 5
    print(max(a, b))
    ```

## **parameter**
- necessary parameter
- input in order
    ```python
    # 定义函数
    def printme( str ):
    # 打印任何传入的字符串
        print (str)
        return
    # 调用函数
    printme("我要调用用户自定义函数!")
    printme("再次调用同一函数")
    ```
- keyword parameter
- allow to input not in order
    ```python
    def printinfo( name, age ):
    "打印任何传入的字符串"
    print ("名字: ", name)
    print ("年龄: ", age)
    return
    printinfo( age=50, name="runoob" )

    # out
    名字:  runoob
    年龄:  50
    ```
- default parameter
    ```python
    def printinfo( name, age = 35 ):
        "打印任何传入的字符串"
        print ("名字: ", name)
        print ("年龄: ", age)
        return
    printinfo( age=50, name="runoob" )
    print ("------------------------")
    printinfo( name="runoob" )

    # out
    名字:  runoob
    年龄:  50
    ------------------------
    名字:  runoob
    年龄:  35
    ```

- indefinite paramerter
- define  indefinite paramerter to manage more parameter than assign
- parameter with * will be assigned as tuple to store all unamed parameter
    ```python
    def printinfo( arg1, *vartuple ):
        "打印任何传入的参数"
        print ("输出: ")
        print (arg1)
        print (vartuple)
    # 调用printinfo 函数
    printinfo( 70, 60, 50 )
    # out
    输出: 
    70
    (60, 50)
    ```
- parameter with ** will be assigned as dictionary to store all unamed parameter
    ```python
    def printinfo( arg1, **vardict ):
        "打印任何传入的参数"
        print ("输出: ")
        print (arg1)
        print (vardict)
    printinfo(1, a=2,b=3)
    # out
    输出: 
    1
    {'a': 2, 'b': 3}
    ```
- parameter after parameter with * must be assigned as keyword if *parameter is skipped 

## **anonymous function**
> lambda [arg1 [,arg2,.....argn]]:expression
  - example
    ```python
    sum = lambda arg1, arg2: arg1 + arg2
    print ("相加后的值为 : ", sum( 10, 20 ))
    print ("相加后的值为 : ", sum( 20, 20 ))
    # out
    相加后的值为 :  30
    相加后的值为 :  40
    ```
## **force location parameter**
-  example
    ```python
    def f(a, b, /, c, d, *, e, f):
        print(a, b, c, d, e, f)
    f(10, 20, 30, d=40, e=50, f=60)  # right
    f(10, b=20, c=30, d=40, e=50, f=60)   # b false: b: kerword not allowed
    f(10, 20, 30, 40, 50, f=60)           # e false: c: keyword must
    ```