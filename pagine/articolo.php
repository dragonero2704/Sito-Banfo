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
  <?php
  if (!isset($cod)) $cod = $_GET["articolo"];
 
  $database = new Database();
  if (!empty($database->connerror)) {
    echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
  }
  // $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
  // if ($conn->connect_error) {
  //   die("<p>Connessione al server non riuscita: " . $conn->connect_error . "</p>");
  // }
  $sql = "SELECT collabora.codice_articolo as codice, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, argomento
          FROM collabora 
          JOIN articoli ON collabora.codice_articolo=articoli.codice_articolo
          WHERE collabora.codice_articolo = $cod";

  $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");


  function standard($profession)
  {
    $professioni = array('Scrittore', 'Scrittrice', 'Disegnatore', 'Disegnatrice', 'Fotografo', 'Fotografa');

    for ($i = 0; $i < count($professioni); $i++) {
      if ($profession === $professioni[$i] and $i % 2 != 0) {
        return $professioni[$i - 1];
      } else {
        if ($profession === $professioni[$i] and $i % 2 == 0) {
          return $profession;
        }
      }
    }
  }

  if ($ris->num_rows > 0) {
    $row = $ris->fetch_assoc();
    $articolo = fopen("./articoli/" . $row["codice"] . ".txt", "r");
    $titolo = fgets($articolo);
    $testo = fread($articolo, filesize("./articoli/" . $row["codice"] . ".txt"));
    fclose($articolo);

    $sql1 = "SELECT collabora.codice_autore as autore, nome, cognome, ruolo
                FROM collabora JOIN redazione
                ON collabora.codice_autore=redazione.codice
                WHERE collabora.codice_articolo = $cod";

    $ris1 = $database->query($sql1) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
    $autori = array();
    if ($ris1->num_rows > 0) {
      while ($row1 = $ris1->fetch_assoc()) {
        $profes = standard($row1["ruolo"]);
        if (!isset($autori[$profes])) $autori[$profes] = array();
        array_push($autori[$profes], $row1);
      }
    }
  } else {
    require_once('404.php');
    exit();
  }
  ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo "$titolo"; ?></title>
  <?php
  require_once('./components/head.php');
  ?>
</head>

<body>


  <!-- Menu di navigazione -->

  <?php
  require_once('./components/menu.php');
  ?>

  <!--============================================================================================================================-->


  <?= "<div class='contenitore_articolo_pagina'>
          <div class='immagine_del_mio_articolo'>
            <img src='./immagini/articoli/" . $row["codice"] . ".jpg'>
          </div>
          <div class='cont_titolo_articolo'>
            <h2 class='med-text text-bold'>" . $titolo . "</h2>
          </div>

          <div class='intestazione_del_mio_articolo'>
            <ul class='breadcrumb'>
            <li><a href='home'>Home</a></li>
              <li><a href='./argomento/" . $row["argomento"] . "'>" . $row["argomento"] . "</a></li>
              <li>" . $titolo . "</li>
            </ul>
          </div>
          <div class='testi_del_mio_articolo'>

            <div class='cont_testo'>
              <p class='normal-text'>" . nl2br($testo) . "</p>
              <div class='data_e_firma'>
                <p class='normal-text'>" . $row["data"] . "</p>
                    ";
  ?>
  <?php
  // if ($ris1->num_rows > 0) {
  //   while ($row1 = $ris1->fetch_assoc()) {
  //     echo "<a href='membro.php?membro=" . $row1["autore2"] . "'><p class='normal-text'>" . $row1["nome"] . " " . $row1["cognome"] . "</p></a>";
  //   }
  // } 
  $professioni = array('Scrittore', 'Scrittrice', 'Disegnatore', 'Disegnatrice', 'Fotografo', 'Fotografa');

  foreach ($professioni as $prof) {
    if (!isset($autori[$prof])) continue;

    if ($prof === 'Scrittore') {
      echo '<p style="margin-bottom: 0" class="normal-text">Articolo a cura di</p>';
    }
    if ($prof === 'Disegnatore' or $prof === 'Fotografo') {
      echo '<p style="margin-bottom: 0" class="normal-text">Immagine a cura di</p>';
    }

    foreach ($autori[$prof] as $autore) {
      echo "<a href='./membro/" . $autore["autore"] . "'><p style='margin-top: 0' class='normal-text'>" . $autore["nome"] . " " . $autore["cognome"] . "</p></a>";
    }
  }
  ?>
  <?= "</div>
      </div>
    </div>
  </div>";
  ?>


  <!--============================================================================================================================-->
  <!-- footer -->
  <?php
  require_once('./components/footer.php');
  ?>
  <!--============================================================================================================================-->

  <!-- Scripts -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
    var smooth = [$('a.smooth'), 100, 850];

    smooth[0].click(function() {
      $('html, body').animate({
        scrollTop: $('[id="' + $.attr(this, 'href').substr(1) + '"]').offset().top - smooth[1]
      }, smooth[2]);
      return false;
    });
  </script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</body>

</html>