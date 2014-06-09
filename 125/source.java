public class e125 {

	private static boolean isPalindrome(int a){
		String s;
		s = a+"";
		String reverse = new StringBuffer(s).reverse().toString();
		if(reverse.equals(s)){
			return true;
		}
		return false;
	}

	private static boolean checkSquares(int a){
		long tmp = 0;
		int sqrt = (int)(Math.sqrt(a));
		for(int start = 1; start < sqrt; start++){
			tmp = 0;
			for(int j = start; j <= sqrt; j++){
				tmp += Math.pow(j, 2);
				if(tmp == a){
					return true;
				}
				if(tmp > a){
					break;
				}
			}
		}
		return false;
	}

	public static void main(String[] args) {
		long sum = 0;
		for(int i = 1; i < 100000000; i++){
			if(isPalindrome(i)){
				if(checkSquares(i)){
					sum += i;
				}
			}
		}
		System.out.println("Result: " + sum);
	}
}