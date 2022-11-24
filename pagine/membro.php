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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
      if(!isset($cod)) $cod = $_GET["membro"];
      require_once('./data/db.php');
      // $conn = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
      $database = new Database();
if(!empty($database->connerror)){
    echo "<p>Errore di connessione ".$database->connerror['code'].":".$database->connerror['message']."</p>";
}
    
      $sql = "SELECT nome, cognome, classe, professione
            FROM redazione
            WHERE codice = $cod";
      $ris = $database->getAllFrom('redazione', "codice = $cod") or die("<p>Query fallita! " . $database->error['message'] . "</p>");
      $row = $ris[0];
    ?>

  <title><?php echo "" . $row["nome"] . " " . $row["cognome"] . ""; ?></title>
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
  <!-- Singola Persona -->
  <?php
  
  $img_path = file_exists("./immagini/redazione/" . $row["nome"] . "_" . $row["cognome"] . ".jpg") ? "../immagini/redazione/" . $row["nome"] . "_" . $row["cognome"] . ".jpg" : '../immagini/redazione/user.jpg';
  
    
            echo "<div class='persona_contenitore clearfix'>
                <div class='persona_card clearfix'>
                    <div class='persona_foto'>
                        <img src='$img_path'>
                    </div>

                    <div class='persona_generalita'>
                        <div class='persona_nome normal-text'>
                            <h2>" . $row['nome'] . " " . $row['cognome'] . "</h2>
                        </div>
                        <div class='persona_testo normal-text'>
                            <h3>Classe:</h3>
                            <p>" . $row['classe'] . "</p>
                            <h3>Ruolo:</h3>
                            <p>" . $row['professione'] . "</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='chisiamo_titolo normal-text'>
              <h1><span>I miei articoli</span></h1>
            </div>
            <div class='homeflex'>";
              
      
  $sql = "SELECT collabora.codice_articolo as codice, DATE_FORMAT(data, '%d/%m/%Y') as data, argomento
        FROM collabora JOIN articoli ON articoli.codice_articolo=collabora.codice_articolo
        WHERE collabora.codice_autore = $cod
        ORDER BY DATE_FORMAT(data, '%Y/%m/%d') DESC";
  $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
  if ($ris->num_rows > 0) {
    while ($row = $ris->fetch_assoc()) {
      $articolo = fopen("./articoli/" . $row["codice"] . ".txt", "r");
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
                    <img src='../immagini/articoli/" . $row["codice"] . ".jpg'>
                    <div class='news_data_su_immagine top-left'>
                        <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>" . $row["data"] . "</p> <!-- Scritta dinamicamente con il database -->
                    </div>
                    </div>
                    <div class='news_introduzione'>
                        <p>" . $testo . "...</p>
                    </div>
                    <div class='news_bottone'>
                        <a href='/".getSubDir()."/articolo/" . $row["codice"] . "'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                    </div>
                </div>
                
            
        ";
    }
  } else {
    echo "<p class='aligncenter' style='heigth:100%'>Nessun articolo da visualizzare</p>";
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

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
      },
      loop: true,
    });
  </script>

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