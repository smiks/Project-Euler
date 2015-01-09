public class Euler179 {

    public static int numDivisors(int n) {
        int numOfDivisors = 2;
        for (int i = 2; i <= Math.sqrt(n); i++) {
            if (n % i == 0) {
                if (i != Math.sqrt(n)) {
                    numOfDivisors += 2;
                } else {
                    numOfDivisors += 1;
                }
            }
        }
        return numOfDivisors;
    }
    
    public static void main(String[] args) {
        long startTime = System.currentTimeMillis();
        int result = 0;
        int prevDivisors = 2;
        int limit = 10000000;
        
        for (int i = 3; i <= limit; i++) {
            int currentDivisors = numDivisors(i);
            if (currentDivisors == prevDivisors) {
                result += 1;
            }
            prevDivisors = currentDivisors;
        }
        long endTime = System.currentTimeMillis();
        System.out.println("Result " + result + " in " + (endTime - startTime) + " ms");
    }
    
}
