import { tousLesLivres, RechercherLivresParAuteur, RechercherLivresPubliesApres } from "./livres";

// Affichage de tous les livres
AfficherLivres(tousLesLivres);

// Recherche des livres écrits par un auteur spécifique
const livresDeTolkien = RechercherLivresParAuteur("J.R.R. Tolkien");
console.log("Livres de J.R.R. Tolkien :", livresDeTolkien);

// Recherche des livres publiés après une certaine année
const livresApres1990 = RechercherLivresPubliesApres(1990);
console.log("Livres publiés après 1990 :", livresApres1990);

// Votre code
