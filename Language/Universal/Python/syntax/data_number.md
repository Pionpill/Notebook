# **Number**
参考文献 [runoob](https://www.runoob.com/python3/python3-number.html)

## **declare and delete**
> number is not allowed to be changed after assigning
```python
var1 = 1
var2 = 10
```
> use del() to delete single or multiple quotes
```pyhton
del var1[,var2[,var3[....,varN]]]
del var
del var_a, var_b
```

> three types of number
- int ：no size limitation, it can be used as long int in C++
  - use hex or oct to represent a nember
  - ```python
    number = 0xA0F   # hex 2575
    number = 0o37    # oct 31
    ```
- float ：able to use science notation to assign a float number ($2.5e2 = 2.5\times10^{2} = 250$)
- complex ：use a + bj or complex(a,b) to assign

> type conversion
- complex(x,y): x+yi

> number operation
- //:the result is not always int number,but related to the numbers it operating

> math constant
- pi
- e