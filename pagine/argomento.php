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
  <?php if(!isset($argomento))$argomento = $_GET["argomento"]; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $argomento; ?></title>
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

  <!--============================================================================================================================-->

  <!-- News  -->
  <?php
 
  // $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
  $database = new Database();
  if (!empty($database->connerror)) {
    echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
  }

  $sql = "SELECT descrizione
          FROM categorie
          WHERE argomento = '$argomento'";

  $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
  if($argomento == "Attualita") $title = "Attualità";
  else $title = $argomento;
  if ($ris->num_rows > 0) {
    while ($row = $ris->fetch_assoc()) {
      echo "
                <div class='banner_singolo_argomento'>
                  <img src='./immagini/misc/bg_" . $argomento . ".png'>
                </div>

                <div>
                  <h1 class='big-text aligncenter'>" . $title . "</h1>
                  <p class='normal-text colorblue aligncenter'><i>" . $row["descrizione"] . "</i></p>
                </div>
              ";
    }
  }
  ?>


  <div class="homeflex justify_center">
    <?php
    // $sql = "SELECT collabora.codice_articolo as cod, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, collabora.codice_autore as autore, articoli.argomento as argomento, nome, cognome
    //       FROM collabora JOIN articoli
    //       ON collabora.codice_articolo=articoli.codice_articolo JOIN categorie
    //       ON articoli.argomento=categorie.argomento JOIN redazione 
    //       ON redazione.codice=collabora.codice_autore
    //       WHERE articoli.argomento = '$argomento' AND collabora.ruolo IN ('Scrittore', 'Scrittrice')
    //       GROUP BY collabora.codice_articolo, DATE_FORMAT(articoli.data, '%Y/%m/%d'), collabora.codice_autore, articoli.argomento, nome, cognome
    //       ORDER BY DATE_FORMAT(articoli.data, '%Y/%m/%d') DESC
    //       LIMIT 9";
        
    $sql = "SELECT collabora.codice_articolo as cod, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, collabora.codice_autore as autore, articoli.argomento as argomento, nome, cognome
                    FROM articoli JOIN (SELECT codice_articolo, MIN(codice_autore) as codice_autore, MIN(ruolo) as ruolo FROM collabora WHERE ruolo in ('Scrittore', 'Scrittrice') GROUP BY codice_articolo, ruolo) as collabora
                    ON collabora.codice_articolo=articoli.codice_articolo JOIN categorie
                    ON articoli.argomento=categorie.argomento JOIN redazione 
                    ON redazione.codice=collabora.codice_autore
                    WHERE collabora.ruolo IN ('Scrittore', 'Scrittrice') AND articoli.argomento = '$argomento'
                    ORDER BY DATE_FORMAT(articoli.data, '%Y/%m/%d') DESC
                    LIMIT 9";
    $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
    if ($ris->num_rows > 0) {
      while ($row = $ris->fetch_assoc()) {
        $articolo = fopen("./articoli/" . $row["cod"] . ".txt", "r");
        $titolo = fgets($articolo);
        $testo = fread($articolo, "450");
        fclose($articolo);
        echo "
                  
                  <div class='news_elemento'>
                    <div class='news_titolo'>
                      <h2>" . $titolo . "</h2>
                    </div>
                    <div class='news_immagine'>
                      <div class='news_categoria'>
                        <h2>" . $row["argomento"] . "</h2><!-- Scritto dinamicamente con il database -->
                      </div>
                      <img src='./immagini/articoli/" . $row["cod"] . ".jpg'>
                      <div class='news_data_su_immagine top-left'>
                        <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>" . $row["data"] . "</p> <!-- Scritta dinamicamente con il database -->
                      </div>
                      <div class='news_autore bottom-center'>
                      <a href='./membro/" . $row["autore"] . "'>  <p>" . $row["nome"] . " " . $row["cognome"] . "</p></a>
                      </div>
                    </div>
                    <div class='news_introduzione'>
                      <p>" . $testo . "...</p>
                    </div>
                    <div class='news_bottone'>
                    <a href='./articolo/" . $row["cod"] . "'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                    </div>
                  </div>
                  
                ";
      }
    } else {
      echo "Nessun articolo da visualizzare";
    }
    ?>
  </div>


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