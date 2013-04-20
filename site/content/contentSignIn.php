<?php

?>


<!-- Content -->
<div class="span9">
    <section id="SignIn">
        <div class="page-header">
            <h2>Sign In</h2>
        </div>


            <?php
;
            /*
            $con = mysql_connect("localhost","root","gras17");
            //$firstName = $_POST['firstname'];
            //$lastName = $_POST['lastname'];
            //$age = $_POST['age'];
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

    //$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES('$firstName', '$lastName', '$age')";

  /*  if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    };
**/
        ?>

        <div>
            <p>
            <form action="SignIn.php" method="post">
                Firstname: <input value="<?php

                echo $GLOBALS["db_erg_firstName"];
                if (isset($GLOBALS["db_erg_firstName"])){
                        echo $GLOBALS["db_erg_firstName"];
                        echo "Arschloch in";
                    }
                    ?>" id="firstName" type="text" name="firstname" />
                    Lastname: <input id="lastName" type="text" name="lastname" />
                    Age: <input id="age" type="text" name="age" />
                <input type="submit" />
            </form></p>
            <br>
            <br>
            <img src="../img/icons/ibn.jpg" alt="SeaPal-InitialPosition"/>
            <figcaption>IBN Publishing House</figcaption>
            <br>
            <img src="../img/icons/htwg.png" alt="SeaPal-InitialPosition"/>
            <figcaption>HTWG Constance University</figcaption>
            <br>
            <br>
        </div>
    </section>
</div>
<!-- Content -->