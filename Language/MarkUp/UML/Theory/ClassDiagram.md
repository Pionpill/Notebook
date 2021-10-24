<link rel=stylesheet href="style.css">

# Class Diagram
## 类图基础
### 类图的组成
- 类图的元素：类(包含接口)，关系
- 类图由三部分组成：名称(Name)，属性(Attribute)，操作(Operation)
## 类之间的关系
### 关联(association)

- 关联关系指明了对象之间的联系，一般有一对一，一对多，多对多的关系
- 在 UML 中，使用实线代表关联关系<br>
    ```plantuml
    class School
    School "1"---"1" President
    School "1"---"1..n" Student
    Teacher "1..n" --- "1..n" Student
    ```
- JAVA 代码实现
```java
    class School {
        Class schoolClass;
        Student schoolStudent;

        public Student init(String name){
            this.name = name;
        }
    }

    class Class {
        public name;
        public teacher;
        Student classStudent;

        public Student init(String name){
            this.name = name;
        }
    }
```

### 泛化(generalization)
- 泛化就是继承，在 UML 中使用空心三角箭头表示泛化<br>
    ```plantuml
    Class People
    People <|-- Student
    People <|-- Teacher
    Student <|-- Undergraduate
    ```
- Java 代码实现
    ```java
    public class User {
        private Long id;
        private String name;
    }
    public class Employee extends User {
        private float salary;
    }
    public class Customer extends User {
        private String address;
    }
    ```
### 实现(realization)
- 实现关系指一个 class 类实现 interface 接口的功能。
- Java 中使用 implements 关键字表示实现接口
- 在 UML 中使用空心三角箭头的虚线表示实现 <br>
    ```plantuml
    interface People
    class Student 
    People <|.. Student
    ```
- Java 代码实现
    ```java
    public interface People {
        public float name;
    }
    public class Student implements People {
        private String id;
    }
    ```

### 聚合(aggregation)
- 集合表示逻辑上或者社会上部分组成整体
- 在 UML 中使用空心菱形箭头表示聚合 <br>
    ```plantuml
    class Club
    Club o-- Member
    ```
- java 代码
    ```java
    public class Club {
        public string name;
        public Member member1;
    }
    public class Member {
        public string name;
        public string id;
    }
    ```
### 组成(composition)
- 组成表示物理上部分组成正例
- 在 UML 中使用实心菱形箭头表示聚合 <br>
    ```plantuml
    class Car
    Car *-- Type
    Car *-- Engine
    ```
- java 代码
    ```java
    public class Car {
        public string name;
        public Type myType;
    }
    public class Type {
        public string name;
        public datetime data;
    }
    ```
### 依赖(dependency)
- 依赖关系表示一个类依赖于另一个类的定义
- 在 UML 中使用虚线箭头表示依赖 <br>
    ```plantuml
    class People
    People ..> Boat 
    ```
- java 代码实现
    ```java
    public class BClass {
        public String name;
    }
    public class AClass {
        private BClass b1;              // 依赖关系1：成员变量
        public void work(BClass b2) {   // 依赖关系2：方法参数
        }
        public void dowork() {
            BClass b3;                  // 依赖关系3：方法内的局部变量
        }
    }
    ```

### 其他
- 关系强度：generalization &rarr; impanelment &rarr; composition &rarr; aggregation &rarr; association &rarr; dependency
- 在java代码实现时，关联，聚合，组成关系形式一样。