import java.math.BigInteger;

public class e36 {
	
	public static String dectoBin(long num){
	    String s = ""+num;
	    BigInteger bi = new BigInteger(s);
	    String bin = bi.toString(2);
	    return bin;
	}
	public static boolean isPalindrome(String s){
	    BigInteger bi = new BigInteger(s);
	    String reverse = new StringBuffer(s).reverse().toString();
	    if(bi.toString().equals(reverse))
	    		return true;
		return false;
	}
	public static void main(String[] args) {
		long i, sum = 0;
		for(i = 1; i < 1000000 ; i++) {
			String s = ""+i;
			if(isPalindrome(s) && isPalindrome(dectoBin(i)))
			{
				sum += i;
			}
		}
		System.out.println("Result: " + sum);
	}
}
