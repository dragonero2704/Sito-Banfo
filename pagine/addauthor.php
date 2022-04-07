 

<?php
//questa pagina verrà chiamata in modo asiconrono da una AJAX, non deve essere accessibile normalmente nel sito
require('../data/db.php');
$codice = $_GET['q'];
$conn = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die("Connessione fallita, come te.");

$query = "SELECT nome, cognome, professione, classe
        FROM redazione
        WHERE codice='$codice'
        ";

$ris = $conn->query($query);
$conn->close();

$row = $ris->fetch_assoc();
if (file_exists('../immagini/' . $row['nome'] . '_' . $row['cognome'] . '.jpg')) {
    $img_path = '../immagini/' . $row['nome'] . '_' . $row['cognome'] . '.jpg';
} else {
    $img_path = '../immagini/user.jpg';
}
// echo '<div class="item" onclick="deselect(this)" id="'.$codice.'-display"><h1>'.$row['nome'].' '.$row['cognome'].'</h1></div>';
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



