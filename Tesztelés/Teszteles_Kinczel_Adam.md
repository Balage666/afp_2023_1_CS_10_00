### Tesztelés

**Tesztelő:** Kinczel Ádám Gergő

**Tesztelés dátuma:** 2023.10.12.

### Bejelentkezés / kijelentkezés teszt**

| Teszt kód | Teszteset | Elvárás | Eredmény | Konklúzió |
| --------- | --------- | ------- | -------- | --------- |
| __KA_01__ | Bejelentkezés |  |  |  |
| __KA_01__ | Regisztráció __adatok megadása nélkül__: | A rendszer felhívja a figyelmet, hogy **minden adat megadása kötelező.**  | Az oldal csak arra figyelmeztet, ha hibás a jelszó. | Javítás szükséges. |
| __KA_01__ |  __Sikeretelen regisztráció__: | Sikertelen regisztrációnál az **adatbázisba nem kerül fel semmi** | Ha nem töltöttem ki semmit, csak a jelszót akkor feltudtam vinni hibás adatokat is az adatbázisba. | Javítani szükséges. |
| __KA_01__ |  Bejelentkezés __hibás adatokkal__: | Hibás adatok megadása esetén a **a belépést a rendszer megtagadja.** a hibás adatok hibaüzenet megjelenítésével | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_01__ |  Regisztárciónál használt __jelszó erősségének ellenőrzése__: | 8 karakternél kisebb jelszó használatakor **a rendszer a regisztrációt megtagadja.** vagy ha nem tartalmaz nagybetűt illetve számot| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_01__ | Sikeres bejelentkezés | Sikeres bejelentkezést követően **a rendszer a főoldalra navigálja a felhasználót** és már képes lesz belépni az oldalra, megtekinteni a híreket| Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_01__ | Bejelentkezés nélküli belépés az oldalra | Ha nincs a felhasználó bejelentkezve, **a rendszer a bejelentkezési oldalra navigálja a felhasználót**, bármilyen URL-t beírva mindig a bejelentkezési oldal jelenik meg addig, amíg be nem jelentkezik. | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |
| __KA_01__ | Az admin és a sima user szétválasztása | A rendszer **megkülönbözteti a két jogosultágot** | Ugyanaz, mint az Elvárt eredmény szekcióban. | Nem találtam hibára utaló jeleket. |