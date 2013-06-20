<!DOCTYPE html>
<html lang="de">
<head>

    <!-- Meta Informations -->
    <meta charset="utf-8">
    <meta http-equiv='content-type' content='text/html; charset=utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='keywords' content='sailing, app, navigation, sea map, boat, skipper'/>
    <meta name='description' content='SeaPal is a mobile app for sailors to do navigation, tracking and more.'/>
    <meta name="author" content="Prof. Dr. Marko Boger, Dominic Eschbach und Timo Partl">

    <title>Seapal</title>

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

<?php

require_once 'header.php';
require_once 'Sidebar.php';
$header = new Header();
$sidebar = new Sidebar();
include('scripts.php');
//renders header
echo $header->getHeader('SignIn');
?>

<!--needs for sidebar and content-->
<div class="container">
    <div class="row">

        <?php
        include("SignInValidator.php");
        IF(!isset($_POST['firstname']) AND !isset($_POST['lastname']) AND !isset($_POST['age'])){
            $db_erg_firstName = "";
            $db_erg_lastName = "";
            $db_erg_age = "";
            echo $sidebar->getSidebarForSite('SignIn');
            include 'content/contentSignIn.php';
        } else {


            $post_firstName = (string)$_POST['firstname'];
            $post_lastName = $_POST['lastname'];
            $post_age = $_POST['age'];

    //        IF($validatorFirstname = validateName($post_firstName)=true){
     //          IF($validatorLastname = validateName($post_lastName=true){
      //             If($validatorAge = validateAge($post_age)=true){

            IF(validateName($post_firstName)==true
                and validateName($post_lastName)==true
                and validateAge($post_age)==true){
                //         IF($validatorLastname = validateName($post_lastName)=true){
                //             If($validatorAge = validateAge($post_age)=true){

           echo $sidebar->getSidebarForSite('SignIn');

// Connection zur DB-Server öffnen und DB auswählen
            $con = mysql_connect("localhost","root","gras17");
            mysql_select_db("webtec");

// Werte aus Input-Feldern in DB schreiben
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $age = $_POST['age'];
            $sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$firstName', '$lastName', '$age')";
// Input-Query ausführen
            if (!mysql_query($sql,$con))
            {
                die('Error: ' . mysql_error());
            };

// Output-Query ohne WHERE zusammenstellen
            $sql_firstName = "SELECT FirstName FROM Persons WHERE FirstName = '$firstName'AND  LastName = '$lastName'AND Age ='$age'";
            $sql_lastName = "SELECT LastName FROM Persons WHERE LastName = '$lastName'AND Age ='$age'AND FirstName = '$firstName'";
            $sql_age = "SELECT age FROM Persons WHERE Age ='$age'AND LastName = '$lastName'AND FirstName = '$firstName'";

// Output-Queries ausführen
            $db_erg_firstName = mysql_query( $sql_firstName);
            $db_erg_lastName = mysql_query( $sql_lastName);
            $db_erg_age = mysql_query( $sql_age);

            if ( (! $db_erg_firstName) || (! $db_erg_lastName) || (! $db_erg_age) ){
                die('Ungültige Abfrage: ' . mysql_error());
            } else {
                $row = mysql_fetch_array($db_erg_firstName, MYSQL_NUM);
                $db_erg_firstName = $row[0];
                $row = mysql_fetch_array($db_erg_lastName, MYSQL_NUM);
                $db_erg_lastName = $row[0];
                $row = mysql_fetch_array($db_erg_age, MYSQL_NUM);
                $db_erg_age = $row[0];
            }


        } else { echo"Fehlermeldung, Validator hat angeschlagen"; }
            include 'content/contentSignIn.php';
        }

        //}
        ?>
    </div>
</div>

<?php include './footer.php'; ?>

</body>
</html>






