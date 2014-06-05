public class e39 {

	private static int perimeter(int a, int b, int c){
		return a+b+c;
	}
	
	private static int triangle(int p){
		int max=0;
		for(int c = 1; c <= p/2; c++){
			for(int a = 1; a <= c; a++){
				for(int b = a; b <= c; b++){				
					if(pit(a,b,c) && perimeter(a,b,c) == p){
						max++;
					}
				}
			}
		}
		return max;
	}
	
	private static boolean pit(int a, int b, int c){
		return Math.pow(c, 2) == Math.pow(a, 2) + Math.pow(b, 2);
	}
	
	public static void main(String[] args) {
		int max = 0, tmp, result=0;
		for(int i = 1; i <= 1000; i++){
			tmp = triangle(i);
			if(tmp > max){
				max = tmp;
				result = i;
			}
		}
		System.out.println("Result: " + result);
	}
}