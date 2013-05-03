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

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../bootstrap/css/docs.css" rel="stylesheet">
    <link href="../bootstrap/css/footer.less" rel="stylesheet/less" type="text/css">
    <link href="../bootstrap/css/content.less" rel="stylesheet/less" type="text/css">

    <title>Seapal</title>

    <script type="text/javascript" language="JavaScript" src="SignInValidator.js"></script>

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

<?php

require_once 'header.php';
require_once 'Sidebar.php';
$header = new Header();
$sidebar = new Sidebar();

//renders header
echo $header->getHeader('SignIn');
$db_erg_firstName = "Test";
//$db_erg_lastName = "aha";
//$db_erg_age = "6";
//$db_erg_firstName = "Test";
?>

<!--needs for sidebar and content-->
<div class="container">
    <div class="row">

        <?php
        IF(!isset($_POST['firstname']) AND !isset($_POST['lastname']) AND !isset($_POST['age'])){
            echo "dem arschloch";
            $db_erg_firstName = "";
            $db_erg_lastName = "";
            $db_erg_age = "";
            echo $sidebar->getSidebarForSite('SignIn');
            include 'content/contentSignIn.php';
        } else {

            echo "wir sind hier";

            $post_firstName = (string)$_POST['firstname'];
            $post_lastName = $_POST['lastname'];
            $post_age = $_POST['age'];

            /*echo '<script type="text/javascript" language="JavaScript">var blub= "<?php echo $post_firstName; ?>;" ;</script>';
            echo '<script type="text/javascript" language="JavaScript">validateFirstdname(blub);</script>';
            /*echo '<script type="text/javascript" language="JavaScript"> var blub= <? echo $post_firstName; ?>fuction validateFirstname(blub)</script>';*/

         echo '<script type="text/javascript" language="JavaScript"> a = 1; b = 2; c = a+b; alert(c); validateFirstname("lecken sie mich gepflegt die welt am arsch") </script>';



            echo $sidebar->getSidebarForSite('SignIn');
            include 'content/contentSignIn.php';

            /*IF(is_string($_POST['firstname']) AND is_string($_POST['lastname']) AND is_int($_POST['age'])){
                echo "dem is nix arschloch";

                echo $sidebar->getSidebarForSite('SignIn');
                include 'content/contentSignIn.php';
            } else {
                echo "Bitte alle Felder ausfüllen!";
                echo $sidebar->getSidebarForSite('SignIn');
                include 'insert.php';
                include 'content/contentSignIn.php';
            }*/
            echo $sidebar->getSidebarForSite('SignIn');
        }


        // IF durch isset ersetzt
        /*If ($_POST['firstname']== "" AND $_POST['lastname']=="" AND $_POST['age']==""){
            $db_erg_firstName = "";
            $db_erg_lastName = "";
            $db_erg_age = "";
        echo "hallo Nadine, hier muss ne prüfung hin :p";
        echo $sidebar->getSidebarForSite('SignIn');
        include 'content/contentSignIn.php';
        }
        else{
        echo $sidebar->getSidebarForSite('SignIn');
        include 'insert.php';
        include 'content/contentSignIn.php';}
        */


        ?>
    </div>
</div>

<?php include './footer.php'; ?>

</body>
</html>






