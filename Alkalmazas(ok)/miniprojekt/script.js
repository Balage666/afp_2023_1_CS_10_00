var hirLista = [
    { cim: "Cím 1", tartalom: "Hír 1 tartalma", kategoria: "Sport" },
    { cim: "Cím 2", tartalom: "Hír 2 tartalma", kategoria: "Kultúra" },
    { cim: "Cím 3", tartalom: "Hír 3 tartalma", kategoria: "Sport" },
    { cim: "Cím 4", tartalom: "Hír 4 tartalma", kategoria: "Sport" },
    { cim: "Cím 5", tartalom: "Hír 5 tartalma", kategoria: "Technológia" }
];

function betoltHirek(kategoria) {
    var hirSzekcio = document.querySelector('section');
    hirSzekcio.innerHTML = '';

    hirLista.forEach(function(hir, index) {
        if (hir.kategoria === kategoria || !kategoria) {
            var article = document.createElement('article');
            var h1 = document.createElement('h1');
            var p = document.createElement('p');

            h1.textContent = hir.cim;
            p.textContent = hir.tartalom;

            article.appendChild(h1);
            article.appendChild(p);

            hirSzekcio.appendChild(article);
        }
    });
}

// Az oldal betöltésekor az összes hír megjelenítése
window.addEventListener('load', function() {
    betoltHirek();
});

// Sport kategória kiválasztása
var sportLink = document.getElementById('sportLink');
sportLink.addEventListener('click', function(event) {
    event.preventDefault();
    betoltHirek('Sport'); // Betölti a Sport kategória híreit
});
