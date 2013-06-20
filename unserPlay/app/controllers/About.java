package controllers;

import play.mvc.*;
import views.html.*;
import views.html._include.*;

public class About extends Controller {

    public static Result index() {
        return ok(main.render(contentAbout.render(), header.render(), navigation.render("about"), footer.render(), sidebar.render("about")));
    }
}
