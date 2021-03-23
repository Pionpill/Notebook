package Language.Universal.JAVA.example;

class Box {
    double width;
    double height;
    double depth;

    Box(double w, double h, double d) {
        width = w;
        height = h;
        depth = d;
    }

    Box() {
        width = 0;
        height = 0;
        depth = 0;
    }

    double volume() {
        return width * height * depth;
    }
}

class BoxWeight extends Box {
    double weight;

    BoxWeight(double w, double h, double d, double m) {
        width = w;
        height = h;
        depth = d;
        weight = m;
    }
}

public class DemoBox {
    public static void main(String args[]) {
        BoxWeight mybox1 = new BoxWeight(10, 20, 30, 58.5);
        BoxWeight mybox2 = new BoxWeight(3, 5, 8, 30.5);
        System.out.println("Volume of mybox1 is " + mybox1.volume());
        System.out.println("Weight of mybox1 is " + mybox1.weight);
        System.out.println("Volume of mybox2 is " + mybox2.volume());
        System.out.println("Weight of mybox2 is " + mybox2.weight);
    }
}