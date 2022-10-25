<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GKN4DGSBEF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GKN4DGSBEF');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Redattore</title>
    <?php
    require_once('../components/head.php');
    ?>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: redattore.php');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
    } else {
        $username = "";
        $password = "";
    }
    ?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $p = strval(hash('sha256', $password));
        // echo $p;
        if (empty($_POST["username"]) or empty($_POST["password"])) {
            echo "<p>Campi lasciati vuoti</p>";
        } elseif (strpos($_POST["username"], '/') !== false and strpos($_POST["username"], ' ') !== false and strpos($_POST["username"], '"') !== false and strpos($_POST["username"], '-') !== false) {
            echo "<p>Errore in Username o Password, riprova</p>";
        } else {
            require_once('../data/db.php');
            // $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
            $database = new Database();
            if (!empty($database->connerror)) {
                echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
            }
            $username = $database->escape_string($username);
            // if($conn->connect_error){
            //     die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
            // }
            $sql = "SELECT username, password
                        FROM redattore
                        WHERE username='$username' AND password='$p'";
            // $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");

            if ($ris->num_rows > 0) {
                $_SESSION["username"] = $username;
                header('location: redattore.php');
            }
        }
    }
    ?>
</head>

<body>
    <div class="super-container">
        <!-- Menu di navigazione -->
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content">
                <a href="home.php">Home</a>
                <a href="nuoviarticoli.php">News</a>
                <a href="redazione.php">Chi Siamo</a>
                <div class="tdn">
                    <a href="login.php">Redattore</a>
                </div>
            </div>
        </div>

        <div class="cont_menu">
            <div class="header_menu">
                <div class="menu_logo">
                    <a href="home.php"><img src="../immagini/misc/ilbanfotipo.png" alt=""></a>
                </div>
                <div class="menu_hamburger">
                    <span onclick="openNav()">&#9776;</span>
                </div>
            </div>
        </div>


        <div class="contenitore_all clearfix">
            <div class="contenitore_pagina_login">
                <div class="contenitore_titolo mt-2">
                    <h2>Diventa un redattore anche tu!</h2>
                    <p class="normal-text">Se vuoi accedere a questa pagina devi fare parte della redazione</p>
                </div>
            </div>
            <div class="contenitore_form">

                <div class="form-login">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="contenitore_login">
                            <div class="contenitore_pagina_form">
                                <div class="img_login">
                                    <img src="../immagini/misc/logo.png">
                                </div>
                                <div class="form">
                                    <div class="name-section">
                                        <input type="text" name="username" autocomplete="off" required>
                                        <label for="username" class="label-name">
                                            <span class="content-name">Username</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="name-section">
                                        <input type="password" name="password" required>
                                        <label for="password" class="label-name">
                                            <span class="content-name">Password</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="contenitore_bottone_form">
                                <button class="bottone_login" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>

</body>

</html>