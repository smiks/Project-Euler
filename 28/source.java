public class e28 {
	public static void main(String[] args) {

		int sum = 1;
		int i = 3;
		int max = 0;
		while(i <= 1001){
			max = (int) Math.pow(i, 2);
			sum += max;
			for(int j = 1; j <= 3; j++){
				sum += max - ((i-1)*j);
			}
			i += 2;
		}
		System.out.println("Result: " + sum);
	}
}