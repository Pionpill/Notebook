# **String**
参考文献 [runoob](https://www.runoob.com/python3/python3-string.html)

## **assign**
- use ' or " to assign string
    ``` python
    var1 = 'Hello World!'
    var2 = "Runoob"
    ```

## **visit value**
- fomm start to end: 0
- from end to stare: -1
    ```python
    var1 = 'Hello World!'
    var2 = "Runoob"
    
    print ("var1[0]: ", var1[0])
    print ("var2[1:5]: ", var2[1:5])
    ```

## **update**
-  example
    ```python
    var1 = 'Hello World!'
    print ("已更新字符串 : ", var1[:6] + 'Runoob!')
    ```

## **ESC**
- special character
  |   ESC   | description     |
  | :-----: | --------------- |
  | \\(end) | continue line   |
  |   \\a   | ring            |
  |   \\b   | backspack       |
  |  \\000  | empty           |
  |   \\n   | linefeed        |
  |   \\v   | Vertical tabs   |
  |   \\t   | Horizontal tabs |
  |   \\r   | carriage return |
  |   \f    | change page     |
  |   \o    | oct             |
  |   \x    | hex             |
  |         |                 |

## **operator**
- a="Hello" b="Python"
  | operator | description                 | example          |
  | :------: | --------------------------- | ---------------- |
  |    +     | link                        | a+b: HelloPython |
  |    *     | multiple                    | a*2:HelloHello   |
  |    []    | get element                 | a[1]:e           |
  |  [ : ]   | get part of elements        | a[1:4]:ell       |
  |    in    | if included,return True     | 'H' in a:True    |
  |  not in  | if not includef,return True | 'M'not in a:True |
  |   r/R    | origin string               | print( r'\n' )   |
  |    %     | format                      |                  |
  |          |                             |                  |

## **format**
- use % to format string just like c
  | symbol | description                      |
  | :----: | -------------------------------- |
  |   %c   | char and ASCII                   |
  |   %s   | string                           |
  |   %d   | integer                          |
  |   %u   | unsigned integer                 |
  |   %o   | unsigned oct integer             |
  |   %x   | unsigned hex integer             |
  |   %X   | unsigned hex integer (uppercase) |
  |   %f   | float (able to assign precision) |
  |   %e   | float (scientific notation)      |
  |   %E   | same as %e                       |
  |   %g   | abbr for %f and %e               |
  |   %G   | abbr for %F and %E               |
  |   %p   | get address (hex)                |
  |        |                                  |

- assisted instruction
  | symbol | function                               |
  | :----: | -------------------------------------- |
  |   *    | define width or precision              |
  |   -    | left-justified                         |
  |   +    | display + berfore positive number      |
  | \<sp>  | display blank before positive number   |
  |   #    | display 0 cofore oct and 0x before hex |
  |   0    | replace 0 with blank                   |
  |   %    | print a % while using %%               |
  | (var)  | map                                    |
  |  m.n   | m:min width n:precision                |
  |        |                                        |

## **"""**
- Three quotes make a string do linefeed when printing as same as in source code
  ```python
  para_str = """这是一个多行字符串的实例
  多行字符串可以使用制表符
  """
  print (para_str)

  # out
  这是一个多行字符串的实例
  多行字符串可以使用制表符
  ```

## **f-string**
- grammer：f' {expression}content '
- expression will be jundged by python
  ```python
  # Python 3.6
  >>> x = 1
  >>> print(f'{x+1}')   
  2
  # Python 3.8
  >>> x = 1
  >>> print(f'{x+1=}')   
  'x+1=2'
  ```