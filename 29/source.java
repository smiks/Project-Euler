import java.math.BigInteger;
import java.util.HashSet;


public class e29 {

	
	
	public static void main(String args[]){
		BigInteger res = new BigInteger("1");
		HashSet<BigInteger> hs = new HashSet<>();
		for(int i = 2; i <= 100; i++){
			for(int j = 2; j <= 100; j++){
				res = BigInteger.valueOf(i).pow(j);
				hs.add(res);
			}
		}
		System.out.println("Result: " + hs.size());
	}
}