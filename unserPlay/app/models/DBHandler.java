package models;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javax.persistence.Entity;
import play.db.DB;
import play.db.ebean.Model;

@Entity
public class DBHandler extends Model {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	public static Connection connection = DB.getConnection();

	public static String setUser(String lastName, String firstName, String age) {

		String sql;
		try {
			Statement stmt = connection.createStatement();
			sql = "INSERT INTO Persons (FirstName, LastName, Age) VALUES('"
					+ firstName + "', '" + lastName + "', '" + age + "')";
			stmt.execute(sql);

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return null;
	}

	public static Boolean isUserinDB(String lastName, String firstName,String age) {

		String sql;
		String lastOut = null;
		String firstOut = null;
		String ageOut = null;
		Connection connection = DB.getConnection();

		try {
			Statement stmt = connection.createStatement();
			sql = "SELECT * FROM Persons WHERE FirstName = \"" + firstName
					+ "\" AND LastName = \"" + lastName + "\" AND Age = \""
					+ age + "\"";
			ResultSet rst = stmt.executeQuery(sql);
			while (rst.next()) {
				lastOut = rst.getString("LastName");
				firstOut = rst.getString("FirstName");
				ageOut = new Integer(rst.getInt("Age")).toString();

			}

			if (lastOut == (null) | firstOut == (null) | ageOut == (null)) {
				return false;
			} else {
				return true;
			}

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return false;
	}

	public static ResultSet getUser(String lastName, String firstName, String age) {

		String sql;
		ResultSet rst = null;

		try {
			Statement stmt = connection.createStatement();

			sql = "SELECT * FROM Persons WHERE FirstName = \"" + firstName
					+ "\" AND LastName = \"" + lastName + "\" AND Age = \""
					+ age + "\"";

			rst = stmt.executeQuery(sql);

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return rst;
	}

}
