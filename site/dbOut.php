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

$sql_select = "SELECT * FROM Persons WHERE FirstName = $firstName AND LastName = $lastName AND Age = $age";

$db_result = mysql_query( $sql_select );
if ( ! $db_result )
{
    die('Ungültige Abfrage: ' . mysql_error());
}

?>