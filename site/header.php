<?php

class Header
{
    public $_headerStatic = '';
    public $_headerStaticClose = '';
    public $_activeIndex =  '<li><a href="index.php">Home</a></li>';
    public $_activeApp = '<li><a href="App_waypoint.php">App</a></li>';
    public $_activeGuide = '<li><a href="Userguide.php">User Guide</a></li>';
    public $_activeScreen = '<li><a href="Screenshots.php">Screenshots</a></li>';
    public $_activeAbout = '<li><a href="About.php">About</a></li>';
    public $_activeContact = '<li><a href="Contact.php">Contact</a></li>';
    public $_activeSignIn = '<li><a href="SignIn.php">Sign In</a></li>';
    public $_fullHeader = '';

    function __construct()
    {
        $this->_headerStatic =
            '<div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="index.php">SeaPal</a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">';

        $this->_headerStaticClose = '</ul></div></div></div></div>';
    }

    public function getHeader($site)
    {
        switch ($site) {
            case 'index':
                $this->_activeIndex =   '<li class="active"><a href="index.php">Home</a></li>';
                break;

            case 'app':
                $this->_activeApp = '<li class="active"><a href="App_waypoint.php">App</a></li>';
                break;

            case'userguide':
                $this->_activeGuide = '<li class="active"><a href="Userguide.php">User Guide</a></li>';
                break;

            case 'screenshots':
                $this->_activeScreen = '<li class="active"><a href="Screenshots.php">Screenshots</a></li>';
                break;

            case 'about':
                $this->_activeAbout = '<li class="active"><a href="About.php">About</a></li>';
                break;

            case 'contact':
                $this->_activeContact = '<li class="active"><a href="Contact.php">Contact</a></li>';
                break;

            case 'SignIn':
            $this->_activeSignIn = '<li class="active"><a href="SignIn.php">Sign In</a></li>';
        }

        $this->buildHeader();
        return $this->_fullHeader;
    }

    public function buildHeader()
    {
        $this->_fullHeader =
            $this->_headerStatic
                . $this->_activeIndex
                . $this->_activeApp
                . $this->_activeGuide
                . $this->_activeScreen
                . $this->_activeAbout
                . $this->_activeContact
                . $this->_activeSignIn
                . $this->_headerStaticClose;
    }
}

?>