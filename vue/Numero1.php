<?php $titre = 'Numéro 1'; ?>

<?php ob_start(); ?>

<script src="js/numero1.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>