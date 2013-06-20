package controllers;

import play.mvc.*;
import views.html.*;
import views.html._include.*;

public class Screenshots extends Controller {

    public static Result index() {
        return ok(main.render(contentScreenshots.render(), header.render(), navigation.render("screenshots"), footer.render(), sidebar.render("screenshots")));
    }
}
