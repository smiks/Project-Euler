import java.math.BigInteger;

public class e130 {

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

	private static boolean isDivisibleByN(int n, long R){
		if((n-1)%R == 0){
			return true;
		}
		return false;
	}


	private static long findR(int a){
		BigInteger m  = new BigInteger(a+"");
		BigInteger tmp = new BigInteger("1");
		BigInteger mod = new BigInteger("1");
		for(int i = 1; i < 500; i++){
			tmp = tmp.add(BigInteger.valueOf(10).pow(i));
			mod = tmp.mod(m);
			if(mod.signum() == 0){
				return i+1;
			}
		}
		return 0;
	}

	public static void main(String[] args) {
		fillPrimes(NUM);
		long R = 1;
		long sum = 0;
		int found = 0;
		for(int n = 90; n < 100000; n++){
			if(!primes[n] && gcdIsOne(n,10)){	/* gcd(n,10) == 1 and n is composite number*/
				R = findR(n);
				if(R != 0 && isDivisibleByN(n, R)){
					if(found == 25){
						break;
					}
					sum += n;
					found++;
				}
			}
		}
		System.out.println("Result: " + sum);
	}
}