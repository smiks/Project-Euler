/*
 * Very quick algorithm for solving PE 26 
 */

public class Euler26 {
	
	 private static boolean isPrime(int num) {
	        if (num % 2 == 0)
	            return false;
	        int limit = (int)Math.sqrt(num) + 1;
	        for (int i = 3; i <= limit; i += 6)
	            if (num % i == 0 || num % (i+2) == 0) return false;
	        return true;
	  } 
	 
	private static int checkO(int n){
		int tmp = 10%n;
		int start = tmp;
		int len = 1;
		while(true) {
			tmp = (tmp*10) % n;
			len += 1;
			if(tmp == start){
				return len;
			}
		}	
	}	
	
	public static void main(String args []){
		int tmp, max = 0, result = 0;
		for(int i=100000001; i > 0; i -= 2) {
			if(i%945 == 0 || !isPrime(i)){
				continue;
			}
			tmp = checkO(i);				
			if(i < max){
				break;
			}
			if(tmp > max){
				max = Math.max(max, tmp);
				result = i;
			}
		}
		System.out.println("Result: " + result);
	}
}