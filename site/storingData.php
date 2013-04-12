<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 12.04.13
 * Time: 16:32
 * To change this template use File | Settings | File Templates.
 */
    $con	=	mysql_connect("localhost","root","gras17");
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }