# Funkcionális Specifikáció 
## 1.) Áttekintés
- Az oldal egy START gombra kattintva számokat jelenít meg, amit a felhasználónak az oldalon megjelenő számbillentyűkre kattintva időre bekell ütnie.
- A felhasználó az aktuális kép alatt látja, hogy hány kép van még hátra.
- 20 random kép megjelenítése után a felhasználó megkapja az eredményét és az átlag képenkénti sebességét, eredményét elmentheti, vagy újrakezdheti.
- Ha szeretné hogy az eredménye megjelenjen a ranksoron ahoz regisztrálnia kell, kérünk tőle egy e-mailt, felhasználónevet és jelszót.
- Hogyha a felhasználó bevan jelentkezve eredményének elmentése autómatikusan megtörténik.
- A felhasználó próbálkozásait, e-mail-jét, felhasználónevét és jelszavát adatbázisba biztonságosan mentjük el.
- A felhasználó kérheti az adatai és profilja eltávolítását, megtekintését a PROFIL oldalján.
- A ranksoron a felhasználóneve mellett megjelenik, hogy hány számot talált el és az átlagidő. 
## 2.) Jelenlegi helyzet
A cél egy olyan dinamikus weboldal készítése, melyen a felhasználónak rákell böknie, hogy mely számot látja kiírva a képernyőn. Ez alapján az oldal pontozza a teljesítményét, hányat sikerült eltalálnia az illetőnek, adatbázisba elmenti, a teszt végén kiírja azt. A számok egy "adatbázisból" lesznek kivágva, mindegyikük kézzel írt. A pontozás a teljesített idő alapján is szabályozva lesz.
## 3.) Követelménylista
  1. Reszponzív dizájn
  2. Felhasználói fiók létrehozása
  3. Felhasználói adatok biztonsága
  4. Felhasználói adatok törölhetősége
  5. Azonnal frissülő ranksor
  6. Számbillentyűzet létrehozása
  7. Adatok adatbázisba rendezése
## 4.) Követelmények

### Funkcionális követelmények:
- **Következő Tesztre való lépés:** Ha a felhasználó lenyom egy gombot, egyből jön a következő "feladat"
- **Kitöltés:** A tesztre válasz adási lehetőség.
- **Szám Kiválasztása:** Megadott kép szerinti szám (numpadon) kiválasztása.
### Nem Funkcionális követelmények:
- **Látványos** és egyedülálló dizájn
- **Egyszerű**, gyorsan értelmezhető, letisztult felhasználói felület

## 5.) Jelenlegi üzleti folyamatok modellje
Üzleti szereplők: 	
-	felhasználó

Üzleti munkatárs: 	
-	karbantartó

Üzleti entitások: 		
-	email cím
-	leaderboard

Üzleti folyamatok: 	
-	Új felhasználó felvétele a rendszerbe: A felhasználó email címe megadásával és egy saját felhasználói név megadásával regisztrálni tud az oldalra aminek az adatait titkosítva egy adatbázisban menti el a rendszer
-	Program menete: A felhasználó belépés után a Start gombra kattintva 20 random képet kap sorban egymás után amikről elkell dönteni-e, hogy 1-től 9-ig melyik számjegyet ábrázolja.
-	Értékelés: Minden egyes jó válasz adásért pontot kap a felhasználó, legvégén pedig megtudja nézni, hogy a ranglistán hanyadik helyen áll.

## 6.) Igényelt üzleti folyamatok
1. A felhasználó regisztrációs lehetősége.
2. A "Start" gombra kattintva elkezdődik a program.
3. 20 random képről eldönteni, hogy melyik számjegyet ábrázolja, egy számbillenytűzet segítségével.
4. Az eredményt pont, és átlagolt idő szerint rangsorba helyezi.
5. Ha a felhasználó regisztrált be kell jelentkeznie, hogy a rangsorba be kerülhessen. 

## 7.) Használati esetek
Az alábbi rendszert leginkább egy NEM VAGYOK ROBOT teszt kitöltése esetén lehet alkalmazni, bár igaz, hogy egy pontrendszer is be van építve így akár játékként is felfogható ami további lehetőségeket nyit meg a piac számára és további fejlesztési lehetőségek és kérdések merülhetnek fel.
## 8.) Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
Minden felhasználó külön van tárolva, így mindenki a saját reális pontjait látja. Egyszerre több felhasználó is képes "játszani" az oldalon és pontokat gyűjteni.
## 9.) Képernyőtervek
Úgy képzeljük el ezt a weboldalt, hogy egy egyszerű idősebb koró felhasználó is el tudjon igazodni az oldalon úgy mint akár egy már ebbe a modern világba beleszületett fiatal aki ebben nő fel, hogy hogyan is kell egy számítógépet bekapcsolni.
## 10.) Forgatókönyv
Első sorban, ha egy új felhasználó látogat el a weboldalra regisztrálnia kell annak érdekében, hogy bármit is tudjon csinálni a felületen. A sikeres regisztráció után az előjövő bejelntkezési ablakban be bírnak jelentkezni amiután egyből a főoldalon lesznek. A fő oldalon a felhasználónak rákell böknie, hogy mely számot látja kiírva a képernyőn. Ez alapján az oldal pontozza a teljesítményét, hányat sikerült eltalálnia az illetőnek, adatbázisba elmenti, a teszt végén kiírja azt. A számok egy "adatbázisból" lesznek kivágva, mindegyikük kézzel írt. A pontozás a teljesített idő alapján is szabályozva lesz.
## 11.) Funkció-követelmény megfeleltetés
### Funkciókövetelmények megfeleltetés:
- **Felhasználói fiókok kezelése:** Bejelentkezés, felhasználói adatok módosítása, rangsor felállítása
- **Platformfüggetlen működés:** Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.
- **Bővíthetőség:** A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.

### Nem Funkció-követelmény megfeleltetés:
- Egyszerű, pontosan értelmezhető, letisztult felhasználóbarát felület
- Egyszerűen használható kezelőfelület
- Felhasználók adatainak a biztonága
## 12.) Fogalomszótár
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet.
- **MNIST database (Modified National Institute of Standards and Technology database)** - egy nagyméretű, kézzel írt számjegyek adatbázisa, amelyet általában különféle képfeldolgozó rendszerek betanítására használnak. Az adatbázist széles körben használják képzésre és tesztelésre is a gépi tanulás területén.
- **Adatbázis** - Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.

