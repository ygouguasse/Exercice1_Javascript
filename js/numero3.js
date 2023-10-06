import { tousLesLivres, RechercherLivresParAuteur, RechercherLivresPubliesApres } from "./livres";

// Votre code
window.addEventListener("load", Initialiser);

function Initialiser() {
    AfficherLivres(tousLesLivres);
    AjouterAuteursDesLivresDansDatalist();
    AjouterAnneesDesLivresDansMenuDeroulant();

	document.getElementById("auteur").addEventListener("blur", GererBlurDeInputAuteur);    //bulur : qu'on quitte
    document.getElementById("annees").addEventListener("change", GererChangeDeSelectAnnee); 
}

function AfficherLivres(livres) {
    const table = document.getElementById("livres");
    const tbody = table.querySelector("tbody");

    tbody.innerHTML = "";

    livres.forEach(livre => {
        tbody.innerHTML += `
            <tr>
                <td>${livre["titre"]}</td>
                <td>${livre["auteur"]}</td>
                <td>${livre["annee"]}</td>
            </tr>
        `;
    });
}

function GererBlurDeInputAuteur(event) {     // Event prend  evenement blur
    const auteur = event.currentTarget.value;

    if (auteur === "") {
        AfficherLivres(tousLesLivres);
        return;
    }

    const livres = RechercherLivresParAuteur(auteur);
    AfficherLivres(livres);
}

function GererChangeDeSelectAnnee(event) {
    const annee = event.currentTarget.value;

    if (annee === "") {
        AfficherLivres(tousLesLivres);
        return;
    }

    const livres = RechercherLivresPubliesApres(annee);
    AfficherLivres(livres);
}

function AjouterAuteursDesLivresDansDatalist() {
    const datalist = document.getElementById("auteurs");
    const auteurs = [];

    for (let i = 0; i < tousLesLivres.length; i++) {
        const livre = tousLesLivres[i];

        if (!auteurs.includes(livre["auteur"])) {
            auteurs.push(livre["auteur"]);
        }
    }

    auteurs.forEach(auteur => {
        datalist.innerHTML += `
            <option value="${auteur}">
                ${auteur}
            </option>
        `;
    });
}

function AjouterAnneesDesLivresDansMenuDeroulant() {
    const menu = document.getElementById("annees");
    const annees = [];

    tousLesLivres.forEach(livre => {
        if (!annees.includes(livre["annee"])) {
            annees.push(livre["annee"]);
        }                                                    
    });

    annees.forEach(annee => {
        menu.innerHTML += `
            <option value=" ${annee}" > ${annee}           
            </option>
        `;
    });
}
