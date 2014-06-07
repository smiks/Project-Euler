import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class e81 {

	static int[][] matrix = new int[82][82];
	
	private static int minPathSum(){
		int i,j;
		
		/* calculating costs for one-way path */
		for(i = 80; i > 0; i--){
			matrix[80][i] += matrix[80][i+1];
			matrix[i][80] += matrix[i+1][80];
		}

		for(i = 80; i > 0; i--){
			for(j = 80; j > 0; j--){
				matrix[i][j] += Math.min(matrix[i+1][j], matrix[i][j+1]);
			}
		}
		return matrix[1][1];
	}
	
	public static void main(String[] args) throws IOException {
		String sCurrentLine;
		BufferedReader br = null;
		br = new BufferedReader(new FileReader(/* file path */));
		String[] d1;
		int dc1 = 1, dc2 = 1;
		while ((sCurrentLine = br.readLine()) != null) {
			d1 = sCurrentLine.split(",");
			for(String b : d1){
				matrix[dc1][dc2]=Integer.parseInt(b);
				dc2++;
			}
			dc1++;
			dc2 = 1;
		}
		br.close();
		
		System.out.println("Result: "+ minPathSum());
	}

}
