# **Number**
## **declare and delete**
> number 类型的数据不允许被改变
```python
var1 = 1
var2 = 10
```
> 可以使用 del() 语句删除单个或多个对象的引用
```pyhton
del var1[,var2[,var3[....,varN]]]
del var
del var_a, var_b
```

> 数值类型
- int 整型：没有限制大小，可以当long使用
  - 可以使用十六进制和八进制来代表整数
  - ```python
    number = 0xA0F   # 十六进制
    number = 0o37    # 八进制
    ```
- float 浮点型：浮点型也可以使用科学计数法表示 ($2.5e2 = 2.5\times10^{2} = 250$)
- complex 复数：可以用 a + bj ,或者 complex(a,b) 表示