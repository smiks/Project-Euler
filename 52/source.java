public class e52 {

	private static boolean isOk(int a){
		int[] first = new int[10];
		int[] others = new int[10];
		int other;
		/* check first */
        for(char b : (a+"").toCharArray()){
            first[b-'0']++;
        }
        /* check others */
        for(int i = 2; i <= 6; i++){
        	other = a * i;
            for(char b : (other+"").toCharArray()){
                others[b-'0']++;
            }
            /* check if still ok */
            for(int j=0; j < 10; j++){
            	if(first[j] == 0 && others[j] != 0){
            		return false;
            	}
            }
        }
		return true;
	}
	
	public static void main(String[] args) {
		for(int i = 1; i < 1000000; i++){
			if(isOk(i)){
				System.out.println("Result: " + i);
				break;
			}
		}
	}
}