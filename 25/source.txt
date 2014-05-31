import java.math.BigInteger;

public class e25 {
	public static void main(String[] args) {
		BigInteger a = new BigInteger("1");
		BigInteger fib = new BigInteger("1");
		BigInteger prev = new BigInteger("1");
		BigInteger pprev = new BigInteger("0");
		long i = 2;
		for (i = 2; ; i++) {
			//a = a.multiply(new BigInteger(i+""));
			fib = prev.add(pprev);
			pprev = prev;
			prev = fib;
			//System.out.println("i: " +i+ " - " + fib);
			if(fib.toString().length() > 999)
				break;
		}
		System.out.println("Result: " + i);
	}
}