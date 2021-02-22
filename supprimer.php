<?php
/**
 * Created by PhpStorm.
 * User: bounda
 * Date: 31/01/2021
 * Time: 10:59
 */
include_once 'inc/server.class.php';

$id = $_GET['id'];
supprimer($pdo, $id);

header('location:partenaires.php');