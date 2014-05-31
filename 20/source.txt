JAVA: 

import java.math.BigInteger;

public class Twenty {
	public static void main(String[] args) {
		BigInteger a = new BigInteger("1");
		
		for (int i = 1; i < 101; i++) {
			a = a.multiply(new BigInteger(i+""));
		}
		
		String lol = a.toString();
		
		int sum = 0;
		
		for (int i = 0; i < lol.length(); i++) {
			sum += lol.charAt(i) - '0';
		}
		
		System.out.println(sum);
	}
}