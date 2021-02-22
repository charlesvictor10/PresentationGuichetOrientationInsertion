<?php
/**
 * Created by PhpStorm.
 * User: bounda
 * Date: 31/01/2021
 * Time: 09:15
 */
include_once 'inc/server.class.php';

$statusMsg = '';
// Chemin de téléchargement du fichier
$targetDir = "images/equipes/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
if(isset($_POST["soumettre"]) && !empty($_FILES["file"]["name"])) {
    // Autoriser certains formats de fichier
    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
        // Télécharger le fichier sur le serveur
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Enregistrer le partenaire dans la BD
            $insert = save_membre($pdo, $_POST["nom"], $_POST["fonction"], $fileName, date("Y-m-d H:i:s"), $_POST['lien_facebook'], $_POST['lien_twitter'], $_POST['lien_linkedin']);
            if ($insert) {
                $statusMsg = "Le partenaire a été enregistré avec succés.";
            } else {
                $statusMsg = "L'enregistrement du partenaire a échoué, veuillez réessayer.";
            }
        } else {
            $statusMsg = "Désolé, une erreur s'est produite lors de l'enregistrement du partenaire.";
        }
    } else {
        $statusMsg = "Désolé, seul les fichiers .jpg, .png, .jpeg sont acceptés.";
    }
} else{
    $statusMsg = "Veuillez selectionner un fichier à télécharger.";
}

header('location:ajoutMembre.php');