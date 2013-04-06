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

    <title>Seapal</title>

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

<?php

require_once 'header.php';
$header = new Header();

//renders header
echo $header->getHeader('app');

?>

<!--needs for sidebar and content-->
<div class="container">
    <div class="row">

        <?php
        include 'content/contentApp.php';
        ?>
    </div>
</div>

<?php include './footer.php'; ?>

</body>
</html>






