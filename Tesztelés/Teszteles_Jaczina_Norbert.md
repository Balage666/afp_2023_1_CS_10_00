### Kijelentkezés tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t001__ | Kijelentezési __gombra való kattintással__: | Az oldal sikeresen kijelentkezteti a felhasználót, közben egy üzenet jelenik meg, amely értesíti a felhasználót a sikeres kijelentkezésről. Ezt követően a rendszer átnavigálja a felhasználót a bejelentkezési oldalra. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t002__ | Kijelentezés után __újra bejelentkezés__: | **A felhasználó újra be tud lépni**, és újra eléri az oldal funkcióit. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t003__ | Kijelentezés __után__: | Bármilyen URL-t beírva, a felhasználó kijelentkezés után csak a bejelentkezési oldalt fogja látni, mivel sikeresen kijelentkezett. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának. |

### Profilok szerkesztésének tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t004__ | A __profilom kezelése__ funkció: | A **"profilom kezelése"** gombra kattintva a felhasználó az adatainak (a jelszó kivételével) megjelenítésére és módosítására szolgáló oldalra lesz átirányítva. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel.
| __JN_t005__ |  __létező email cím és felhasználónév__ ellenőrzése: | Ha a felhasználó által megadott felhasználónév és/vagy e-mail cím már szerepel az adatbázisban, akkor a rendszer visszautasítja a módosítást, és értesítést küld a felhasználónak. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel.
| __JN_t006__ | __Jelszó hitelesítés__: | A módosított jelszónak el kell érnie legalább nyolc karakter hosszúságot, és tartalmaznia kell legalább egy számot, valamint legalább egy kis- és egy nagybetűt. Ha ezek a feltételek nem teljesülnek, a módosítás nem lesz elfogadva, és az adatok nem kerülnek módosításra. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel.
| __JN_t007__ | __Sikeres módosítás__: | Ha nem találunk semmilyen problémát, akkor a módosítás sikeresen el lesz mentve az adatbázisban, és az új adatok azonnal érvénybe lépnek. Ezenkívül itt is értesítés történik a sikeres módosításról. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel.

### Bejelentkezés és regisztráció tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t008__ | Bejelentkezés __mezők kitöltése nélkül__: | Az oldal jelzi, hogy nem kapott bemenetet. | Az elvárásoknak megfelelően zajlott le. | Szükséges javítás.
| __JN_t009__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  | Az oldal csak arra figyelmeztet, ha hibás a jelszó. | Javítani szükséges.
| __JN_t010__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenetekkel ellátva. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t011__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t012__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és be tud lépni az oldalra, megtekinteni a híreket| Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.

### Hírek megjelenítésének tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t013__ | Kijelentkezési __gomb-ra való kattintás__: | Az oldal sikeresen **kijelentkezteti a felhasználót egy üzenettel jelezve** és átnavigálja a bejelentkezési oldalra. | Az elvárásoknak megfelelően zajlott le. | Nem találtam hibára utaló jeleket.
| __JN_t014__ | Kijelentkezés __után__: | URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, mivel sikeresen kijelentkezett. | Az elvárásoknak megfelelően zajlott le. | Nem találtam hibára utaló jeleket.
| __JN_t015__ | Kijelentkezés után __újra bejelentkezés__: | **A felhasználó újra be tud lépni**, és újra eléri az oldal funkcióit. | Az elvárásoknak megfelelően zajlott le. | Nem találtam hibára utaló jeleket.
| __JN_t016__ | Kijelentkezés __után__: | URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, mivel sikeresen kijelentkezett. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.

### Hírek létrehozásának tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t017__ | Cikk __létrehozása__: | A bejelentkezett felhasználó bármilyen jogosultságtól függetlenül képes cikket létrehozni. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.|
| __JN_t018__ | __Üres inputtal__ való cikk létrehozás: | A rendszer kötelezi a felhasználót, hogy töltse ki az input mezőket, különben nem lehet cikket létrehozni. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t019__ | __Cikk mentése__ az adatbázisban: | Sikeres létrehozás esetén az adatbázisban elmentődik a felhasználó által létrehozott cikk. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.
| __JN_t020__ | __Sikeres létrehozás__ üzenet: | A felhasználó **értesül** a sikeres hír létrehozásáról. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.

### Navigálás tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Demonstráló azonosító | Szimulációs példa | Referenciaeredmény | Valós eredmény | Visszajelzések |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t021__ | __"Vissza" gombok__ kezelése: | A cikk módosításakor vagy a cikkek kezelésekor van lehetőség egy lépéssel visszalépni egy gomb segítségével, így például nem kötelező a módosítást véglegesíteni, ha meggondoljuk magunkat. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának.