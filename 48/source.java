import java.math.BigInteger;
public class e48 {

	private static void lastTen(BigInteger a){
		String s = a.toString();
		String reverse = new StringBuffer(s).reverse().toString();
		String result = new StringBuffer(reverse.substring(0, 10)).reverse().toString();
		System.out.println(result);
	}
	
	public static void main(String args[]){
		BigInteger sum = new BigInteger("0");
		BigInteger tmp = new BigInteger("0");
		for(int i = 1; i <= 1000; i++){
			tmp = BigInteger.valueOf(i).pow(i);
			sum = sum.add(tmp);
		}
		lastTen(sum);	
	}
}