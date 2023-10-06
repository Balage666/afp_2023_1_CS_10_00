function betoltHirek(kategoria) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'getHirek.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            var hirLista = JSON.parse(this.responseText);
            var hirSzekcio = document.querySelector('section');
            hirSzekcio.innerHTML = '';

            hirLista.forEach(function(hir) {
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
    };
    xhr.send();
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
// Kultúra kategória kiválasztása
var kulturaLink = document.getElementById('kulturaLink');
kulturaLink.addEventListener('click', function(event) {
    event.preventDefault();
    betoltHirek('Kultúra'); // Betölti a Kultúra kategória híreit
});
// Kultúra kategória kiválasztása
var technologiaLink = document.getElementById('technologiaLink');
technologiaLink.addEventListener('click', function(event) {
    event.preventDefault();
    betoltHirek('Technológia'); // Betölti a Technológia kategória híreit
});
var osszesHirLink = document.getElementById('osszesHirLink');
osszesHirLink.addEventListener('click', function(event) {
    event.preventDefault();
    betoltHirek(); // Betölti az összes hírt
});
