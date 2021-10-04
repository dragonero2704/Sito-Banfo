<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GKN4DGSBEF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GKN4DGSBEF');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Redattore</title>
    <link rel="icon" href="../immagini/logo.png">
    <!-- Css del Normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Il nostro css -->
    <link rel="stylesheet" href="../css/style.css">
    <!--Font Lato  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <?php
        session_start();
        if(isset($_SESSION['username'])){
            header('location: redattore.php');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
        } else {
            $username = "";
            $password = "";
        }
    ?>
</head>
<body>
<div class="super-container">
  <!-- Menu di navigazione -->
  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="../index.php">Home</a>
      <a href="nuoviarticoli.php">News</a>
      <a href="redazione.php">Chi Siamo</a>
      <div class="tdn">
           <a href="login.php">Redattore</a>
      </div>
    </div>
  </div>

  <div class="cont_menu">
      <div class="header_menu clearfix">
        <div class="menu_logo">
          <a href="../index.php"><img src="../immagini/ilbanfotipo.png" alt=""></a>
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
                                <img src="../immagini/logo.png">
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

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $p = strval(hash('sha256',$password));
            if( empty($_POST["username"]) or empty($_POST["password"])) {
                echo "<p>Campi lasciati vuoti</p>";
            } elseif (strpos($_POST["username"],'/') !== false and strpos($_POST["username"],' ') !== false and strpos($_POST["username"],'"') !== false and strpos($_POST["username"],'-') !== false){
              echo "<p>Errore in Username o Password, riprova</p>";
            }
            else {
                $conn = new mysqli("localhost", "studente", "pass_studente_banfi", "banfo");
                if($conn->connect_error){
                    die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                }
                $sql = "SELECT username, password
                        FROM redattore
                        WHERE username='$username' AND password='$p'";
                $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");

                if($ris->num_rows > 0) {
                    $_SESSION["username"] = $username;
                    $conn->close();
                    header('location: redattore.php');
                }
            }
        }
    ?>
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
