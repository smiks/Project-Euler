import java.math.BigInteger;

public class e129 {

	static boolean[] primes  = new boolean[100000001];
	static final int NUM = 10000000;
	private static void fillPrimes(int num){
		int sqrt = (int) (Math.sqrt(num)+1);
		for(int i=0; i < num;i++){
			primes[i] = (!(i == 2 || i%2 == 0 || i == 0 || i == 1));
		}
		for(int i = 3; i <= sqrt; i = i + 2){
			if(primes[i]){
				for(int j= 2*i; j < num; j += i){
					primes[j] = false;
				}
			}
		}
		primes[2] = true;
	}

	private static int gcd(int a,int b){
		do{
			if(a > b){
				a = a - b;
			}
			else{
				b = b - a;
			}
		}while(a != b);
		return a;
	}

	private static boolean gcdIsOne(int a, int b){
		if(gcd(a, b) == 1){
			return true;
		}
		return false;
	}

	private static long findR(int n){
		int a = 1;
		int R = 1;
		while (a != 0) {
			a = (a * 10 + 1) % n;
			R++;
		}
		return R;
	}

	public static void main(String[] args) {
		fillPrimes(NUM);
		long R = 1;
		for(int n = 500000; n < 10000000; n++){
			if(gcdIsOne(n,10)){	/* gcd(n,10) == 1 and n is composite number*/
				R = findR(n);
				if(R > 1000000) {
					System.out.println("Result: " + n);
					break;
				}
			}
		}
	}
}