<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Sidebar
{

    public $_sideBar;

    function __construct()
    {
        $this->_sideBar = array(
            'index' => array('welcome', 'overview', 'extension', 'warning'),
            'about' => array('userguide', 'contact'),
            'contact' => array('ibn', 'htwg konstanz'),
            'screenshots' => array('ipad', 'tools', 'in-place-tools', 'iphone'),
            'userguide' => array('installingseapal', 'startingseapal', 'mapselection')
        );
    }


    public function getSidebarForSite($page)
    {

        $template = $this->_sideBar[$page];

        $sidebar = '<div class = "span3 bs-docs-sidebar"><ul class = "nav nav-list bs-docs-sidenav affix">';

        foreach ($template as $value) {
            $sidebar .= '<li><a href="#' . $value . '"><i class="icon-chevron-right"></i>' . $value . '</a></li>';
        }

        $sidebar .= '</ul></div>';

        return $sidebar;
    }

    public function getSideBar()
    {
        return $this->_sideBar;
    }

    public function setSideBar($sideBar)
    {
        $this->_sideBar = $sideBar;
    }

}

