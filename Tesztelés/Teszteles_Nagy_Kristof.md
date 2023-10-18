### Bejelentkezés / regisztráció tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t001__ | Bejelentkezés __mezők kitöltése nélkül__: | Az oldal jelzi, hogy nem adtunk nincs megadva semmi. | Csak hibás adatokat ír ki. | Javítani szükséges. |
| __PJ_t002__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  |Csak jelszó esetén van figyelmeztetés esetleges hibákra,illetve ha nem email formátumot adunk meg | Javítani szükséges. |
| __PJ_t003__ |  __Sikeretelen regisztráció__: | Sikertelen regisztrációnál az **adatbázisba nem kerül fel semmi** | Ha nem töltöttem ki az űrlap elemeket teljesen, csak egy elemet az ugyan úgy megjelenik az adatbázisban | Javítani szükséges. |
| __PJ_t004__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenet formájában tájékoztat a sikertelen bejelentkezésről| Megfelel az elvárásoknak | Nincs hiba. |
| __PJ_t005__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Elvárásoknak megfelel| Nincs hiba |
| __PJ_t006__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és már képes lesz belépni az oldalra, megtekinteni a híreket|Elvárásoknak megfelel. | Nincs hiba. |
| __PJ_t007__ | Bejelentkezés nélküli belépés az oldalra | Ha nincs a felhasználó bejelentkezve, **a rendszer a bejelentkezési oldalra navigálja a felhasználót**, bármilyen URL-t beírva mindig a bejelentkezési oldal jelenik meg addig, amíg be nem jelentkezik. | Elvárásoknak megfelel.| Nincs hiba|
| __PJ_t008__ | Az admin és a sima user szétválasztása | A rendszer **megkülönbözteti a két jogosultágot** | Az elvárásoknak megfelelő.| Nincs hiba. |

### Kijelentkezés tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t009__ | Kijelentezési __gomb-ra való kattintás__: | Az oldal sikeresen **kijelentkezteti a felhasználót egy üzenettel jelezve** ezt követően a felhasznaló a bejelentkező felületen találja magát | Elvárásoknak megfelel| Nincs hiba. |
| __PJ_t010__ | Kijelentezés __után__: |**a felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Elvárásoknak megfelel | Nincs hiba. |
| __PJ_t011__ | Kijelentezés után __újra bejelentkezés__: | **A felhasználó újra be tud lépni**, és újra eléri az oldal funkcióit. | Elvárásoknak megfelel. | Nincs hiba. |
| __PJ_t012__ | Kijelentezés __után__: |  **A felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Elvárásoknak megfelel | Nincs hiba. |

### Hírek megjelenítésének tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t013__ |  __A megfelelő hírek megjelenítése__: | A főoldalon a  különböző kategóriákra való  kattintáskor**a megfelelő kategóriába tartozó hírek jelennek meg**  | Elvárásoknak megfelel | Nincs hiba 
| __PJ_t014__ | Az __összes hír__ megjelenítése: | Az **"összes hír" pontra** klikellve megjelenik kategórától függeltlenül az összes hír  | Elvárásoknak megfelel | Nincs hiba 

### Hírek létrehozásának tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t016__ | Cikk __létrehozása__: | A bejelentkezett felhasználó jogosultságtól függetlenül tud cikket létrehozni. | Nem felel meg az elvárásoknak| Javíás szükséges|
| __PJ_t017__ | __Üres inputtal__ való cikk létrehozás: | A rendszer kötelezi a felhasználót, hogy írjon adatok az input mezőkbe, ennek hiányában cikket létrehozni nem tud. | Elvárásnak megfelel | Nincs hiba
| __PJ_t018__ | __Cikk mentése__: | Létrehozás után eltárolódik a cikkünk az adatbázisban. | Elvárásnak megfelel | Nincs hiba.

### Hírek módosításának és törlésének tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t019__ | Törlés és módosítás __jogosultágtól függően__: | Csak **admin felhasználói jogosultsággal rendelekző felhasználónak** van módjuk törléshez és módosításhoz | Elvárásnak megfelel | Nincs hiba 
| __PJ_t020__ | Cikk __törlése az oldalról és adatbázisból__: | Törlés esetén adatbázisból és az oldalról is törlődik a hír | Elvárásoknak megfelel| Nincs hiba
| __PJ_t021__ | Cikk __módosítása az oldalon és az adatbázisban is__: | Módisításkor adatbázis részen és kliens részen is módosulnak az adatok. | Elvárásoknak megfelel | Nincs hiba
| __PJ_t022__ | Üzenetek megjelenítése a változásokról: | A törléssel és a módosítással kapcsolatos üzenetek jelezve vannak a felhasználó számára. | Elvárásoknak megfelel |Nincs hiba.
| __PJ_t023__ | Módosítás hibakezelése: | Kötelező kitölteni a módosítandó input mezőket, különben nem hagyja a rendszer a felhasználónak a módosítást. | Elvárásoknak megfelel | Nincs hiba

### Navigálás tesztelése:

**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t024__ | __"Vissza" gombok__ kezelése: | Az oldalak közötti vissza lépkedésben segít. | Elvárásnak megfelel | Nincs hiba

### Profilok szerkesztésének tesztelése:
**Tesztelő:** Nagy Kristóf

**Tesztelés dátuma:** 2023.10.18

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t026__ | A __profilom kezelése__ : | A **"profilom kezelése"** menü pontra kattintva a felhasználót átlesz irányítva  egy oldalra, ahol megjelennek az adatai, jelszó kívélt képez, itt lehetősége nyílik a felhasználónak módosítani adatait.| Elvárásnak megfelel | Nincs hiba
| __PJ_t027__ | __Létező email cím és felhasználónév__ ellenőrzése: |Ha már létezik ilyen adatokal regisztrált  felhasználó a rendszer értesít erről. | Elvárásoknak megfelel | Nincs hiba.
| __PJ_t028__ | __Jelszó validálás__: | Módosításkor is hasonló szabályok vannak érvényben mint regisztrációkor. | Elvárásoknak megfelel|Nincs hiba
| __PJ_t029__ | __Üres input mezőkkel__ való adatmódosítás: | Nem lehet üresen hagyni egy mezőt sem. |Elvárásoknak megfelel |Nincs hiba.
| __PJ_t030__ | __Sikeres módosítás__: | Ha sikeres az adatváltoztatás átírodnak az adatbázisban, ezután pedig bejelntkezéskor ezek lesznek érvényben | Elvárásoknak megfelel | Nincs hiba.
