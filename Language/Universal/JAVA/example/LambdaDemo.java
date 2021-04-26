public class LambdaDemo {
    public static void main(String args[]) {
        int n = 144;
        MyIntPredicate isEven = (value) -> (value % 2) == 0;
        if (isEven.test(n))
            System.out.println(n + "是偶数");
        else
            System.out.println(n + "是基数");
    }
}
