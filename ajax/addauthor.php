<?php
//questa pagina verrà chiamata in modo asiconrono da una AJAX, non deve essere accessibile normalmente nel sito
require_once('../data/db.php');
//il numero 26 è il membro della redazione di default "Il Banfo"
$codice = empty($_GET['q']) ? 26 : $_GET['q'];

$database = new Database();
if (!empty($database->connerror)) {
    echo "<p>Errore di connessione " . $database->connerror['code'] . ":" . $database->connerror['message'] . "</p>";
}

$ris = $database->getAllFrom('redazione', "
codice = '$codice'
");

if (empty($ris)) {
    $database->close();
    die("{}");
}
$row = $ris[0];

$img_path = file_exists('../immagini/redazione/' . $row['nome'] . '_' . $row['cognome'] . '.jpg') ?
    '../immagini/redazione/' . $row['nome'] . '_' . $row['cognome'] . '.jpg' :
    '../immagini/redazione/user.jpg';

$database->close();

die(json_encode(array(
    "imgPath" => $img_path,
    "nome" => $row['nome'],
    "cognome" => $row['cognome'],
    "id" => $codice,
    "professione" => $row['professione'],
    "classe" => $row['classe']
)));
?>



