public class e41 {

	static boolean[] primes  = new boolean[100000001];
	static int result        = 0;
	static final int NUM = 100000000;
	
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
	
	private static boolean isOk(int a){
		int[] cache = new int[10];
        for(char b : (a+"").toCharArray()){
        	if(cache[b-'0'] == 1){
        		return false;
        	}
        	cache[b-'0'] = 1;
        }
		for(int i = 1; i <= (a+"").toString().length(); i++){
			if(cache[i] == 0){
				return false;
			}
		}
		return true;
	}
	
	public static void main(String args[]){
		fillPrimes(NUM);
		for(int i = NUM; i > 0; i--){
			if(primes[i] && isOk(i)){
				result = i;
				break;
			}
		}
		System.out.println("Result: " + result);
	}
}