import java.util.Arrays;

public class e49 {
	
	static boolean[] primes  = new boolean[100000001];
	static final int NUM = 100000;
	static int num1=0, num2=0, num3=0;
	static boolean over = false;
	
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
	
	private static boolean isPrime(int a){
		return primes[a];
	}
	
	private static void saveNumber(int a){
		if(num1 == 0){
			num1 = a;
		}
		else if(num2 == 0 && num1+3330 == a){
			num2 = a;
		}
		else if(num3 == 0 && num2+3330 == a){
			num3 = a;
		}
		if(num3 == a){
			int[] result = new int[3];
			result[0] = num1;
			result[1] = num2;
			result[2] = num3;
			Arrays.sort(result);
			System.out.println("Result: " + num1 + num2 + num3);
			over = true;
		}	
	}
	
	private static void permute(String s, int start, int end){
		if(start == end){
			int a = Integer.parseInt(s);
			if(isPrime(a)){
				saveNumber(a);
			}
		}
		else{
			for(int j = start; j < end; j++){
				s = swap(s, start, j);
				permute(s, start+1, end);
				s = swap(s, start, j);		
			}
		}
	}
	
	private static String swap(String st, int i, int j){
		char[] c;
		char tmp;
		c = st.toCharArray();
		tmp = c[i];
		c[i] = c[j];
		c[j] = tmp;
		String t = new String(c);
		return t;
	}
	
	public static void main(String args[]){
		fillPrimes(NUM);
		for(int i = 1488; i < 10000; i++){
			if(primes[i]){
				num1 = 0;
				num2 = 0;
				num3 = 0;
				permute((i+"").toString(), 0, (i+"").toString().length());
			}
			if(over){
				break;
			}
		}
	}
}