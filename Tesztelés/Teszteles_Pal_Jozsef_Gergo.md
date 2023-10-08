### Bejelentkezés / regisztráció tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t001__ | Bejelentkezés __mezők kitöltése nélkül__: | Az oldal jelzi, hogy nem adtunk meg adatot. | Csak hibás adatokat ír ki. | Javítani szükséges. |
| __PJ_t002__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  | Az oldal csak arra figyelmeztet, ha hibás a jelszó. | Javítani szükséges. |
| __PJ_t003__ |  __Sikeretelen regisztráció__: | Sikertelen regisztrációnál az **adatbázisba nem kerül fel semmi** | Ha nem töltöttem ki semmit, csak a jelszót akkor feltudtam vinni hibás adatokat is az adatbázisba. | Javítani szükséges. |
| __PJ_t004__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenet megjelenítésével | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t005__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t006__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és már képes lesz belépni az oldalra, megtekinteni a híreket| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t007__ | Bejelentkezés nélküli belépés az oldalra | Ha nincs a felhasználó bejelentkezve, **a rendszer a bejelentkezési oldalra navigálja a felhasználót**, bármilyen URL-t beírva mindig a bejelentkezési oldal jelenik meg addig, amíg be nem jelentkezik. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t008__ | Az admin és a sima user szétválasztása | A rendszer **megkülönbözteti a két jogosultágot** | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |

### Kijelentkezés tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t009__ | Kijelentezési __gomb-ra való kattintás__: | Az oldal sikeresen **kijelentkezteti a felhasználót egy üzenettel jelezve** azt és átnavigálja a bejelentkezési oldalra. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t010__ | Kijelentezés __után__: | Bármilyen URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t011__ | Kijelentezés után __újra bejelentkezés__: | **A felhasználó újra be tud lépni**, és újra eléri az oldal funkcióit. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t012__ | Kijelentezés __után__: | Bármilyen URL-t beírva **a felhasználónak csak a bejelentkezési oldal jelenik meg**, hiszen sikeresen kijelentkezett. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |

### Hírek megjelenítésének tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t013__ | A megfelelő hírkategóriára való kattintás esetén __a megfelelő hírek megjelenítése__: | A főoldalon a kategóriára kattintáskor**a megfelelő kategóriába tartozó hírek jelennek meg** egymás alatt. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t014__ | Az __összes hír__ megjelenítése: | A főoldalon az **"összes hír" pontra** kattintva megjelenik az összes hír kategóriától függetlenül.  | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 

### Hírek létrehozásának tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t016__ | Cikk __létrehozása__: | A bejelentkezett felhasználó jogosultságtól függetlenül tud cikket létrehozni. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __PJ_t017__ | __Üres inputtal__ való cikk létrehozás: | A rendszer kötelezi a felhasználót, hogy írjon adatok az input mezőkbe, ennek hiányában cikket létrehozni nem tud. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket.
| __PJ_t018__ | __Cikk mentése__ az adatbázisban: | Sikeres létrehozás esetén az adatbázisban elmentődik a felhasználó által létrehozott cikk. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t019__ | __Sikeres létrehozás__ üzenet: | A felhasználó **értesül** a sikeres hír létrehozásáról. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket.

### Hírek módosításának és törlésének tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t020__ | Törlés és módosítás __jogosultágtól függően__: | Csak az **admin felhasználói jogosultsággal rendelekző felhasználónak** jelenik meg a hírek kezelése gomb, URL-en kereszütül sem  | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t021__ | Cikk __törlése az oldalról és adatbázisból__: | A törlés gombra kattintva a cikk az adatbázisból és az oldalról is törlődik. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t022__ | Cikk __módosítása az oldalon és az adatbázisban is__: | Megfelelő módosítás után a cikk nem csak az oldalon, de az adatbázisban is módosul. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t023__ | Üzenetek megjelenítése a változásokról: | A törléssel és a módosítással kapcsolatos üzenetek jelezve vannak a felhasználó számára. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 
| __PJ_t024__ | Módosítás hibakezelése: | Kötelező kitölteni a módosítandó input mezőket, különben nem hagyja a rendszer a felhasználónak a módosítást. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 

### Navigálás tesztelése:

**Tesztelő:** Pál József Gergő

**Tesztelés dátuma:** 2023.10.08

| Teszteset azonosító | Teszteset | Elvárt eredmény | Tényleges eredmény | Megjegyzés |
| ------------------- | --------- | --------------- | ------------------ | ---------- |
| __PJ_t025__ | __"Vissza" gombok__ kezelése: | A cikk módosításánál, vagy a cikkek kezelésénél vissza tudunk lépni eggyel egy gomb segítségével, ezáltal pl. nem kötelező a mődosítás, ha meggondoljuk magunkat. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. 