package Language.Universal.JAVA.example;

class Incrementable {
    public int num;
    public static int count = 0;

    public Incrementable() {
        count++;
        num = count;
    }

    public Incrementable(int k) {
        count = num;
        count++;
    }
}

public class TestStaticVar {
    public static void main(String[] args) {
        Incrementable[] increment = new Incrementable[5];
        for (int i = 0; i < increment.length; i++) {
            increment[i] = new Incrementable();
            System.out.println("increment[" + i + "].count=" + Incrementable.count + ",increment[" + i + "].num="
                    + increment[i].num);
        }
        for (int i = 0; i < increment.length; i++) {
            increment[i] = new Incrementable(0);
            System.out.println("increment[" + i + "].count=" + Incrementable.count + ",increment[" + i + "].num="
                    + increment[i].num);
        }
    }
}