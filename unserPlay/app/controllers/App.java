package controllers;

import play.mvc.*;
import views.html.*;
import views.html._include.*;

public class App extends Controller {
    public static Result index() {
        return ok(main.render(contentApp.render(), header.render(), navigation.render("app_map"), footer.render(), sidebar.render("app_map")));
    }
}
