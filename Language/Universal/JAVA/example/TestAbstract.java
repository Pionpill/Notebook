abstract class Animal {
    void sleep() {
        System.out.println("animals sleep!");
    }

    abstract void run();
}

class Dog extends Animal {
    void run() {
        System.out.println("dogs run fast!");
    }
}

public class TestAbstract {
    public static void f(Animal a) {
        a.sleep();
        a.run();
        Dog d;
        d = (Dog) a;
        d.sleep();
        d.run();
    }

    public static void main(String arg[]) {
        Dog d = new Dog();
        TestAbstract.f(d);
    }
}