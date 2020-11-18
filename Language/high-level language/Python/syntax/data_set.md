# **SET**
参考文献 [runoob](https://www.runoob.com/python3/python3-set.html)

## **assign**
- set( ) / { }: assign a set
- empty set: set( ) only
    ```python
    >>> basket = {'apple', 'orange', 'apple', 'pear', 'orange', 'banana'}
    >>> print(basket)                      # 这里演示的是去重功能
    {'orange', 'banana', 'pear', 'apple'}
    >>> 'orange' in basket                 # 快速判断元素是否在集合内
    True
    >>> 'crabgrass' in basket
    False

    >>> # 下面展示两个集合间的运算.
    ...
    >>> a = set('abracadabra')
    >>> b = set('alacazam')
    >>> a                                  
    {'a', 'r', 'b', 'c', 'd'}
    >>> a - b                              # 集合a中包含而集合b中不包含的元素
    {'r', 'd', 'b'}
    >>> a | b                              # 集合a或b中包含的所有元素
    {'a', 'c', 'r', 'd', 'b', 'm', 'z', 'l'}
    >>> a & b                              # 集合a和b中都包含了的元素
    {'a', 'c'}
    >>> a ^ b                              # 不同时包含于a和b的元素
    {'r', 'd', 'b', 'm', 'z', 'l'}
    ```

## **add & update**
- s.add( x )
  ```python
    >>> thisset = set(("Google", "Runoob", "Taobao"))
    >>> thisset.add("Facebook")
    >>> print(thisset)
    {'Taobao', 'Facebook', 'Google', 'Runoob'}
  ```
- s.update( x )
  ```update
    >>> thisset = set(("Google", "Runoob", "Taobao"))
    >>> thisset.update({1,3})
    >>> print(thisset)
    {1, 3, 'Google', 'Taobao', 'Runoob'}
    >>> thisset.update([1,4],[5,6])  
    >>> print(thisset)
    {1, 3, 4, 5, 6, 'Google', 'Taobao', 'Runoob'}
    >>>
  ```

## **remove**
- s.remove(x)
    ```python
    >>> thisset = set(("Google", "Runoob", "Taobao"))
    >>> thisset.remove("Taobao")
    >>> print(thisset)
    {'Google', 'Runoob'}
    >>> thisset.remove("Facebook")   # 不存在会发生错误
    Traceback (most recent call last):
    File "<stdin>", line 1, in <module>
    KeyError: 'Facebook'
    >>>
    ```
- s.discard(x)
    ```python
    >>> thisset = set(("Google", "Runoob", "Taobao"))
    >>> thisset.discard("Facebook")  # 不存在不会发生错误
    >>> print(thisset)
    {'Taobao', 'Google', 'Runoob'}
    ```
- s.pop(x) : delete a element randomly
    ```python
    thisset = set(("Google", "Runoob", "Taobao", "Facebook"))
    x = thisset.pop()
    print(x)
    # out
    Runoob
    ```