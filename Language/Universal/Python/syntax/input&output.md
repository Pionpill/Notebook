# **IO**
参考文献 [runoob](https://www.runoob.com/python3/python3-inputoutput.html)

## **standard output**
- output format
  - str(): return an expression form make user easy to read
  - repr(): make an expression form make interpreter easy to read
  - example
    ```python
    >>> s = 'Hello, Runoob'
    >>> str(s)
    'Hello, Runoob'
    >>> repr(s)
    "'Hello, Runoob'"
    >>> str(1/7)
    '0.14285714285714285'
    >>> x = 10 * 3.25
    >>> y = 200 * 200
    >>> s = 'x 的值为： ' + repr(x) + ',  y 的值为：' + repr(y) + '...'
    >>> print(s)
    x 的值为： 32.5,  y 的值为：40000...
    >>> #  repr() 函数可以转义字符串中的特殊字符
    ... hello = 'hello, runoob\n'
    >>> hellos = repr(hello)
    >>> print(hellos)
    'hello, runoob\n'
    >>> # repr() 的参数可以是 Python 的任何对象
    ... repr((x, y, ('Google', 'Runoob')))
    "(32.5, 40000, ('Google', 'Runoob'))"
    ```
- format control
  - rjust(): align right 
  - ljust(): align left
  - center(): align center
  - example
    ```python
    >>> for x in range(1, 11):
    ...     print(repr(x).rjust(2), repr(x*x).rjust(3), end=' ')
    ...     # 注意前一行 'end' 的使用
    ...     print(repr(x*x*x).rjust(4))
    ...
    1   1    1
    2   4    8
    3   9   27
    4  16   64
    5  25  125
    6  36  216
    7  49  343
    8  64  512
    9  81  729
    10 100 1000
    ```
  - zfill(): fill empty with 0
- str.foramt()
  - formatting words will be replaced by parameter in format()
  - add number to give an order
  - add keyname
  - example
    ```python
    >>> print('{0} 和 {1}'.format('Google', 'Runoob'))
    Google 和 Runoob
    >>> print('{1} 和 {0}'.format('Google', 'Runoob'))
    Runoob 和 Google

    >>> print('{name}网址： {site}'.format(name='菜鸟教程', site='www.runoob.com'))
    菜鸟教程网址： www.runoob.com
    ```
  - !a: ascii()
  - !s: str()
  - !r: repr()
  - example
    ```python
    >>> import math
    >>> print('常量 PI 的值近似为： {}。'.format(math.pi))
    常量 PI 的值近似为： 3.141592653589793。
    >>> print('常量 PI 的值近似为： {!r}。'.format(math.pi))
    常量 PI 的值近似为： 3.141592653589793。
    ```
  - : deltail control
  - example
    ```python
    >>> import math
    >>> print('常量 PI 的值近似为 {0:.3f}。'.format(math.pi))
    常量 PI 的值近似为 3.142。
    ```
  - :num set width
  - example
    ```python
    >>> table = {'Google': 1, 'Runoob': 2, 'Taobao': 3}
    >>> for name, number in table.items():
    ...     print('{0:10} ==> {1:10d}'.format(name, number))
    ...
    Google     ==>          1
    Runoob     ==>          2
    Taobao     ==>          3
    ```
  - use name rather number
  - example
    ```python
    >>> table = {'Google': 1, 'Runoob': 2, 'Taobao': 3}
    >>> print('Runoob: {0[Runoob]:d}; Google: {0[Google]:d}; Taobao: {0[Taobao]:d}'.format(table))
    Runoob: 2; Google: 1; Taobao: 3

    >>> table = {'Google': 1, 'Runoob': 2, 'Taobao': 3}
    >>> print('Runoob: {Runoob:d}; Google: {Google:d}; Taobao: {Taobao:d}'.format(**table))
    Runoob: 2; Google: 1; Taobao: 3
    ```

## **standard input**
- input
  - example
    ```python
    str = input("请输入：");
    print ("你输入的内容是: ", str)
    ```

## **file IO**
> open(filename, mode)
- filename: file path
- mode: way to open a file
- model list
    | model | read  | write | crate | cover | p(begin) | p(end) |
    | :---: | :---: | :---: | :---: | :---: | :------: | :----: |
    |   r   |   +   |       |       |       |    +     |        |
    |  r+   |   +   |   +   |       |       |    +     |        |
    |   w   |       |   +   |   +   |   +   |    +     |        |
    |  w+   |   +   |   +   |   +   |   +   |    +     |        |
    |   a   |       |   +   |   +   |       |          |   +    |
    |  a+   |   +   |   +   |   +   |       |          |   +    |
    |       |       |       |       |       |          |        |
- other model
  - t: text module
  - x: create a new file and write
- example
    ```python
    f = open("/tmp/foo.txt", "w")
    f.write( "Python 是一个非常好的语言。\n是的，的确非常好!!\n" )
    f.close()
    ```
- binary format: add b
- example: rb 
> f.read(size)
- example
    ```python
    f = open("/tmp/foo.txt", "r")
    str = f.read()
    print(str)
    f.close()
    # out
    Python 是一个非常好的语言。
    ```
> f.readline()
- last line: return empty string
> f.readlines()
- read all lines in file
    ```python
    f = open("/tmp/foo.txt", "r")
    str = f.readlines()
    print(str)
    f.close()
    # out
    ['Python 是一个非常好的语言。\n', '是的，的确非常好!!\n']
    ```
    ```python
    f = open("/tmp/foo.txt", "r")
    for line in f:
        print(line, end='')
    f.close()
    # out
    Python 是一个非常好的语言。
    是的，的确非常好!!
    ```
> f.write()
- write string in pointed file and return the number of chars in string
    ```python
    f = open("/tmp/foo.txt", "w")
    num = f.write( "Python 是一个非常好的语言。\n是的，的确非常好!!\n" )
    print(num)
    f.close()
    # out
    29
    ```
- if data type isn't string, we shall transfer first
    ```python
    f = open("/tmp/foo1.txt", "w")
    value = ('www.runoob.com', 14)
    s = str(value)
    f.write(s)
    f.close()
    ```
> f.tell(): return the position, count from the benginning type  

> f.seek(offset, from_what): change the position
- offset: the number of moving character
- from_what
  - 0: begin
  - 1: current position
  - 2: end

> f.close()
- example
    ```python
    >>> f.close()
    >>> f.read()
    Traceback (most recent call last):
    File "<stdin>", line 1, in ?
    ValueError: I/O operation on closed file
    ```
- with...as...
  - help you close the file when finishing
    ```python
    >>> with open('/tmp/foo.txt', 'r') as f:
    ...     read_data = f.read()
    >>> f.closed
    True
    ```

## **pickle**