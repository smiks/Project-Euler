import java.util.HashMap;
public class e45 {

	static HashMap<Long,Integer> triangle   = new HashMap<Long,Integer>();
	static HashMap<Long,Integer> pentagonal = new HashMap<Long,Integer>();
	static HashMap<Long,Integer> hexagonal  = new HashMap<Long,Integer>();
	static final int NUM     = 2000000000;
	static final int SMALLNUM     = 600000;
	
	public static void main(String args[]){
		System.out.println("Start filling");
		for(long i = 0; i < SMALLNUM; i++){
			/* fill triangle */
			triangle.put((i*(i+1)/2),1);
			/* fill pentagonal */
			pentagonal.put((i*(3*i-1)/2), 1);
			/* fill hexagonal */
			hexagonal.put((i*(2*i-1)), 1);
		}
		System.out.println("Start searching");
		int pet, hex, tri;
		for(long i = 40756; i < NUM; i++){
			tri = triangle.get(i) != null ? triangle.get(i) : 0;
			pet = pentagonal.get(i) != null ? pentagonal.get(i) : 0;
			hex = hexagonal.get(i) != null ?  hexagonal.get(i) : 0;
			if(tri == 1 && pet == 1 && hex == 1){
				System.out.println("result: " + i);
				break;
			}
		}
	}
}