const tableauEntiers = [1, 2, 3, 4, 5, 6];
const resultat = sommeNombresPairs(tableauEntiers);
console.log(resultat); // 12

// Votre fonction
function sommeNombresPairs(tab) {
    let total = 0;

    for (let i = 0; i < tab.length; ++i) {
        if (tab[i] % 2 === 0) {
            total += tab[i];
        }
    }

    return total;
}