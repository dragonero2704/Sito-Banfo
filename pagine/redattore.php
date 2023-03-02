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
    <title>Redattore</title>
    <?php
    require_once('./components/head.php');
    ?>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: ./login");
    }
    $username = $_SESSION["username"];

    require_once('./data/db.php');
    $database = new Database();
    if (!empty($database->connerror)) {
        echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
    }

    //prende l'ultimo articolo pubblicato
    $sql = "SELECT codice_articolo
    FROM articoli
    ORDER BY codice_articolo DESC
    LIMIT 1";
    $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
    if ($ris->num_rows > 0) {
        while ($row = $ris->fetch_assoc()) {
            $codice = $row["codice_articolo"] + 1;
        }
    }

    ?>
</head>

<body>
    <!-- Menu di navigazione -->
    <?php
      require_once('./components/menu.php');
    ?>



    <form id="regForm" action="<?php basename($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <h1>Nuovo articolo</h1>
        <h2 id="titolo"></h2>
        <div class="tab" id="bg-pubblicazione"></div>

        <div class="tab" id="bg-titolo">
            <div class="contenitore_pagina_form">
                <div class="form">
                    <div class="name-section" style="display: flex; align-items: center;">
                        <input type="text" name="titolo" autocomplete="off" required style="background-color: Transparent;">
                        <label for="titolo" class="label-name">
                            <span class="content-name">Titolo dell'Articolo</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab" id="bg-data">
            <input type="date" name="data" placeholder="Data" style="position: relative; top: 50%; transform: translate(0, -50%); border: 0; appearance: none; background-color: rgb(0, 113, 227, 0.9);  color: white; font-size:2.7vh; outline: none;">
        </div>

        <div class="tab" id="bg-categoria">
            <select name="argomento" class="selectArgomento" style="position: relative; top: 50%; transform: translate(0, -50%); border: 0; font-size:2.7vh; outline: none;">
                <option value="" disabled selected hidden>Argomento</option>
                <?php
                $sql = "SELECT argomento
                    FROM categorie
                    ORDER BY argomento";
                $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
                if ($ris->num_rows > 0) {
                    while ($row = $ris->fetch_assoc()) {
                        echo "<option value='" . $row["argomento"] . "'>" . $row["argomento"] . "</option>";
                    }
                }
                ?>
            </select>
        </div>

        <div class="tab" id="bg-autore">

            <!-- dummy select -->
            <select id="dummy_select" class="selectAutore" style="position: relative; top: 50%; transform: translate(0, -50%); border: 0; outline: none;">
                <option class="option" value="" disabled selected hidden>Autore</option>
                <?php
                $sql = "SELECT codice, nome, cognome
                    FROM redazione
                    WHERE attivo = 1
                    ORDER BY cognome";
                $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
                if ($ris->num_rows > 0) {
                    while ($row = $ris->fetch_assoc()) {
                        echo '<option class="option" value=' . $row['codice'] . '>' . $row["nome"] . ' ' . $row["cognome"] . '</option>';
                    }
                }
                ?>
            </select>
                <!-- In questo div appariranno i risultati della selezione -->
            <div class="Red_flex" style="margin-top: 400px;"></div>



        </div>

        <div class="tab" id="bg-testo">
            <textarea name="testo" placeholder="Testo dell'Articolo" class="formText"></textarea>
        </div>

        <div class="tab" id="bg-immagine">
            <input type="file" id="files" name="upload" placeholder="Immagine" style="margin-top: 3vh;">
        </div>

        <div class="tab" id="bg-pubblicazione"></div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" class="bottone_redattore" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" class="bottone_redattore" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>

        </div>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        var istruzioni = ["", "Inserisci il Titolo dell'Articolo", "Inserisci la Data dell'Articolo", "Inserisci l'Argomento dell'Articolo",
            "Inserisci l'Autore dell'Articolo", "Inserisci il Testo dell'Articolo",
            "Inserisci l'Immagine dell'Articolo", "Abbiamo quasi finito, clicca il tasto Submit per Pubblicare l'Articolo", ""
        ];

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            document.getElementById("titolo").innerHTML = istruzioni[currentTab];
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    //y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

    <script src="./javascript/redattore.js"></script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["titolo"]) or empty($_POST["data"]) or empty($_POST["argomento"]) or empty($_POST["autore"]) or empty($_POST["testo"])) {
            echo "<p>Campi lasciati vuoti</p>";
        } else {
            /*// inserisco il percorso dove verranno caricate le foto
                $upload_percorso = './Immagini/';
                // salvo il percorso temporaneo dell'immagine caricata
                $file_tmp = $_FILES['img']["tmp"];
                // salvo il nome dell'immagine caricata
                $file_nome = $_FILES['img']["name"];
                // sposto l'immagine nel percorso che prima abbiamo deciso
                move_uploaded_file($file_tmp, $upload_percorso.$file_nome);*/

            $autori = $_POST['autore'];
            $ruoli = array();

            foreach ($autori as $aut) {
                $ruoli[$aut] = $_POST[$aut . '-ruolo'];
            }

            // settiamo alcune variabili coinvolte nello script:
            // 1) settiamo la cartella in cui fare l'upload
            $cartella_upload = "./immagini/articoli/";
            $img = "" . $codice . ".jpg";

            // 2) settiamo un array in cui indichiamo il tipo di file che consentiamo l'upload
            // in questo esempio solo immagini
            $tipi_consentiti = array("gif", "png", "jpeg", "jpg");

            // 3) settiamo la dimensione massima del file (1048576 byte = 1Mb)
            $max_byte = 100000;


            // se il form è stato inviato
            // verifichiamo che l'utente abbia selezionato un file
            if (trim($_FILES["upload"]["name"]) == '') {
                echo 'Non hai selezionato nessun file!';
            }

            // verifichiamo che il file è stato caricato
            else if (!is_uploaded_file($_FILES["upload"]["tmp_name"]) or $_FILES["upload"]["error"] > 0) {
                echo 'Si sono verificati problemi nella procedura di upload!';
            }

            // verifichiamo che il tipo è fra quelli consentiti
            /*else if(!in_array(strtolower(end(explode('.', $_FILES["upload"]["name"]))),$tipi_consentiti))
                    {
                        echo 'Il file che si desidera uplodare non è fra i tipi consentiti!';
                    }  */

            // verifichiamo che la dimensione del file non eccede quella massima
            /*else if($_FILES["upload"]["size"] > $max_byte)
                    {
                        echo 'Il file che si desidera uplodare eccede la dimensione massima!';
                    } */

            // verifichiamo che la cartella di destinazione settata esista
            else if (!is_dir($cartella_upload)) {
                echo 'La cartella in cui si desidera salvare il file non esiste!';
            }

            // verifichiamo che la cartella di destinazione abbia i permessi di scrittura
            else if (!is_writable($cartella_upload)) {
                echo "La cartella in cui fare l'upload non ha i permessi!";
            }
            // verifichiamo il successo della procedura di upload nella cartella settata
            else if (!move_uploaded_file($_FILES["upload"]["tmp_name"], $cartella_upload . $img)) {
                echo 'Ops qualcosa è andato storto nella procedura di upload!';
            }

            // altrimenti significa che è andato tutto ok
            else {
                echo '<script>alert("Articolo pubblicato correttamente");</script>';
            }

            $articolo = fopen("./articoli/" . $codice . ".txt", "w");
            fwrite($articolo, "" . $_POST["titolo"] . "\n\n");
            fwrite($articolo, $_POST["testo"]);
            fclose($articolo);
            foreach ($_POST as $key => $value) {
                if($key == "autore") continue;
                $_POST[$key] = $database->escape_string($value);
            }
            $sql = "INSERT INTO articoli (codice_articolo,data,titolo, argomento)
                            VALUES ('" . $codice . "',
                                    '" . $_POST["data"] . "',
                                    '" . $_POST["titolo"] . "',
                                    '" . $_POST["argomento"] . "')";
            $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");

            $database->query('SET FOREIGN_KEY_CHECKS=0;');
            //autori
            foreach ($autori as $aut) {
                $ruolo = $ruoli[$aut];
                $sql = "INSERT INTO collabora (codice_articolo, codice_autore, ruolo)
                            VALUES ($codice,
                                    $aut,
                                    '$ruolo')";
                $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
            }
            $database->query('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
    ?>
</body>

</html>