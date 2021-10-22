<link rel=stylesheet href="style.css">

# Class Diagram
## 类之间的关系
### 关联(association)

JAVA 代码实现
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

    class Student {
        public name;

        Class myClass;
    }

    public static void main(String args[]){

    }
```

### 泛化(generalization)

### 实现(realization)

### 聚合(aggregation)

### 组成(composition)

### 依赖(dependency)

### 实现(implementation)
