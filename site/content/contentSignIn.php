<!-- Content -->
<div class="span9">
    <section id="SignIn">
        <div class="page-header">
            <h2>Sign In</h2>
        </div>

        <div>
            <p>
            <form action="SignIn.php" method="post">
                Firstname: <input value="<?php echo (string)$db_erg_firstName ; ?>"
                    id="firstName" type="text" name="firstname" />
                Lastname: <input value="<?php echo $db_erg_lastName ; ?>"
                    id="lastName" type="text" name="lastname" />
                Age: <input value="<?php echo $db_erg_age ; ?>"
                    id="age" type="text" name="age" />
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