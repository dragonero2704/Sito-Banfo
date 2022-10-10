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
  <title>News</title>
  <?php
    require_once('../components/head.php');
  ?>
</head>

<body>

  <!-- Menu di navigazione -->
  <section id="goHere">
  </section>
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
    <div class="header_menu clearfix">
      <div class="menu_logo">
        <a href="home.php"><img src="../immagini/ilbanfotipo.png" alt=""></a>
      </div>
      <div class="menu_hamburger">
        <span onclick="openNav()">&#9776;</span>
      </div>
    </div>
  </div>

  <!--============================================================================================================================-->
  <div class="banner_singolo_argomento">
    <img src="../immagini/undraw_newspaper_k72w.png">
  </div>
  <!--============================================================================================================================-->

  <!-- News  -->
  <div>
    <h1 class="big-text aligncenter">News</h1>
    <p class="colorblue normal-text aligncenter"><i>Scopri gli ultimi articoli</i></p>
  </div>

  <div class="homeflex">



    <?php
    require_once('../data/db.php');
    // $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
    $database = new Database() or die("<p>Connessione al server non riuscita: " . $database->connerror['message'] . "</p>");

    $sql = "	SELECT DISTINCT collabora.codice_articolo as cod, DATE_FORMAT(articoli.data, '%d/%m/%Y') as data, collabora.codice_autore as autore, articoli.argomento as argomento, nome, cognome
                        FROM collabora JOIN articoli
                        ON collabora.codice_articolo=articoli.codice_articolo JOIN categorie
                        ON articoli.argomento=categorie.argomento JOIN redazione 
                        ON redazione.codice=collabora.codice_autore
                        WHERE collabora.ruolo IN ('Scrittore', 'Scrittrice')
                        ORDER BY DATE_FORMAT(articoli.data, '%Y/%m/%d') DESC
                        LIMIT 9";
    $ris = $database->query($sql) or die("<p>Query fallita! " . $database->error['message'] . "</p>");
    if ($ris->num_rows > 0) {
      while ($row = $ris->fetch_assoc()) {
        $articolo = fopen("../articoli/" . $row["cod"] . ".txt", "r");
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
                        <img src='../immagini/" . $row["cod"] . ".jpg'>
                        <div class='news_data_su_immagine top-left'>
                          <p><i style='margin-right:10px;' class='far fa-calendar-alt'></i>" . $row["data"] . "</p> <!-- Scritta dinamicamente con il database -->
                        </div>
                        <div class='news_autore bottom-center'>
                        <a href='membro.php?membro=" . $row["autore"] . "'><p>" . $row["nome"] . " " . $row["cognome"] . "</p></a>
                        </div>
                      </div>
                      <div class='news_introduzione'>
                        <p>" . $testo . "...</p>
                      </div>
                      <div class='news_bottone'>
                      <a href='articolo.php?articolo=" . $row["cod"] . "'><button class='il_mio_bottone'><span>Scopri di più  </span></button></a>
                      </div>
                    </div>
                    
                    ";
      }
    }
    
    ?>



  </div>


  <!--============================================================================================================================-->
  <!-- footer -->
  <?php
  require_once('../components/footer.php');
  ?>
  <!--============================================================================================================================-->

  <!-- Scripts -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
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