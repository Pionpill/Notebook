# **NAMESPACE**
参考文献 [runoob](https://www.runoob.com/python3/python3-class.html)

## **namespace**
> office: A namespace is a mapping from names to objects.Most namespaces are currently implemented as Python dictionaries
- types of namespace
  - built-in names
  - global names
  - local names
- seek order when use a parameter
  - local >> global >> built-in 

## **scope**
> office: A scope is a textual region of a Python program where a namespace is directly accessible. "Directly accessible" here means that an unqualified reference to a name attempts to find the name in the namespace.

## **global & nonlocal**
- example 1
    ```python
    num = 1
    def fun1():
        global num 
        print(num) 
        num = 123
        print(num)
    fun1()
    print(num)

    # out
    1
    123
    123
    ```
- example 2
    ```python
    def outer():
        num = 10
        def inner():
            nonlocal num   # nonlocal关键字声明
            num = 100
            print(num)
        inner()
        print(num)
    outer()

    # out
    100
    100
    ```