package controllers;

import play.mvc.*;
import views.html.*;
import views.html._include.*;
public class Userguide  extends Controller {
    public static Result index() {
        return ok(main.render(contentUserguide.render(), header.render(), navigation.render("userguide"), footer.render(), sidebar.render("userguide")));
    }
}
