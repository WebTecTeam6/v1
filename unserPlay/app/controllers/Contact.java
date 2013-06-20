package controllers;

import play.mvc.*;
import views.html.*;
import views.html._include.*;
public class Contact extends Controller {
    public static Result index() {
        return ok(main.render(contentContact.render(), header.render(), navigation.render("contact"), footer.render(), sidebar.render("contact")));
    }
}
