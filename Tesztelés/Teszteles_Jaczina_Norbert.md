### Bejelentkezés / regisztráció tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Észrevételek |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t001__ | Bejelentkezés __mezők kitöltése nélkül__: | Az oldal jelzi, hogy nem kapott adatot. | Az elvártak szerint megegyezik. | Szükséges javítás.
| __JN_t002__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  | Az oldal csak arra figyelmeztet, ha hibás a jelszó. | Javítani szükséges.
| __JN_t003__ |  __Sikeretelen regisztráció__: | Sikertelen regisztrációnál az **adatbázisba nem kerül fel semmi** | Ha nem töltöttem ki semmit, csak a jelszót akkor feltudtam vinni hibás adatokat is az adatbázisba. | Javítani szükséges.
| __JN_t004__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenet megjelenítésével | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t005__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t006__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és már képes lesz belépni az oldalra, megtekinteni a híreket| Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t007__ | Bejelentkezés nélküli belépés az oldalra | Ha nincs a felhasználó bejelentkezve, **a rendszer a bejelentkezési oldalra navigálja a felhasználót**, bármilyen URL-t beírva mindig a bejelentkezési oldal jelenik meg addig, amíg be nem jelentkezik. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.

### Kijelentkezés tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t008__ | Kijelentezési __gomb-ra való kattintás__: | Az oldal sikeresen **kijelentkezteti a felhasználót egy üzenettel jelezve** azt és átnavigálja a bejelentkezési oldalra. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t009__ | Kijelentezés __után__: | Bármilyen URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t010__ | Kijelentezés után __újra bejelentkezés__: | **A felhasználó újra be tud lépni**, és újra eléri az oldal funkcióit. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t011__ | Kijelentezés __után__: | Bármilyen URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. |

### Hírek megjelenítésének tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t012__ | A megfelelő hírkategóriára

 való kattintás esetén __a megfelelő hírek megjelenítése__: | A főoldalon a kategóriára kattintáskor**a megfelelő kategóriába tartozó hírek jelennek meg** egymás alatt. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 
| __JN_t013__ | Az __összes hír__ megjelenítése: | A főoldalon az **"összes hír" pontra** kattintva megjelenik az összes hír kategóriától függetlenül.  | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 

### Hírek létrehozásának tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t014__ | Cikk __létrehozása__: | A bejelentkezett felhasználó jogosultságtól függetlenül tud cikket létrehozni. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. |
| __JN_t015__ | __Üres inputtal__ való cikk létrehozás: | A rendszer kötelezi a felhasználót, hogy írjon adatok az input mezőkbe, ennek hiányában cikket létrehozni nem tud. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.
| __JN_t016__ | __Cikk mentése__ az adatbázisban: | Sikeres létrehozás esetén az adatbázisban elmentődik a felhasználó által létrehozott cikk. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 
| __JN_t017__ | __Sikeres létrehozás__ üzenet: | A felhasználó **értesül** a sikeres hír létrehozásáról. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket.

### Hírek módosításának és törlésének tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t018__ | Törlés és módosítás __jogosultágtól függően__: | Csak az **admin felhasználói jogosultsággal rendelekző felhasználónak** jelenik meg a hírek kezelése gomb, URL-en kereszütül sem  | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 
| __JN_t019__ | Cikk __törlése az oldalról és adatbázisból__: | A törlés gombra kattintva a cikk az adatbázisból és az oldalról is törlődik. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 
| __JN_t020__ | Módosítás hibakezelése: | Kötelező kitölteni a módosítandó input mezőket, különben nem hagyja a rendszer a felhasználónak a módosítást. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 

### Navigálás tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t021__ | __"Vissza" gombok__ kezelése: | A cikk módosításánál, vagy a cikkek kezelésénél vissza tudunk lépni eggyel egy gomb segítségével, ezáltal pl. nem kötelező a mődosítás, ha meggondoljuk magunkat. | Az elvártak szerint megegyezik. | Nem találtam hibára utaló jeleket. 

### Profilok szerkesztésének tesztelése:

**Tesztelő:** Jaczina Norbert

**Tesztelés dátuma:** 2023.10.16

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Észrevételek |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __JN_t022__ | A __profilom kezelése__ funkció: | A **"profilom kezelése"** gombra kattintva a felhasználó átirányítódik egy oldalra, ahol megjelennek az adatai (a jelszó kivételével) és lehetősége lesz a módosításra. | Az elvártak szerint megegyezik. | Nincs észrevétel.
| __JN_t023__ | Már __létező email cím és felhasználónév__ ellenőrzése: | Amennyiben a felhasználó által megadott felhasználónév és/vagy email már létezik az adatbázisban, akkor a módosítást a rendszer megtagadja, jelezve a felhasználónak. | Az elvártak szerint megegyezik. | Nincs észrevétel.
| __JN_t024__ | __Jelszó validálás__: | A módosított jelszónak is legalább 8 karakternek kell lennie, tartalmazni kell legalább egy számot, illetve kis- és nagybetűt. Amennyiben ez nem megfelelő szintén nem módosulnak az adatok. | Az elvártak szerint megegyezik. | Nincs észrevétel.
| __JN_t025__ | __Sikeres módosítás__: | Amennyiben semmi problémába nem ütköztünk, akkor a módosítás sikeresen mentésre kerül az adatbázisban és már az új adatok lesznek érvényben, jelezve itt is a sikeres módosítást. | Az elvártak szerint megegyezik. | Nincs észrevétel.