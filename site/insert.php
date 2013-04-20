<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 12.04.13
 * Time: 16:54
 * To change this template use File | Settings | File Templates.
 */
$con = mysql_connect("localhost","root","gras17");
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$age = $_POST['age'];
mysql_select_db("webtec");
$sql_firstName = "SELECT FirstName FROM Persons";
$sql_lastName = "SELECT LastName FROM Persons";
$sql_age = "SELECT age FROM Persons";

//mysql_fetch_array() <-- durchlesen
$db_erg_firstName = mysql_query( $sql_firstName);
$db_erg_lastName = mysql_query( $sql_lastName);
$db_erg_age = mysql_query( $sql_age);
if ( (! $db_erg_firstName) || (! $db_erg_lastName) || (! $db_erg_age) ){
    die('Ungültige Abfrage: ' . mysql_error());
}

//echo $_POST['firstname'];
//echo $_POST['lastname'];
//echo $_POST['age'];

mysql_select_db("webTec", $con);

$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$firstName', '$lastName', '$age')";

  if (!mysql_query($sql,$con))
  {
      die('Error: ' . mysql_error());
  };

$testselect = "SELECT * FROM Persons WHERE FirstName = 'aaa'";

$db_result = mysql_query( $testselect );

if ( ! $db_result )
{
    die('Ungültige Abfrage: ' . mysql_error());
}

?>
