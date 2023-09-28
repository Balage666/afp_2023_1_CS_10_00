# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása
A jelenlegi hírkeresési folyamatok fragmentáltak, sok forrás közül kell válogatni, melyek közül sok nem tekinthető megbízhatónak vagy részletesnek. A nagy médiafelületek gyakran elfogultak, és a felhasználói interakció nem mindig megfelelően moderált. A közösségi médián keresztüli informálódás nem kínál mély elemzéseket, és az algoritmusok befolyásolják a látható híreket. A felhasználók egy megbízható, központosított és interaktív hírportált keresnek, amely kiváló felhasználói élményt nyújt.
## 2. Vágyállomrendszer leírása
Egy web alapú alkalmazás létrehozása, ahol a felhasználók képesek híreket böngészni, olvasni és azokhoz kapcsolódó kommenteket megtekinteni. Az alkalmazás célja, hogy a látogatók gyorsan és egyszerűen tájékozódhassanak a legfrissebb eseményekről.

Az alkalmazás adminisztrátorai képesek a hírek publikálására és a kommentek moderálására. Amennyiben egy komment vulgáris kifejezést, hamis információt vagy egyéb nem megengedett tartalmat tartalmaz, az adminisztrátoroknak lehetőségük van a komment törlésére, de annak szerkesztésére nincs lehetőség.

A hírek és kommentek publikusan megtekinthetők minden látogató számára. Minden hírnek megjelenik a címe, egy rövid leírása, a publikálás dátuma és a hírt író szerző neve. A hírek alatt pedig helyet kapnak a hozzájuk tartozó kommentek, amelyek a közösségi interakciót és véleménynyilvánítást támogatják az adott hírekkel kapcsolatban.
## 3. Jelenlegi üzleti folyamatok modellje
3.1. Hírek Kezelése
Felhasználók böngészhetnek és keresgélhetnek hírekhez.
Szerkesztők és riporterek gyűjtenek, szerkesztenek és közzétesznek híreket.
3.2. Felhasználói Interakció és Moderáció
Felhasználók megoszthatják véleményüket a hírek alatt.
Moderátorok ellenőrzik és kezelik a felhasználói hozzászólásokat.
3.3. Mélyebb Elemzések és Cikkek
Elemzők és írók mélyebb elemzéseket és cikkeket készítenek.
3.4. Felhasználói Felület és Regisztráció
Felhasználók regisztrálhatnak és bejelentkezhetnek.
Felhasználói felület lehetővé teszi a hírek böngészését és a vélemények megosztását.
3.5. Tartalomkezelés és Adatbázis
Hatékony tartalomkezelési rendszerrel és adatbázissal rendelkezik az új hírek és cikkek kezeléséhez.
3.6. Biztonság és Hibakezelés
Megfelelő biztonsági intézkedéseket alkalmaz az adatok védelme érdekében.
Hibakezelési mechanizmusokat tartalmaz a problémák kezeléséhez.
3.7. Teljesítmény és Skálázhatóság
Jó teljesítményt nyújt, és skálázható a növekvő felhasználói forgalomhoz.
3.8. Riportolás és Elemzés
Riportolási és elemzési eszközökkel rendelkezik az üzleti folyamatok figyelemmel kíséréséhez és értékeléséhez.

## 4. Igényelt üzleti folyamatok modellje
4.1. Hírek Gyűjtése és Közzététele
Funkció: Hírek gyűjtése és közzététele a felhasználók számára.
Felelős: Szerkesztők, Riporterek
A szerkesztők és riporterek híreket gyűjtenek különböző forrásokból, majd szerkesztik és formázzák azokat a weboldalon való közzététel céljából. Az alkalmazás automatikusan frissíti a híreket a különböző forrásokból.
4.2. Felhasználói Interakció és Közösség
Funkció: Felhasználói vélemények megosztása és moderáció.
Felelős: Felhasználók, Moderátorok
A felhasználók lehetőséget kapnak a hírek alatti hozzászólások írására és véleményük megosztására. A moderátorok felelősek a hozzászólások azonnali ellenőrzéséért és moderálásáért annak érdekében, hogy biztosítsák a tartalom minőségét és a szabályszegések elkerülését.
4.3. Mélyebb Elemzések és Cikkek
Funkció: Mélyebb elemzések és cikkek készítése.
Felelős: Elemzők, Írók
Az elemzők és írók speciális cikkeket és mélyebb elemzéseket készítenek a fontos témákról. Az alkalmazás kiemeli ezeket a cikkeket a főoldalon és a releváns kategóriákban.
4.4. Felhasználói Felület és Testreszabhatóság
Funkció: Testreszabható felhasználói felület és preferenciák.
Felelős: Felhasználók
A felhasználók testreszabhatják a felületet az egyéni preferenciáiknak megfelelően. Választhatnak kedvenc témákat, beállíthatnak értesítéseket és követhetnek szerzőket a személyre szabott felhasználói élmény érdekében.
4.5. Tartalom Minőségellenőrzés és Hibakezelés
Funkció: Tartalom minőségellenőrzés és hibakezelés.
Felelős: Moderátorok, Adminisztrátorok
Moderátorok folyamatosan ellenőrzik a tartalmat a szabályoknak megfelelően. Hibák esetén az adminisztrátorok gyorsan beavatkoznak és javítják azokat.
4.6. Adatgyűjtés és Felhasználói Visszajelzés
Funkció: Adatgyűjtés és felhasználói visszajelzés elemzése.
Felelős: Felhasználók, Elemzők
Az alkalmazás gyűjti az adatokat a felhasználók viselkedéséről és visszajelzéseiről. Az elemzők használják ezeket az adatokat a felület és a tartalom fejlesztéséhez.
4.7. Személyre Szabott Tartalom Ajánlások
Funkció: Személyre szabott tartalomajánlások.
Felelős: Algoritmusok
Az alkalmazás személyre szabott tartalomajánlásokat nyújt a felhasználóknak az alapján, hogy milyen híreket olvastak korábban és milyen témák érdeklik őket.

## 5. Követelménylista

| Id | Modul | Név | Leírás |
| K1 | Felület | Comment | A felhasználók megtudják osztani gondoltaikat egy cikk vagy poszt alatt.|
| K2 | Jogosultság| Bejelentkezési felület|A felhasználó az email címe és a jelszava segítségével bejelentkezhet. Az adatbázisban eltárolt jelszóval és felhasználónével ellentétben rossz adatérkezik a rendszer tájékoztat a sikertelen bejelntkezésről. |
| K3 | Jogosultság | Regisztráció |A felhasználó a felhasználói nevének, email címének és jelszavának megadásával regisztrálja magát.Ha hibás adatokat visszbe arról a rendszer tajákoztatást ad egy hibaüzenet képében.|
| K4 | Jogosultság| Jogosultsági szintek| -Admin:Rendszerhozzáférés, hírek feltöltése, felhasználók / szerepkörök módósítása. -Felhasználó: Cikkek böngészése kommentelés.|
| K5 | Modifikáció | Jelszó modosítás | A felhasználó módosítani tudja saját jelszavát.|

## 6. Használati esetek
-Felhasználó:
1.Hírfolyam böngészése: A felhasználó bejelentkezik egy közösségi média platformra, és böngészi a hírfolyamot, lájkolja vagy megosztja a bejegyzéseket, vagy kommenteket ír.
2.Regisztráció és bejelentkezés: Egy felhasználó regisztrál egy weboldalon vagy alkalmazásban, majd bejelentkezik a fiókjába, hogy hozzáférjen a személyes adataihoz és funkciókhoz.
3.Profilkezelés: A felhasználó szerkeszti a saját profilját, hozzáadja vagy módosítja a profilképét, frissíti az elérhetőségi adatait, vagy módosítja a jelszavát.

-ADMIN: 
1.Felhasználók kezelése: Az adminisztrátorok felügyelik és kezelik a felhasználói fiókokat, beleértve az új fiókok létrehozását, meglévők frissítését vagy deaktiválását.
2.Hibaelhárítás és támogatás: Az adminisztrátorok segítenek a felhasználóknak, ha technikai problémáik vagy kérdéseik vannak, és hibaelhárítást végeznek, hogy megoldják a rendszerrel kapcsolatos problémákat.
3.Biztonsági intézkedések: Az adminisztrátorok felelnek a rendszerbiztonságért, beleértve a felhasználók adatainak védelmét és az esetleges kiberbiztonsági fenyegetések elleni védelmet.
4.Frissítések és karbantartás: Az adminisztrátorok frissítik az alkalmazást vagy a rendszert, hogy biztosítsák a funkciók és a biztonság folyamatos fejlesztését, valamint karbantartási tevékenységeket végeznek.
5.Felhasználói jogosultságok kezelése: Az adminisztrátorok beállítják és ellenőrzik a felhasználói jogosultságokat, hogy biztosítsák, hogy minden felhasználó csak a megfelelő adatokhoz és funkciókhoz férhessen hozzá.
6.Riportok és analitika: Az adminisztrátorok különböző riportokat és analitikai adatokat generálnak a rendszer teljesítményéről, amelyek segítenek az üzleti döntések meghozatalában.
7.Adatbázis-kezelés: Az adminisztrátorok feladata lehet az adatbázisok kezelése, tartalmuk biztonságának és integritásának fenntartása.
8.Tartalomkezelés: Az adminisztrátorok felelősek lehetnek a tartalom feltöltéséért, szerkesztéséért és eltávolításáért, például blogbejegyzések, cikkek vagy képek esetén.

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| K4 | ... | ... |

## 11 Fogalomszótár