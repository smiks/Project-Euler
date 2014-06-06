public class e46 {
	
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
	
	private static boolean goldbach(int a){
		int result;
		result = 0;
		for(int i = 2; i < a; i++){
			if(primes[i]){
				for(int j = 1; j < a; j++){
					result = (int) (i + (2*(Math.pow(j, 2))));
					if(result == a){
						return true;
					}
				}
			}
		}
		return false;
	}
	
	public static void main(String[] args) {
		fillPrimes(NUM);
		int result;
		result = 0;
		for(int i = 2; i < NUM; i++){
			if(!primes[i] && i%2 != 0){
				if(!goldbach(i)){
					result = i;
					break;
				}
			}
		}
		System.out.println("Result: " + result);
	}
}