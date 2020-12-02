# **TUPLE**
参考文献 [runoob](https://www.runoob.com/python3/python3-tuple.html)

## **assign**
- ( ): tuple=(element1,element2,element3......)
    ```python
    >>> tup1 = ('Google', 'Runoob', 1997, 2000)
    >>> tup2 = (1, 2, 3, 4, 5 )
    >>> tup3 = "a", "b", "c", "d"   #  ()not neccssary
    >>> type(tup3)
    <class 'tuple'>
    ```
- empty: tuple = ()
- single element: add a , after element
    ```python
    >>> tup1 = (50)
    >>> type(tup1)    
    <class 'int'>
    >>> tup1 = (50,)
    >>> type(tup1)    
    <class 'tuple'>
    ```

## **visit**
- same as string

## **update**
- elements in tuple are not allowed to be updated
- assign new tuple tp update elements
    ```python
    tup1 = (12, 34.56)
    tup2 = ('abc', 'xyz')
    tup3 = tup1 + tup2
    print (tup3)
    # out
    (12, 34.56, 'abc', 'xyz')
    ```

## **delete**
- del: same as list

## **operator**
- +/* is allowed in tuple
  | expression                     | outcome                   | description |
  | ------------------------------ | ------------------------- | ----------- |
  | len((1, 2, 3))                 | 3                         | numbers     |
  | (1, 2, 3) + (4, 5, 6)          | (1, 2, 3, 4, 5, 6)        | link        |
  | ('Hi!',) * 4                   | ('Hi!','Hi!','Hi!','Hi!') |             |
  | 3 in (1, 2, 3)                 | True                      |             |
  | for x in (1, 2, 3): print (x,) | 1 2 3                     | iteration   |
  |                                |                           |             |