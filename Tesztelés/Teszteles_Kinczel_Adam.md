### Tesztelés

**Tesztelő:** Kinczel Ádám Gergő

**Tesztelés dátuma:** 2023.10.12.

### Bejelentkezés / kijelentkezés tesztelése**

| Teszt kód | Teszteset | Elvárás | Eredmény | Konklúzió |
| --------- | --------- | ------- | -------- | --------- |
| __KA_01__ | Bejelentkezés __kitöltés nélkül__ | Az oldal figyelmeztet, hogy nem töltöttük ki a mezőket | A figyelmeztetés csak a hibás adatokat írja ki. | Javítás szügséges |
| __KA_02__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  | Az oldal csak arra figyelmeztet, hogy a jelszónak legalább 8 karakternek kell lennie. | Javítás szükséges. |
| __KA_03__ |  __Sikeretelen regisztráció__: | Sikertelen regisztrációnál az **adatbázisba nem kerül fel semmi** | Ha nem töltöttem ki semmit, csak a jelszót akkor feltudtam vinni hibás adatokat is az adatbázisba. | Javítani szükséges. |
| __KA_04__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenet megjelenítésével | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_05__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_06__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és már képes lesz belépni az oldalra, megtekinteni a híreket| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_07__ | Bejelentkezés nélküli belépés az oldalra | Ha nincs a felhasználó bejelentkezve, **a rendszer a bejelentkezési oldalra navigálja a felhasználót**, bármilyen URL-t beírva mindig a bejelentkezési oldal jelenik meg addig, amíg be nem jelentkezik. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_08__ | Az admin és a sima user szétválasztása | A rendszer **megkülönbözteti a két jogosultágot** | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |

### Profilok szerkesztésének tesztelése:

**Tesztelő:** Kinczel Ádám Gergő

**Tesztelés dátuma:** 2023.10.25.

| Teszt kód | Teszteset | Elvárás | Eredmény | Konklúzió |
| --------- | --------- | ------- | -------- | --------- |
| __KA_09__ | A __profilom kezelése__ funkció: | A **"profilom kezelése"** gombra kattintva a felhasználó az adatainak (a jelszó kivételével) megjelenítésére és módosítására szolgáló oldalra lesz átirányítva. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel. |
| __KA_10__ |  __létező email cím és felhasználónév__ ellenőrzése: | Ha a felhasználó által megadott felhasználónév és/vagy e-mail cím már szerepel az adatbázisban, akkor a rendszer visszautasítja a módosítást, és értesítést küld a felhasználónak. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel. |
| __KA_11__ | __Jelszó hitelesítés__: | A módosított jelszónak el kell érnie legalább nyolc karakter hosszúságot, és tartalmaznia kell legalább egy számot, valamint legalább egy kis- és egy nagybetűt. Ha ezek a feltételek nem teljesülnek, a módosítás nem lesz elfogadva, és az adatok nem kerülnek módosításra. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel. |
| __KA_12__ | __Sikeres módosítás__: | Ha nem találunk semmilyen problémát, akkor a módosítás sikeresen el lesz mentve az adatbázisban, és az új adatok azonnal érvénybe lépnek. Ezenkívül itt is értesítés történik a sikeres módosításról. | Az elvárásoknak megfelelően zajlott le. | Nincs észrevétel. |

### Navigálás tesztelése:

**Tesztelő:** Kinczel Ádám Gergő

**Tesztelés dátuma:** 2023.10.25.

| Teszt kód | Teszteset | Elvárás | Eredmény | Konklúzió |
| --------- | --------- | ------- | -------- | --------- |
| __KA_13__ | __"Vissza" gombok__ kezelése: | A cikk módosításakor vagy a cikkek kezelésekor van lehetőség egy lépéssel visszalépni egy gomb segítségével, így például nem kötelező a módosítást véglegesíteni, ha meggondoljuk magunkat. | Az elvárásoknak megfelelően zajlott le. | Nem észleltem olyan jeleket, amelyek hibára utalnának. |

### Hírek megjelenítése, létrehozása, módosításának és törlésének tesztelése:

**Tesztelő:** Kinczel Ádám Gergő

**Tesztelés dátuma:** 2023.10.25.

| Teszt kód | Teszteset | Elvárás | Eredmény | Konklúzió |
| --------- | --------- | ------- | -------- | --------- |
| __KA_14__ |  __A megfelelő hírek megjelenítése__: | A főoldalon a  különböző kategóriákra való  kattintáskor**a megfelelő kategóriába tartozó hírek jelennek meg**  | Elvárásoknak megfelel | Nincs hiba |
| __KA_15__ | Az __összes hír__ megjelenítése: | Az **"összes hír" pontra** klikellve megjelenik kategórától függeltlenül az összes hír  | Elvárásoknak megfelel | Nincs hiba |
| __KA_16__ | Cikk __létrehozása__: | A bejelentkezett felhasználó jogosultságtól függetlenül tud cikket létrehozni. | Nem felel meg az elvárásoknak| Javíás szükséges |
| __KA_17__ | __Üres inputtal__ való cikk létrehozás: | A rendszer kötelezi a felhasználót, hogy írjon adatok az input mezőkbe, ennek hiányában cikket létrehozni nem tud. | Elvárásnak megfelel | Nincs hiba |
| __KA_18__ | __Cikk mentése__: | Létrehozás után eltárolódik a cikkünk az adatbázisban. | Elvárásnak megfelel | Nincs hiba. |
| __KA_19__ | Törlés és módosítás __jogosultágtól függően__: | Csak **admin felhasználói jogosultsággal rendelekző felhasználónak** van módjuk törléshez és módosításhoz | Elvárásnak megfelel | Nincs hiba |
| __KA_20__ | Cikk __törlése az oldalról és adatbázisból__: | Törlés esetén adatbázisból és az oldalról is törlődik a hír | Elvárásoknak megfelel| Nincs hiba |
| __KA_21__ | Üzenetek megjelenítése a változásokról: | A törléssel és a módosítással kapcsolatos üzenetek jelezve vannak a felhasználó számára. | Elvárásoknak megfelel |Nincs hiba. |
| __KA_22__ | Cikk __módosítása az oldalon és az adatbázisban is__: | Módisításkor adatbázis részen és kliens részen is módosulnak az adatok. | Elvárásoknak megfelel | Nincs hiba |
| __KA_23__ | Módosítás hibakezelése: | Kötelező kitölteni a módosítandó input mezőket, különben nem hagyja a rendszer a felhasználónak a módosítást. | Elvárásoknak megfelel | Nincs hiba |