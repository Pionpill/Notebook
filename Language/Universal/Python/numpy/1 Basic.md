<link rel=stylesheet href=style.css>
<h1> Numpy 基础知识 </h1>
<h2> 1 Ndarray 对象 </h2>
<h3> 1.1 ndarray 数组对象概念 </h3>
<h4> ndarray 作用 </h4>

  - 存放同类型元素的多维数组
  - 每个元素拥有相同的内存大小

<h4> ndarray 组成 </h4>

  - 指向数据的指针
  - 数据类型或 dtype
  - 一个表示数组形状 (shape) 的元组
  - 一个跨度元组 (stride) ,其中整数指的是为了前进到当前维度下一个元素需要跨过的字节数

<h3> 1.2 ndarray 数组对象创建 </h3>
<h4> 方法原型及参数说明 </h4>

  - array 方法原型
    ```python
    numpy.array(object, dtype = None, copy = True, order = None, subok = False, ndmin = 0)
    ```
  - 参数说明
    |  名称  |               描述               |  可选   |
    | :----: | :------------------------------: | :-----: |
    | object |         数组或嵌套的数列         |         |
    | dtype  |        数组元素的数据类型        | &radic; |
    |  copy  |           对象是否复制           | &radic; |
    | order  |  C:行方向 F:列方向 A:任意(默认)  | &radic; |
    | subok  | 默认但会一个与基类类型一致的数组 | &radic; |
    | ndmin  |      指定生成数组的最小维度      | &radic; |

<h4> 实例 </h4>

  - import numpy as np
    ```python
    a = np.array([1,2,3])
    print(a)                # [1 2 3]
    b = np.array([[1,2],[3,4]])
    print(b)                # [[1 2 ][3 4]]
    c = np.array([1,2,3,4,5], ndmin = 2)
    print(c)                # [[1,2,3,4,5]]
    d = np.array([1,2,3], dtype = complex)
    print(d)                # [1.+0.j 2.+0.j 3.+0.j]
    ```

<h2> 2 NumPy 数据类型 </h2>
<h3> 数据类型 </h3>

  - 常用基本数据类型
    |   名称    |          描述          |        数据拓展        |
    | :-------: | :--------------------: | :--------------------: |
    |   bool_   |   布尔值(True/False)   |                        |
    |   int_    |      默认整数类型      |                        |
    |   intc    |    与 C 的 int 一致    |                        |
    |   intp    |   用于索引的整数类型   |                        |
    | int(num)  |    指定位数的整型数    | int8,int16,int32,int64 |
    | uint(num) | 指定位数的无符号整型数 | int8,int16,int32,int64 |