<?php
  require('./data/db.php');

  $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
  echo 'starting...';
  $sql = '
      SELECT codice_articolo
      FROM articoli
      ';
  $ris = $conn->query($sql);
  echo 'query#1 executed...';

  if($ris->num_rows>0){
      while($row = $ris->fetch_assoc()){
          $cod = $row['codice_articolo'];
          echo $cod;
          $lines = file("./articoli/$cod.txt");
          $titolo = $lines[0];
          $sql = "
          UPDATE articoli
          SET titolo='$titolo'
          WHERE codice_articolo=$cod
          ";
          $conn->query($sql);
      }
  }
?> 

<?php
    require('./data/db.php');

    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

    $sql = '
      SELECT codice, professione
      FROM redazione
      ';
  $ris = $conn->query($sql);
  if($ris->num_rows>0){
    while($row = $ris->fetch_assoc()){
        $cod = $row['codice'];
        $ruolo = $row['professione'];
        
        
        $sql = "
        UPDATE collabora
        SET ruolo='$ruolo'
        WHERE codice_autore=$cod
        ";
        $conn->query($sql);
    }
}

?>