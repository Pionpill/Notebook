# **OBJECT ORIENTED**
参考文献 [runoob](https://www.runoob.com/python3/python3-class.html)

## **class**
- define class
    ```python
    class ClassName:
        <statement-1>
        ...
        <statement-N>
    ```
- class object
    ```python
    class MyClass:
        i = 12345
        def f(self):
            return 'hello world'
    x = MyClass()
    print("MyClass 类的属性 i 为：", x.i)
    print("MyClass 类的方法 f 输出为：", x.f())

    out
    MyClass 类的属性 i 为： 12345
    MyClass 类的方法 f 输出为： hello world
    ```
- construction method: \_\_init__()
- a fextra and first parameter is needed which is often named self
    ```python
    class Complex:
        def __init__(self, realpart, imagpart):
            self.r = realpart
            self.i = imagpart
    x = Complex(3.0, -4.5)
    print(x.r, x.i)   # 输出结果：3.0 -4.5
    ```
- class method
    ```python
    class people:
        # basic attribute
        name = ''
        age = 0
        # private attribute
        __weight = 0
        # method
        def __init__(self,n,a,w):
            self.name = n
            self.age = a
            self.__weight = w
        def speak(self):
            print("%s 说: 我 %d 岁。" %(self.name,self.age))
    
    p = people('runoob',10,30)
    p.speak()
    # out
    runoob 说: 我 10 岁。
    ```

- single inhert
    > class DerivedClassName(modname.BaseClassName):
    - example
        ```python
        class people:
            name = ''
            age = 0
            __weight = 0
            def __init__(self,n,a,w):
                self.name = n
                self.age = a
                self.__weight = w
            def speak(self):
                print("%s 说: 我 %d 岁。" %(self.name,self.age))
        
        class student(people):
            grade = ''
            def __init__(self,n,a,w,g):
                #调用父类的构函
                people.__init__(self,n,a,w)
                self.grade = g
            #覆写父类的方法
            def speak(self):
                print("%s 说: 我 %d 岁了，我在读 %d 年级"%(self.name,self.age,self.grade))
        
        s = student('ken',10,60,3)
        s.speak()
        ```

- mutiple inhert
    > class DerivedClassName(Base1, Base2, Base3):
    - example
        ```python
        class people:
            name = ''
            age = 0
            __weight = 0
            def __init__(self,n,a,w):
                self.name = n
                self.age = a
                self.__weight = w
            def speak(self):
                print("%s 说: 我 %d 岁。" %(self.name,self.age))
        
        class student(people):
            grade = ''
            def __init__(self,n,a,w,g):
                people.__init__(self,n,a,w)
                self.grade = g
            def speak(self):
                print("%s 说: 我 %d 岁了，我在读 %d 年级"%(self.name,self.age,self.grade))
        
        class speaker():
            topic = ''
            name = ''
            def __init__(self,n,t):
                self.name = n
                self.topic = t
            def speak(self):
                print("我叫 %s，我是一个演说家，我演讲的主题是 %s"%(self.name,self.topic))
        
        class sample(speaker,student):
            a =''
            def __init__(self,n,a,w,g,t):
                student.__init__(self,n,a,w,g)
                speaker.__init__(self,n,t)
        
        test = sample("Tim",25,80,4,"Python")
        test.speak()   
        ```

- attribute and method
  - private attribute: add __ before attribute or method
- special method
  |    method     | description    |
  | :-----------: | -------------- |
  |  \_\_init__   | 构造函数       |
  |   \_\_del__   | 析构函数       |
  |  \_\_repr__   | 打印，转换     |
  | \_\_setitem__ | 按照索引赋值   |
  | \_\_getitem__ | 按照索引获取值 |
  |   \_\_len__   | 获得长度       |
  |   \_\_cmp__   | 比较运算       |
  |  \_\_call__   | 函数调用       |
  |   \_\_add__   | 加运算         |
  |   \_\_sub__   | 减运算         |
  |   \_\_mul__   | 乘运算         |
  | \_\_truediv__ | 除运算         |
  |   \_\_mod__   | 求余运算       |
  |   \_\pow__    | 乘方           |
  |               |                |

- operator overload
  - example
    ```python
    class Vector:
    def __init__(self, a, b):
        self.a = a
        self.b = b
    def __str__(self):
        return 'Vector (%d, %d)' % (self.a, self.b)
    def __add__(self,other):
        return Vector(self.a + other.a, self.b + other.b)
    
    v1 = Vector(2,10)
    v2 = Vector(5,-2)
    print (v1 + v2)
    ```