class Citizen {
    private static String country = "china";
    private String name = "Tom";

    public static void f1() {
        System.out.println(country);
    }

    public void f2() {
        f1();
        System.out.println(country);
        System.out.println(name);
    }
}

public class TestStaticMethod {
    public static void main(String[] arg) {
        new TestStaticMethod();
        Citizen.f1();
        Citizen citizen = new Citizen();
        citizen.f2();
    }
}