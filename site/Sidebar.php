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
            'index' => array('#Welcome', '#Overview', '#Extension', '#Warning'),
            'app' => array('#Wegpunkt', '#Weather-Information'),
            'about' => array('Userguide.php', 'Contact.php'),
            'contact' => array('#IBN', '#Htwg-Konstanz'),
            'screenshots' => array('#Ipad', '#Tools', '#In-Place-Tools','#Logbook', '#Iphone'),
            'userguide' => array('#installing-Seapal', '#Starting-Seapal', '#Mapselection'),
            'SignIn' => array('#SignIn')
        );
    }


    public function getSidebarForSite($page)
    {

        $template = $this->_sideBar[$page];

        $sidebar = '<div class = "span3 bs-docs-sidebar"><ul class = "nav nav-list bs-docs-sidenav affix">';

        foreach ($template as $value) {
            $sidebar .= '<li><a href="' . $value . '"><i class="icon-chevron-right"></i>';

            //needs for About, there are no sections, there are links in the sidebar
            if ($value[0] == '#') {
                $value = substr($value, 1);
            } elseif (substr($value, -4) == '.php') {
                $value = substr($value, 0, -4);
            }

            //delete - for display
            $value = str_replace('-', ' ', $value);

            $sidebar .=$value . '</a></li>';

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

