<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 12.04.13
 * Time: 16:54
 * To change this template use File | Settings | File Templates.
 */

echo $_POST['firstname'];
echo $_POST['lastname'];
echo $_POST['age'];

$con = mysql_connect("localhost","root","gras17");
if (!$con){
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("webTec", $con);

$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  };

?>
