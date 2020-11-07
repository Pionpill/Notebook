# **String**
参考文献 [runoob](https://www.runoob.com/python3/python3-list.html)

## **assign**
- []：list=[element1,element2,element3......]

## **visit vaule**
- same as string
    ```python
    list = ['red', 'green', 'blue', 'yellow', 'white', 'black']
    print( list[0] )
    print( list[1] )
    print( list[2] )
    print( list[-1] )
    print( list[-2] )
    print( list[-3] )
    # out
    red green blue black white yellow

    nums = [10, 20, 30, 40, 50, 60, 70, 80, 90]
    print(nums[0:4])
    # out
    10, 20, 30, 40

    list = ['Google', 'Runoob', "Zhihu", "Taobao", "Wiki"]
    print ("list[1]: ", list[1])
    print ("list[1:-2]: ", list[1:-2])
    # out
    list[1]:  Runoob
    list[1:-2]:  ['Runoob', 'Zhihu']
    ```

## **update element**
- ways: change element in list or use append()
    ```python
    list = ['Google', 'Runoob', 1997, 2000]
    print ("第三个元素为 : ", list[2])
    list[2] = 2001
    print ("更新后的第三个元素为 : ", list[2])
    #out
    第三个元素为 :  1997
    更新后的第三个元素为 :  2001
    ```

## **delete element**
- use del to delete element
    ```python
    list = ['Google', 'Runoob', 1997, 2000]
    print ("原始列表 : ", list)
    del list[2]
    print ("删除第三个元素 : ", list)

    #out
    原始列表 :  ['Google', 'Runoob', 1997, 2000]
    删除第三个元素 :  ['Google', 'Runoob', 2000]
    ```

## **script operator**  
- +/*: same as string 
    | expression                            | outcome                      | description |
    | ------------------------------------- | ---------------------------- | ----------- |
    | len([1, 2, 3])                        | 3                            | length      |
    | [1, 2, 3] + [4, 5, 6]                 | [1, 2, 3, 4, 5, 6]           |             |
    | ['Hi!'] * 4                           | ['Hi!', 'Hi!', 'Hi!', 'Hi!'] |             |
    | 3 in [1, 2, 3]                        | True                         |             |
    | for x in [1, 2, 3]: print(x, end=" ") | 1 2 3                        | iteration   |
    |                                       |                              |             |

## **cut and joint**
- same as string
- example: L=['Google', 'Runoob', 'Taobao']
    | expression | outcome              | description          |
    | ---------- | -------------------- | -------------------- |
    | L[2]       | 'Taobao'             |                      |
    | L[-2]      | 'Runoob'             | count from the right |
    | L[1:]      | ['Runoob', 'Taobao'] | from seconf to end   |
    |            |                      |                      |

## **nest**
- example
    ```python
    >>>a = ['a', 'b', 'c']
    >>> n = [1, 2, 3]
    >>> x = [a, n]
    >>> x
    [['a', 'b', 'c'], [1, 2, 3]]
    >>> x[0]
    ['a', 'b', 'c']
    >>> x[0][1]
    'b'
    ```