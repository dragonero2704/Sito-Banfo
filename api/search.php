<?php

if(strlen($keyword)<3){
    die(json_encode("{}"));
}

$db = new Database();
// articoli
$articoli = $db->getAllFrom("articoli","LOWER(titolo) LIKE '%$keyword%'","
ORDER BY 
CASE 
WHEN LOWER(titolo) = '$keyword' THEN 0  
WHEN LOWER(titolo) LIKE '$keyword%' THEN 1  
WHEN LOWER(titolo) LIKE '%$keyword%' THEN 2  
WHEN LOWER(titolo) LIKE '%$keyword' THEN 3  
ELSE 4
END, LOWER(titolo) ASC");
// membri della redazione
$redazione = $db->getAllFrom("redazione","LOWER(nome) LIKE '%$keyword%' 
OR LOWER(cognome) LIKE '%$keyword%'","
ORDER BY CASE 
WHEN LOWER(cognome) = '$keyword' THEN 0  
WHEN LOWER(cognome) LIKE '$keyword%' THEN 1  
WHEN LOWER(cognome) LIKE '%$keyword%' THEN 2  
WHEN LOWER(cognome) LIKE '%$keyword' THEN 3  
ELSE 4
END, LOWER(cognome) ASC");

$results = array("redazione"=>$redazione, "articoli"=>$articoli, "keyword"=>$keyword);
die(json_encode($results));
