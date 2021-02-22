<?php
require_once('config.inc.php');

function getIp(){
    // IP si internet partagé
    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    // IP derrière un proxy
    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    // Sinon IP normale
    else {
        return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    }
}

function exist_visiteur($pdo, $ip){
    $sql = "SELECT id FROM visiteurs WHERE adresse_ip = '.$ip.'";

    try{
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetch(PDO::FETCH_ASSOC);
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Le visiteur n\'existe pas ' .$e->getMessage());
    }
}

function save_visiteurs($pdo, $ip, $date_visite){
    $sql = "INSERT INTO visiteurs(adresse_ip,date_connexion) VALUES (:ip,:date_visite)";

    try{
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':ip', $ip, PDO::PARAM_STR);
        $prep->bindValue(':date_visite', $date_visite);
        $prep->execute();
    } catch (Exception $e) {
        die('Erreur enregistrement visiteur '.$e->getMessage());
    }
}

function nbre_visiteurs($pdo){
    $sql = "select max(id) from visiteurs";

    try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetch(PDO::FETCH_ASSOC);
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur decompte visiteurs ' .$e->getMessage());
    }
}

function save_partenaire($pdo, $nom, $site, $fileName, $upload_on){
    $sql = "INSERT INTO partenaires(nom,site_web,file_name,uploaded_on) VALUES (:nom,:site,:fileName,:upload_on)";

    try{
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
        $prep->bindValue(':site', $site, PDO::PARAM_STR);
        $prep->bindValue(':fileName', $fileName, PDO::PARAM_STR);
        $prep->bindValue(':upload_on', $upload_on);
        $prep->execute();
    } catch (Exception $e) {
        die('Erreur enregistrement d\'un partenaire '.$e->getMessage());
    }
}

function liste_partenaires($pdo){
    $sql = "SELECT id, nom, site_web, file_name FROM partenaires";

    try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetchAll();
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur liste des partenaires ' .$e->getMessage());
    }
}

function supprimer($pdo, $id){
    $sql = "DELETE FROM partenaires WHERE id = '.$id.'";

    try{
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetch(PDO::FETCH_ASSOC);
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur de suppression ' .$e->getMessage());
    }
}

function save_membre($pdo, $nom, $fonction, $fileName, $upload_on, $facebook, $twitter, $linkedin){
    $sql = "INSERT INTO equipe(nom,fonction,file_name,uploaded_on,lien_facebook,lien_twitter,lien_linkedin) VALUES (:nom,:fonction,:fileName,:upload_on,:facebook,:twitter,:linkedin)";

    try{
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
        $prep->bindValue(':fonction', $fonction, PDO::PARAM_STR);
        $prep->bindValue(':fileName', $fileName, PDO::PARAM_STR);
        $prep->bindValue(':upload_on', $upload_on);
        $prep->bindValue(':facebook', $facebook, PDO::PARAM_STR);
        $prep->bindValue(':twitter', $twitter, PDO::PARAM_STR);
        $prep->bindValue(':linkedin', $linkedin, PDO::PARAM_STR);
        $prep->execute();
    } catch (Exception $e) {
        die('Erreur enregistrement d\'un membre '.$e->getMessage());
    }
}

function liste_membres($pdo){
    $sql = "SELECT id, nom, fonction, file_name, lien_facebook, lien_twitter, lien_linkedin FROM equipe";

    try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetchAll();
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur liste membres équipe ' .$e->getMessage());
    }
}

function recuperation($pdo, $username){
    $sql = 'SELECT password, id FROM administrateur WHERE username = "'.username.'"';

    try{
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetch(PDO::FETCH_ASSOC);
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur de recupération de l\'utilisateur ' .$e->getMessage());
    }
}

function save_temoignage($pdo, $nom, $metier, $fileName, $upload_on, $message){
    $sql = "INSERT INTO temoignages(nom,metier,file_name,uploaded_on,message) VALUES (:nom,:metier,:fileName,:upload_on,:message)";

    try{
        $prep = $pdo->prepare($sql);
        $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
        $prep->bindValue(':metier', $metier, PDO::PARAM_STR);
        $prep->bindValue(':fileName', $fileName, PDO::PARAM_STR);
        $prep->bindValue(':upload_on', $upload_on);
        $prep->bindValue(':message', $message, PDO::PARAM_STR);
        $prep->execute();
    } catch (Exception $e) {
        die('Erreur enregistrement d\'un témoignage '.$e->getMessage());
    }
}

function liste_temoignages($pdo){
    $sql = "SELECT id, nom, metier, file_name, message FROM temoignages";

    try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $arr = $prep->fetchAll();
        $prep->closeCursor();
        $prep = NULL;
        return $arr;
    } catch (Exception $e) {
        die('Erreur liste des témoignages ' .$e->getMessage());
    }
}

function active($url){
    if($_SERVER["PHP_SELF"] == $url){
        echo 'class="active"';
    }
}
?>