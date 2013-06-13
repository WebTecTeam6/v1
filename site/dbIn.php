<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 20.04.13
 * Time: 16:26
 * To change this template use File | Settings | File Templates.
 */

$con = mysql_connect("localhost","root","gras17");
if (!$con){
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("webTec", $con);

$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$firstName', '$lastName', '$age')";

if (!mysql_query($sql,$con))
{
    die('Error: ' . mysql_error());
};


?>