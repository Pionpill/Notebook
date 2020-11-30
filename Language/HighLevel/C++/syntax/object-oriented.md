<link rel=stylesheet href=style.css>

<h1> 面向对象 </h1>
<h2> 1 类与对象 </h2>
<h3> 1.1 类与对象基础 </h3>

> 类定义，对象定义，访问数据成员

<h4> 类定义 </h4>

  - 类定义的本质是定义一个数据对象的蓝图
  - 类定义格式
    ```c++
    class classname{
        public:
            int a;
        private:
            int b;
        protected:
            int c;
    };
    ```

<h4> 对象定义 </h4>

  - 对象定义和数据对象申明一样
  - 对象定义格式
    ```c++
    Box Box1;     // 声明 Box1，类型为 Box
    ```

<h4> 访问数据成员 </h4>

  - "<span class=operator>.</span>" ：访问类的对象的公共数据成员
  - 私有成员和保护成员不可以直接被访问
  - 访问数据成员举例
    ```c++
    #include <iostream>
    using namespace std;
    
    class Box{
        public:
            double length;   // 长度
            double breadth;  // 宽度
            double height;   // 高度
    };
    
    int main(){
        Box Box1;        // 声明 Box1，类型为 Box
        double volume = 0.0;     // 用于存储体积
        // box 1 详述
        Box1.height = 5.0; 
        Box1.length = 6.0; 
        Box1.breadth = 7.0;
        // box 1 的体积
        volume = Box1.height * Box1.length * Box1.breadth;
        cout << "Box1 的体积：" << volume <<endl;
        return 0;
    }
    ```



<h3> 1.2 类与对象详细 </h3>

> 类访问修饰符，类成员函数，构造与析构，友元函数，this指针，静态成员

<h4> 类访问修饰符 </h4>

  - 访问修饰符定义
    - 一个类可以有多个 public、protected 或 private 标记区域
    - 成员和类的默认访问修饰符是 private
  - 成员分类
    - 公有（public）成员
      - 公有成员在程序中类的外部是可通过<span class=operator> . </span>访问的
      - 举例代码 <a href="coding/public.cpp">public</a>
    - 私有（private）成员
      - 私有成员变量或函数在类的外部是不可访问的，甚至是不可查看的。
      - 只有类和友元函数可以访问私有成员
      - 实际操作中，我们一般会在私有区域定义数据，在公有区域定义相关的函数，以便在类的外部也可以调用这些函数
      - 举例代码 <a href="coding/private.cpp">private</a>
    - 保护（protected）成员
      - 在基类中，protected（受保护）成员变量或函数与私有成员一致
      - protected 成员在派生类（即子类）中是可访问的
      - 但在继承过程中会出现不同的效果
      - 举例代码 <a href="coding/protected.cpp">protected</a>
    - 成员访问权限
      | 成员类型  | 类中访问 | 类外访问 | 继承后类中访问 | 继承后类外访问 |
      | --------- | :------: | :------: | :------------: | :------------: |
      | public    | &radic;  | &radic;  |    &radic;     |    &radic;     |
      | protected | &radic;  | &times;  |    &radic;     |    &times;     |
      | private   | &radic;  | &times;  |    &times;     |    &times;     |
  - 成员继承
    - 继承方式
      | 继承方式  | 基类pulic | 基类private | 基类protected |
      | --------- | --------- | ----------- | ------------- |
      | public    | public    | private     | protected     |
      | protected | protected | private     | protected     |
      | private   | private   | private     | private       |
    - 继承特点
      - private 成员只能被本类成员（类内）和友元访问，不能被派生类访问
      - protected 成员可以被派生类访问
    - 代码举例
      - 公有继承代码 <a href="coding/inhert_public.cpp">inhert_public</a>
      - 私有继承代码 <a href="coding/inhert_private.cpp">inhert_private</a>
      - 保护继承代码 <a href="coding/inhert_protected.cpp">inhert_protected</a>

<h4> 类成员函数 </h4>

  - 概念：把定义和原型写在类定义内部的函数
  - 使用：类成员函数可以操作类的任意对象，可以访问对象中的所有成员
  - 成员函数可以定义在类定义内部，或者单独使用范围解析运算符 <span class=operator>::</span> 来定义
    - 在类定义中定义的成员函数把函数声明为内联的，即便没有使用 inline 标识符
        ```c++
        class Box{
        public:
            double length;      // 长度
            double breadth;     // 宽度
            double height;      // 高度
            double getVolume(void){    // 内联成员函数
                return length * breadth * height;
            }
            double getsize(void);
        };

        // 外部定义成员函数
        double Box::getsize(void){    
            return length * breadth * height;
        }
        ```
  - 成员函数的使用
    - 调用成员函数是在对象上使用点运算符 <span class=operator>.</span>
      ```c++
      myBox.getVolume();  // 调用该对象的成员函数
      ```

<h4> 构造与析构 </h4>

  - 类的构造函数
    - 类的构造函数会在每次创建类的新对象时执行
    - 构造函数的名称与类的名称是完全相同的，并且不会返回任何类型,可用于为某些成员变量设置初始值
    - 构造函数举例 <a href="coding/constructor.cpp">constructor</a>
  - 带参数的构造函数
    - 用法和普通带参数的成员函数一致
    - 使用初始化列表来初始化字段
      ```c++
      Line::Line( double len): length(len){
          cout << "Object is being created, length = " 
               << len << endl;
      }
      //等效代码
      Line::Line( double len){
          length = len;
          cout << "Object is being created, length = " 
               << len << endl;
      }
      ```
    - 假设有一个类 C，具有多个字段 X、Y、Z 等需要进行初始化
      ```c++
      C::C( double a, double b, double c): X(a), Y(b), Z(c){
        ....
      }
      ```
  - 拷贝构造函数
    - 拷贝构造函数通常用于
      - 通过使用另一个同类型的对象来初始化新创建的对象
      - 复制对象把它作为参数传递给函数
      - 复制对象，并从函数返回这个对象
    - 拷贝构造函数的定义
      - 如果在类中没有定义拷贝构造函数，编译器会自行定义一个。
      - 如果类带有指针变量，并有动态内存分配，则它必须有一个拷贝构造函数
    - 拷贝构造函数代码 <a href="coding/copy_constructor.cpp">copy_constructor</a>
  - 类的析构函数
    - 类的析构函数是类的一种特殊的成员函数，它会在每次删除所创建的对象时执行
    - 析构函数的名称与类的名称是完全相同的，只是在前面加了个波浪号（~）作为前缀
    - 析构函数有助于在跳出程序（比如关闭文件、释放内存等）前释放资源

<h4> 友元函数</h4>

  - 友元函数的概念
    - 类的友元函数是定义在类外部，但有权访问类的所有私有（private）成员和保护（protected）成员
    - 尽管友元函数的原型有在类的定义中出现过，但是友元函数并不是成员函数
    - 友元可以是一个函数，该函数被称为友元函数；友元也可以是一个类，该类被称为友元类，在这种情况下，整个类及其所有成员都是友元
  - 友元函数
    - 如果要声明函数为一个类的友元，需要在类定义中该函数原型前使用关键字 friend
        ```c++
        class Box{
            private:
                double width;
            public:
                double length;
                friend void printWidth( Box box );
                void setWidth( double wid );
        };
        ```
    - 友元函数代码 <a href="coding/friend.cpp">friend</a>
  - 友元类
    - 声明类 ClassTwo 的所有成员函数作为类 ClassOne 的友元，需要在类 ClassOne 的定义中放置如下声明
        ```c++
        friend class ClassTwo;
        ```

<h4> this 指针 </h4>

  - this指针概念
    - 在 C++ 中，每一个对象都能通过 this 指针来访问自己的地址。this 指针是所有成员函数的隐含参数
    - 友元函数没有 this 指针，因为友元不是类的成员。只有成员函数才有 this 指针
  - 代码
    - this 指针代码举例 <a href="coding/this.cpp">this</a>

<h4> 静态成员 </h4>

  - 静态成员
    - 使用 static 关键字来把类成员定义为静态的。当我们声明类的成员为静态时，这意味着无论创建多少个类的对象，静态成员都只有一个副本
    - 我们不能把静态成员的初始化放置在类的定义中，但是可以在类的外部通过使用范围解析运算符 :: 来重新声明静态变量从而对它进行初始化
    - static 静态成员举例 <a href="coding/static.cpp">static</a>
  - 静态成员函数
    - 如果把函数成员声明为静态的，就可以把函数与类的任何特定对象独立开来
    - 静态成员函数即使在类对象不存在的情况下也能被调用，静态函数只要使用类名加范围解析运算符 :: 就可以访问
    - 静态成员函数只能访问静态成员数据、其他静态成员函数和类外部的其他函数
    - 静态成员函数没有 this 指针
    - static_func 静态成员函数举例 <a href="coding/static_func.cpp">static_func</a>