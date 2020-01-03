package back;

import java.io.*;
import java.util.StringTokenizer;
import javax.swing.JOptionPane;
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;

public class backendPI {

	/**
	 * @param args the command line arguments
	 */
	public static void main(String[] args) {
		// TODO code application logic here
		String nomeArq = "despesas8.csv";
		// for (int m = 1; m <= 12; m++) {
		File arquivo = new File(nomeArq);
		byte[] arrayDeBytes = new byte[(int) arquivo.length()];
		try {
			FileInputStream fis = new FileInputStream(arquivo);
			fis.read(arrayDeBytes);
		} catch (FileNotFoundException fnfe) {
			JOptionPane.showMessageDialog(null, "O arquivo nÃ£o foi encontrado.");
		} catch (IOException ioe) {
			JOptionPane.showMessageDialog(null, "Erro de leitura do arquivo.");
		}
		String conteudo = new String(arrayDeBytes);
		System.out.println(conteudo);

		// Carrego o driver do banco de dados.
		Statement stmt = null;
		try {
			Class.forName("org.postgresql.Driver");
			String url = "jdbc:postgresql://localhost:5432/Banco_Gerenciamento_Obras_Publicas";
			String user = "postgres";
			String password = "admin";
			Connection con = DriverManager.getConnection(url, user, password);
			stmt = con.createStatement();
		} catch (ClassNotFoundException cnfe) {
			System.out.println("\n\nNÃ£o carregou o driver\n\n");
		} catch (SQLException sqle) {
			System.out.println("\n\nErro na conexÃ£o JDBC\n\n");
		}

		int linhas = 0;
		for (int i = 0; i < conteudo.length(); i++) {
			if (conteudo.charAt(i) == '\n') {
				linhas++;
			}
		}

		String[][] matriz = new String[linhas][11];

		StringTokenizer st = new StringTokenizer(conteudo, "\n");
		int l = 0;
		while (st.hasMoreTokens()) {
			String linha = st.nextToken();
			StringTokenizer st1 = new StringTokenizer(linha, ";");
			int c = 0;
			while (st1.hasMoreTokens()) {
				String coluna = st1.nextToken();
				matriz[l][c] = coluna;
				c++;
			}
			l++;
		}
		
		//******************************************************************
		//int[][] numeu = new int[linha][]; 

		int id = 0;
		for (int i = 1; i < l; i++) {
			String sql = "INSERT INTO  tabela_de_dados VALUES ('" + id + "', '" +matriz[i][0] + "','" + matriz[i][2] + "','" + matriz[i][3] + "', '" + matriz[i][4] + "','" + formatNumber(matriz[i][5]) + "', '" + formatNumber(matriz[i][6]) + "', '" + formatNumber(matriz[i][7]) + "','" + formatNumber(matriz[i][8]) + "','" + formatNumber(matriz[i][9]) + "');";

			
			sql = sql.replace("\"", "");
			try {
//				System.out.println(sql);
				stmt.executeUpdate(sql);
				System.out.println(matriz[i][0] + "\t" + matriz[i][1] + "\t" + matriz[i][2] + "\t" + matriz[i][3]);
				System.out.println(matriz[i][1]);
			} catch (SQLException ex) {
				System.out.println("Erro na conexÃ£o JDBC");
			}
			id++;
		}

		//}
	}
	public static String formatNumber(String numero) {
		numero = numero.replace(".", "");
		numero = numero.replace(',', '.');
		return numero;
	}
	public static String transformarMesAno(String mesAno) {
//		System.out.println(mesAno);
		String result = "20" + mesAno.substring(6,8);
//		System.out.println(result);
		String mes = mesAno.substring(1, 4);
//		System.out.println(mes);
//		if (mes.equals("jan")) {
//			result += "-01-01";
//		} else if (mes.equals("fev")) {
//			result += "-02-01";
//		} else if (mes.equals("mar")) {
//			result += "-03-01";
//		} else if (mes.equals("abr")) {
//			result += "-04-01";
//		} else if (mes.equals("mai")) {
//			result += "-05-01";
//		} else if (mes.equals("jun")) {
//			result += "-06-01";
//		} else if (mes.equals("jul")) {
//			result += "-07-01";
//		} else if (mes.equals("ago")) {
//			result += "-08-01";
//		} else if (mes.equals("set")) {
//			result += "-09-01";
//		} else if (mes.equals("out")) {
//			result += "-10-01";
//		} else if (mes.equals("nov")) {
//			result += "-11-01";
//		} else if (mes.equals("dez")) {
		if (mes.equals("01/")) {
			result += "-01";
		} else if (mes.equals("02/")) {
			result += "-02";
		} else if (mes.equals("03/")) {
			result += "-03";
		} else if (mes.equals("04/")) {
			result += "-04";
		} else if (mes.equals("05/")) {
			result += "-05";
		} else if (mes.equals("06/")) {
			result += "-06";
		} else if (mes.equals("07/")) {
			result += "-07";
		} else if (mes.equals("08/")) {
			result += "-08";
		} else if (mes.equals("09/")) {
			result += "-09";
		} else if (mes.equals("10/")) {
			result += "-10";
		} else if (mes.equals("11/")) {
			result += "-11";
		} else if (mes.equals("12/")) {
			result += "-12";
		} else {
			result += "-01";
		}
		return result;
	}
}
