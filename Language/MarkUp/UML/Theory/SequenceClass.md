<link rel=stylesheet href=style.css>

# Sequence Diagram

## 时序图基础

### 时序图组成

- 时序图的元素：actor, lifeline, activation

```java
class Cat implement Animal{
    public String name;
    private Boolean chasing = false;

    Cat(String name) {
        this.name = name;
    }

    protected int chase(Mouse mouse){
        this.chasing = true;
        return true;
    }
}

// Mouse 与 Dog 省略

Cat Tom = new Cat('Tom');
Mouse Jerry = new Mouse('Jerry');
Dog Spike = new Dos('Spike');

public static void main(args[]){
    if args[0] == 'T':
        Boolean chase = Tom.chase(Jerry);
    if chase:
        Boolean help = Jerry.askHelp();
    if help:
        Boolean punch = Spike.punch(Tom);
    if punch:
        Tom.flee();
}

```