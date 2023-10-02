<?php
require 'controleur/Controleur.php';

try {
    if (!isset($_GET['action'])) {
        return AfficherPageDefaut();
    }
    switch ($_GET['action']) {
        case 'Numero1':
            AfficherPageNumero1();
            break;
        case 'Numero2':
            AfficherPageNumero2();
            break;
        case 'Numero3':
            AfficherPageNumero3();
            break;
        default:
            throw new Exception('Aucune page spécifique demandée');
    }
} catch (PDOException $e) {
    $msgErreur = $e->getMessage();
    require 'vue/Erreur.php';
} catch (Exception $ex) {
    $msgErreur = $ex->getMessage();
    require 'vue/Erreur.php';
}