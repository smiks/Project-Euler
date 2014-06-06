public class e50 {
	
	static boolean[] primes  = new boolean[100000001];
	static final int NUM = 1000000;
	
	private static void fillPrimes(int num){
		for(int i=0; i < num;i++){
		primes[i] = (!(i == 2 || i%2 == 0 || i == 0 || i == 1));
		}
		for(int i = 3; i <= (num/2); i = i + 2){
			if(primes[i]){
				for(int j= 2*i; j < num; j += i){
					primes[j] = false;
					}
				}
			}
		primes[2] = true;
	}
	
	private static int chain(int a){
		int length = 0;
		int sum = 0;
		int max = 0;
		for(int start = 2; start <= Math.sqrt(a)+1; start++){
			length = 0;
			sum = 0;
			/* hopefully makes it faster */
			if(start*length > a){
				break;
			}
			for(int i = start; i <= (a/2)+1; i++){
				if(primes[i]){
					if(sum + i > a){
						break;
					}
					sum += i;
					length++;
					if(length > max && sum == a){
						max = length;
					}
				}
			}
		}
		return max;
	}
	
	public static void main(String[] args) {
		fillPrimes(NUM);
		int prime, max, tmp;
		prime = 0;
		max   = 0;
		/* probably inside this range */
		for(int i = 600000; i < 1000000; i++){
			if(primes[i]){
				tmp = chain(i);
				if(tmp > max){
					max = tmp;
					prime = i;
				}
			}
		}
		System.out.println("Result: " + prime);
	}

}