<?php $titre = 'Numéro 3'; ?>

<?php ob_start(); ?>

<!-- type="module" permet de faire des import dans le JS et donc de mieux séparer notre code. -->
<script type="module" src="js/numero3.js"></script>

<div class="row g-2">
    <div class="col-sm-8 col-md-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="auteur" placeholder="Auteur" list="auteurs">
            <label for="auteur">Auteur</label>
            <datalist id="auteurs"></datalist>
        </div>
    </div>

    <div class="col-sm-4 col-md-6">
        <div class="form-floating">
            <select class="form-select" id="annees">
                <option value="" selected>Année</option>
            </select>
            <label for="annees">Choisissez une année</label>
        </div>
    </div>
</div>

<!-- https://getbootstrap.com/docs/5.0/content/tables/ -->
<table id="livres" class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Année</th>
        </tr>
    </thead>
    <tbody>
        <!-- Ajouter les livres ici à l'aide de JS -->
    </tbody>
</table>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/Gabarit.php'; ?>