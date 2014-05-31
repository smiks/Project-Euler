public class e34 {
 
        public static void main(String[] args) {
                int[] cache = new int[10];
                cache[0] = 1;
                int total=0;
                int sum;
                
                for(int i = 1; i < cache.length; i++){
                	cache[i] = cache[i-1] * i;
                }
                
                for(int i = 3; i < Integer.MAX_VALUE; i++){
                        sum = 0;
                        for(char b : (i+"").toCharArray()){
                                sum += cache[b-'0'];
                                if(sum > i) break;
                        }
                        if(sum == i) {
                        	System.out.println(i);
                        	total += sum;
                        }
                }
                System.out.println("Result: " + total);
        }
}