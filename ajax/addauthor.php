 

<?php
//questa pagina verrà chiamata in modo asiconrono da una AJAX, non deve essere accessibile normalmente nel sito
require_once('../data/db.php');
$codice = $_GET['q'];

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

// die(json_encode(array(
//     "img_path" => $img_path,
//     "nome" => $row['nome'],
//     "cognome" => $row['cognome'],
//     "codice" => $codice,
//     "professione" => $row['professione'],
//     "classe" => $row['classe']
// )))
echo '<div class="item" onclick="deselect(this)" id="'.$codice.'-display"><h1>'.$row['nome'].' '.$row['cognome'].'</h1></div>';
echo "<div class='Red_singolo-membro' id='".$codice."-display'>

    <div class='Red_singolo_membro_img'>
        <img src='".$img_path."'>
    </div>
    <div class='delete_button' onclick='deselect(this.parentElement)'><span></span><span></span></div>

    <div class='Red_contenitore_membro'>
        <h2>" . $row["nome"] . " " . $row["cognome"] . "</h2>
        <div class='Red_professione'><input type='text' name='".$codice."-ruolo' value='". $row["professione"] ."'></div>
        <p>" . $row["classe"] . "</p>
    </div>
</div>";
?>



