<?php

function AfficherPageDefaut() {
    AfficherPageAccueil();
}

function AfficherPageAccueil() {
    require("vue/Accueil.php");
}

function AfficherPageNumero1() {
    require("vue/Numero1.php");
}

function AfficherPageNumero2() {
    require("vue/Numero2.php");
}

function AfficherPageNumero3() {
    require("vue/Numero3.php");
}
?>