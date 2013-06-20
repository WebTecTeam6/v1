package controllers;

import play.mvc.Controller;
import play.mvc.Result;
import views.html.contentHome;
import views.html.main;
import views.html._include.footer;
import views.html._include.header;
import views.html._include.navigation;
import views.html._include.sidebar;

public class Index extends Controller{
    public static Result index() {
        return ok(main.render(contentHome.render(), header.render(), navigation.render("index"), footer.render(),sidebar.render("index")));
    }

}
