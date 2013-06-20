package controllers;

import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.JOptionPane;

import models.DBHandler;
import play.data.DynamicForm;
import play.mvc.Controller;
import play.mvc.Result;
import views.html.contentSignIn;
import views.html.main;
import views.html._include.footer;
import views.html._include.header;
import views.html._include.navigation;
import views.html._include.sidebar;

public class SignIn extends Controller {
	public static Result index() {
		return ok(main.render(contentSignIn.render("", "", ""),	header.render(), navigation.render("signin"), footer.render(), sidebar.render("signin")));
	}

	public static Result signInValidation() {

		DynamicForm requestData = form().bindFromRequest();
		String lastName = requestData.get("lastname");
		String firstName = requestData.get("firstname");
		String age = requestData.get("age");
		String lastOut = null;
		String firstOut = null;
		String ageOut = null;

		Boolean isinDB = DBHandler.isUserinDB(lastName, firstName, age);

		if (isinDB == false) {
			DBHandler.setUser(lastName, firstName, age);

		} else {

			JOptionPane.showMessageDialog(null,"Sie haben sich bereits eingeschrieben");
			return ok(main.render(
					contentSignIn.render(firstName, lastName, age),
					header.render(), navigation.render("signin"),
					footer.render(), sidebar.render("signin")));
			}
		ResultSet rst = DBHandler.getUser(lastName, firstName, age);

		try {

			while (rst.next()) {
				lastOut = rst.getString("LastName");
				firstOut = rst.getString("FirstName");
				ageOut = new Integer(rst.getInt("Age")).toString();
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		JOptionPane.showMessageDialog(null,"Sie haben sich erlogreich eingeschrieben");
		return ok(main.render(contentSignIn.render(firstOut, lastOut, ageOut),
				header.render(), navigation.render("signin"), footer.render(),
				sidebar.render("signin")));

	}

}
