<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 12.04.13
 * Time: 16:10
 * To change this template use File | Settings | File Templates.
 */




    $con	=	mysql_connect("localhost","root","gras17");
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }

    if	(mysql_query("CREATE	DATABASE	my_db",$con)){
        echo	"Database created";}
    else{
        echo "Error creating database:".mysql_error();
    }

   	mysql_select_db("webTec",$con);
    $sql	=	"CREATE	TABLE Persons (FirstName varchar(15), LastName	varchar(15), Age int)";

    //	Execute	query
    mysql_query($sql,$con);

    mysql_close($con);

?>