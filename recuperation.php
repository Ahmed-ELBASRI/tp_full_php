<?php
if(count($_POST)==0){
    header("location:index.html");
}
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$moyenne = $_POST["moyenne"];
$dateNaissance = $_POST["dateNaissance"];
$niveauScolaire = $_POST["niveauScolaire"];
$genre = $_POST["genre"];
$ar = $_POST["ar"];
$fr = $_POST["fr"];
$an = $_POST["an"];
$adresse = $_POST["adresse"];
$ar = (isset($_POST["ar"]) ? $_POST["ar"] : "");
$fr = (isset($_POST["fr"]) ? $_POST["fr"] : "");
$an = (isset($_POST["an"]) ? $_POST["an"] : "");
$genre = (isset($_POST["genre"]) ? $_POST["genre"] : "");

if(!empty($nom)){
    $data = explode("-",$dateNaissance);
    if(checkdate($data[1],$data[2],$data[0]) && preg_match("/[A-Za-z ]{3,30}/",$nom) && preg_match("/[A-Za-z ]{3,30}/",$prenom)){
        $today = new DateTime();
        $dn = new DateTime($dateNaissance);
        $interval = $dn->diff($today);
        $diffy = $interval->y;
        $diffm = $interval->m;
        $diffd = $interval->d;

        $languages = "";
        if (!empty($ar)) {
            $languages .= $ar . " ";
        }
        if (!empty($fr)) {
            $languages .= $fr . " ";
        }
        if (!empty($an)) {
            $languages .= $an . " ";
        }
        echo "<div> vous etes $nom $prenom </div> <div>votre moyenne est $moyenne </div> <div>votre date naissance est $dateNaissance</div><div> votre niveau scolaire est $niveauScolaire</div><div>vous etes $genre </div> <div>vous parlez $languages </div><div> votre age est $diffy years $diffm months $diffd days </div><div>votre adresse $adresse</div>";
    
    }
}
?>