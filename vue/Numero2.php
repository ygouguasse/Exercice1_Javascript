<?php $titre = 'Numéro 2'; ?>

<?php ob_start(); ?>

<p class="text-center">Voir la console</p>

<!-- type="module" permet de faire des import dans le JS et donc de mieux séparer notre code. -->
<script type="module" src="js/numero2.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>