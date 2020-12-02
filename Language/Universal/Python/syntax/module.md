# **MODULE**
参考文献 [runoob](https://www.runoob.com/python3/python3-module.html)

## **import**
> import module1[, module2[,... moduleN]
- example
    ```python
    # Filename: support.py
    def print_func( par ):
        print ("Hello : ", par)
        return
    # Filename: test.py
    import support
    support.print_func("Runoob")
    # out
    Hello :  Runoob
    ```
- module gives a link rather than write function in current file
- grammer: filename.functionname
- example
    ```python
    # Filename: fibo.py
    def fib(n):
        a, b = 0, 1
        while b < n:
            print(b, end=' ')
            a, b = b, a+b
        print() 
    def fib2(n):
        result = []
        a, b = 0, 1
        while b < n:
            result.append(b)
            a, b = b, a+b
        return result
    # filename: test.py
    import fibo
    fibo.fib(1000)
        # out: 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987
    fibo.fib2(100)
        # out: [1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89]
    fibo.__name__
        # out: 'fibo'
    fib = fibo.fib
    fib(500)
        # out: 1 1 2 3 5 8 13 21 34 55 89 144 233 377
    ```

## **form...import**
> from modname import name1[, name2[, ... nameN]]
- specify function's namespace will be imported
- example
    ```python
    from fibo import fib, fib2
    fib(500)
    # out: 1 1 2 3 5 8 13 21 34 55 89 144 233 377
    ```

## **from...import***
> from modname import *
- import all functions' namespace

## **\_\_name__**
- use \_\_name__ attribute to make grogram block execute when module runs
- \_\_name__ == \_\_main__ : module itself runs otherwise, the function is imported
    ```python
    if __name__ == '__main__':
        print('程序自身在运行')
    else:
        print('我来自另一模块')
    # out
    filename: using_name.py
    程序自身在运行
    filename: test.py:import using_name
    我来自另一模块
    ```

## **dir()**
- return a string containing all name the module have
    ```python
    >>> a = [1, 2, 3, 4, 5]
    >>> import fibo
    >>> fib = fibo.fib
    >>> dir() # 得到一个当前模块中定义的属性列表
    ['__builtins__', '__name__', 'a', 'fib', 'fibo', 'sys']
    >>> a = 5 # 建立一个新的变量 'a'
    >>> dir()
    ['__builtins__', '__doc__', '__name__', 'a', 'sys']
    >>>
    >>> del a # 删除变量名a
    >>>
    >>> dir()
    ['__builtins__', '__doc__', '__name__', 'sys']
    >>>
    ```

## **package**
- \_\_init__.py: a must file to mark python recognize a package 
- example：music package
    ```
    sound/                          顶层包
        __init__.py               初始化 sound 包
        formats/                  文件格式转换子包
                __init__.py
                wavread.py
                wavwrite.py
                aiffread.py
                aiffwrite.py
                auread.py
                auwrite.py
                ...
        effects/                  声音效果子包
                __init__.py
                echo.py
                surround.py
                reverse.py
                ...
        filters/                  filters 子包
                __init__.py
                equalizer.py
                vocoder.py
                karaoke.py
                ...
    ```
- example：import
    ```python
    # ---+--import--+---
    # package import
    import sound.effects.echo
    # use function
    sound.effects.echo.echofilter(input, output, delay=0.7, atten=4)
    
    # ---+--form...import...--+---
    # package import
    from sound.effects import echo
    # use function
    echo.echofilter(input, output, delay=0.7, atten=4)

    # ---+--form...import...--+---
    # package import
    from sound.effects.echo import echofilter
    # use function
    echofilter(input, output, delay=0.7, atten=4)
    ```
- import *
  - better to assign a \_\_all__ list parameter containing all module name in \_\_init__