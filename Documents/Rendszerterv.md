# Rendszerterv

## 1. A rendszer célja
A rendszer célja, hogy a felhasználó egy tesztet tudjon teljesíteni melyből kiderül, hogy hány kézzel írott számot tud felismerni egy adatbázisból. A felhasználó a teszt végén értesítést kap eredményéről. Ahhoz, hogy a teszt pontos legyen, és a felhasználót ne akadályozza a felület, egy egyszerű, gyorsan értelmezhető letisztult felhasználói felületet kap az oldal. A gyors működés miatt a rendszer fejlesztése nagyrészt PHP-ben fog alapulni.

## 2. Projektterv
### 2.1 Projektszerepkörök, felelősségek
- Front-End Developer (HTML, CSS): Molnár Bálint
- Back-End Developer (PHP): Makai Balázs, Linksch Balázs, Galvács István
- Database Manager (SQL): Zombori Bálint
### 2.2 Projektmunkások és felelősségeik
- Design elkészítése: Molnár Bálint
- Adatbázis létrehozása: Zombori Bálint
- Belépés-Regisztráció: Linksch Balázs
- Ranksor létrehozása: Galvács István
- Profil oldal elkészítése: Linksch Balázs
- MNIST logika elkészítése: Makai Balázs
- Számbillentyűzet implementálása: Galvács István
### 2.3 Közös feladatok
- Követelmény specifikáció megírása
- Funkcionális specifikáció megírása
- Rendszerterv elkészítése
### 2.4 Mérföldkövek
1. Adatbázis 
 - Kép és hozzátartozó értékek feltöltése és összekapcsolása
 - Felhasználói adatok tábla létrehozása
 - Felhasználó probálkozásai tábla létrehozása
2. Weboldal
 - Belépés/Regisztráció
 - MNIST implementálása
 - Ranksor
 - Profil oldal
3. Design
 - Reszponzív oldal létrehozása
 - Számbillentyűzet hozzáadása

## 3. Üzleti folyamatok modellje
### 3.1 Üzleti szereplők
A rendszert regisztrálás nélkül is lehet használni. Ekkor a látogató csak a kezdőlapot tudja elérni és az eredményei nem fognak be kerülni a rangosrba. Regisztráció és sikeres bejelentkezés után a felhasználó eredményei be fognak kerülni a rangsorba és az adatbázisban is el lesznek tárolva. Regisztrált üzleti szereplők a felhasználó, és az adminisztrátor.
### 3.2 Üzleti folyamatok
Bejelentkezés mindenki számára ugyanolyan lefutású: A ’Belépés’ menüpontra kattintva megjelenik a ’Felhasználónév’ és ’Jelszó’ beviteli űrlap. A mezők kitöltése után a ’Belépés’ gombra kattint a felhasználó. Ha az azonosítás sikeres, akkor a felhasználó sikeresen belépett. Ha nem sikerül az azonosítás, hibaüzenet jelenik meg.
#### Üzleti folyamatok adminisztrátorok számára:
- Adatbázishoz való hozzáférés
- Rangsor szerkesztése
- A weboldal kinézetének szerkesztése
#### Üzleti folyamatok felhasználók számára:
- Rangsor megtekintése: A felhasználó meg tudja nézni a rangsort, ahol láthatja, hogy mások és a felhasználó milyen eredményt ért el és hogy azok alapján hanyadik a rangsorban.
- Felhasználói profil: A felhasználó meg tudja nézni saját profilját. Itt a felhasználó szerkesztheti a személyes adatait és láthatja, milyen eredményeket ért el eddig.
### 3.3 Üzleti entitások
- Felhasználó
- Eredmény
## 4. Követelmények

### 4.1 Funkcionális követelmények
- **Felhasználók regisztrációja:** Felhasználók regisztrálása, az igényelt üzleti folyamatokban leírtak szerint.  
- **Rangsor:** Bejelentkezés során a rangsor kezelése az igényelt üzleti folyamatokban leírtak szerint.
- **Felhasználói fiókok kezelése:** Bejelentkezés, felhasználók rögzítése az adatbázisban.  
- **Platformfüggetlen, robusztus működés:** Szabványos, az iparágban régóta bevált, operációs rendszertől független technológiák használata: Php, Apache HTTP szerver, MySQL.   
- **Költséghatékony üzemeltetés:** A szabványos és elterjedt technológiák használata biztosítja. 
- **Bővíthetőség:** A kezelt adatok mennyiségének, valamint a felhasználók számának bővíthetősége és utólag újabb funkciók hozzáadásának lehetőségének biztosítása.

### 4.2 Nemfunkcionális követelmények
- **Látványos** és egyedülálló dizájn
- **Egyszerű**, gyorsan értelmezhető, letisztult, egyszerűen használható felhasználói felület

### 4.3 Törvényi előírások, szabványok
#### A személyes adatok kezelésére vonatkozó elvek
(1) A személyes adatok:

a) kezelését jogszerűen és tisztességesen, valamint az érintett számára átlátható módon kell végezni („jogszerűség, tisztességes eljárás és átláthatóság”);

b) gyűjtése csak meghatározott, egyértelmű és jogszerű célból történjen, és azokat ne kezeljék ezekkel a célokkal össze nem egyeztethető módon; a 89. cikk (1) bekezdésének megfelelően nem minősül az eredeti céllal össze nem egyeztet-hetőnek a közérdekű archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból történő további adatkezelés („célhoz kötöttség”);

c) az adatkezelés céljai szempontjából megfelelőek és relevánsak kell, hogy legyenek, és a szükségesre kell korlátozódniuk („adattakarékosság”);

d) pontosnak és szükség esetén naprakésznek kell lenniük; minden észszerű intézkedést meg kell tenni annak érdekében, hogy az adatkezelés céljai szempontjából pontatlan személyes adatokat haladéktalanul töröljék vagy helyesbítsék („pontosság”);

e) tárolásának olyan formában kell történnie, amely az érintettek azonosítását csak a személyes adatok kezelése céljainak eléréséhez szükséges ideig teszi lehetővé; a személyes adatok ennél hosszabb ideig történő tárolására csak akkor kerülhet sor, amennyiben a személyes adatok kezelésére a 89. cikk (1) bekezdésének megfelelően közérdekű archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból kerül majd sor, az e rendeletben az érintettek jogainak és szabadságainak védelme érdekében előírt megfelelő technikai és szervezési intézkedések végrehajtására is figyelemmel („korlátozott tárolhatóság”);

f) kezelését oly módon kell végezni, hogy megfelelő technikai vagy szervezési intézkedések alkalmazásával biztosítva legyen a személyes adatok megfelelő biztonsága, az adatok jogosulatlan vagy jogellenes kezelésével, véletlen elvesztésével, megsemmisítésével vagy károsodásával szembeni védelmet is ideértve („integritás és bizalmas jelleg”).

(2) Az adatkezelő felelős az (1) bekezdésnek való megfelelésért, továbbá képesnek kell lennie e megfelelés igazolására („elszámoltathatóság”).


#### Az adatkezelés jogszerűsége
(1) A személyes adatok kezelése kizárólag akkor és annyiban jogszerű, amennyiben legalább az alábbiak egyike teljesül:

a) az érintett hozzájárulását adta személyes adatainak egy vagy több konkrét célból történő kezeléséhez;

b) az adatkezelés olyan szerződés teljesítéséhez szükséges, amelyben az érintett az egyik fél, vagy az a szerződés megkötését megelőzően az érintett kérésére történő lépések megtételéhez szükséges;

c) az adatkezelés az adatkezelőre vonatkozó jogi kötelezettség teljesítéséhez szükséges;

d) az adatkezelés az érintett vagy egy másik természetes személy létfontosságú érdekeinek védelme miatt szükséges;

e) az adatkezelés közérdekű vagy az adatkezelőre ruházott közhatalmi jogosítvány gyakorlásának keretében végzett feladat végrehajtásához szükséges;

f) az adatkezelés az adatkezelő vagy egy harmadik fél jogos érdekeinek érvényesítéséhez szükséges, kivéve, ha ezen érdekekkel szemben elsőbbséget élveznek az érintett olyan érdekei vagy alapvető jogai és szabadságai, amelyek személyes adatok védelmét teszik szükségessé, különösen, ha az érintett gyermek.

Az első albekezdés f) pontja nem alkalmazható a közhatalmi szervek által feladataik ellátása során végzett adatkezelésre.

(2) Az e rendeletben foglalt, adatkezelésre vonatkozó szabályok alkalmazásának kiigazítása érdekében, a tagállamok az (1) bekezdés c) és e) pontjának való megfelelés céljából fenntarthatnak vagy bevezethetnek konkrétabb rendelkezéseket, amelyekben pontosabban meghatározzák az adatkezelésre vonatkozó konkrét követelményeket, és amelyekben további intézkedéseket tesznek az adatkezelés jogszerűségének és tisztességességének biztosítására, ideértve a IX. fejezetben meghatározott egyéb konkrét adatkezelési helyzeteket is.

(3) Az (1) bekezdés c) és e) pontja szerinti adatkezelés jogalapját a következőknek kell megállapítania:

a) az uniós jog, vagy

b) azon tagállami jog, amelynek hatálya alá az adatkezelő tartozik.

Az adatkezelés célját e jogalapra hivatkozással kell meghatározni, illetve az (1) bekezdés e) pontjában említett adatkezelés tekintetében annak szükségesnek kell lennie valamely közérdekű vagy az adatkezelőre ruházott közhatalmi jogosítvány gyakorlásának keretében végzett feladat végrehajtásához. Ez a jogalap tartalmazhat az e rendeletben foglalt szabályok alkalmazását kiigazító rendelkezéseket, ideértve az adatkezelő általi adatkezelés jogszerűségére irányadó általános feltételeket, az adatkezelés tárgyát képező adatok típusát, az érintetteket, azokat a jogalanyokat, amelyekkel a személyes adatok közölhetők, illetve az ilyen adatközlés céljait, az adatkezelés céljára vonatkozó korlátozásokat, az adattárolás időtartamát és az adatkezelési műveleteket, valamint egyéb adatkezelési eljárásokat, így a törvényes és tisztességes adatkezelés biztosításához szükséges intézkedéseket is, ideértve a IX. fejezetben meghatározott egyéb konkrét adatkezelési helyzetekre vonatkozóan. Az uniós vagy tagállami jognak közérdekű célt kell szolgálnia, és arányosnak kell lennie az elérni kívánt jogszerű céllal.

(4) Ha az adatgyűjtés céljától eltérő célból történő adatkezelés nem az érintett hozzájárulásán vagy valamely olyan uniós vagy tagállami jogon alapul, amely szükséges és arányos intézkedésnek minősül egy demokratikus társadalomban a 23. cikk (1) bekezdésében rögzített célok eléréséhez, annak megállapításához, hogy az eltérő célú adatkezelés összeegyeztethető-e azzal a céllal, amelyből a személyes adatokat eredetileg gyűjtötték, az adatkezelő többek között figyelembe veszi:

a) a személyes adatok gyűjtésének céljait és a tervezett további adatkezelés céljai közötti esetleges kapcsolatokat;

b) a személyes adatok gyűjtésének körülményeit, különös tekintettel az érintettek és az adatkezelő közötti kapcsolatokra;

c) a személyes adatok jellegét, különösen pedig azt, hogy a 9. cikk szerinti személyes adatok különleges kategóriáinak kezeléséről van-e szó, illetve, hogy büntetőjogi felelősség megállapítására és bűncselekményekre vonatkozó adatoknak a 10. cikk szerinti kezeléséről van-e szó;

d) azt, hogy az érintettekre nézve milyen esetleges következményekkel járna az adatok tervezett további kezelése;

e) megfelelő garanciák meglétét, ami jelenthet titkosítást vagy álnevesítést is.

#### Az adatkezelés biztonsága

(1)   Az adatkezelő és az adatfeldolgozó a tudomány és technológia állása és a megvalósítás költségei, továbbá az adatkezelés jellege, hatóköre, körülményei és céljai, valamint a természetes személyek jogaira és szabadságaira jelentett, változó valószínűségű és súlyosságú kockázat figyelembevételével megfelelő technikai és szervezési intézkedéseket hajt végre annak érdekében, hogy a kockázat mértékének megfelelő szintű adatbiztonságot garantálja, ideértve, többek között, adott esetben:

a)

a személyes adatok álnevesítését és titkosítását;

b)

a személyes adatok kezelésére használt rendszerek és szolgáltatások folyamatos bizalmas jellegének biztosítását, integritását, rendelkezésre állását és ellenálló képességét;

c)

fizikai vagy műszaki incidens esetén az arra való képességet, hogy a személyes adatokhoz való hozzáférést és az adatok rendelkezésre állását kellő időben vissza lehet állítani;

d)

az adatkezelés biztonságának garantálására hozott technikai és szervezési intézkedések hatékonyságának rendszeres tesztelésére, felmérésére és értékelésére szolgáló eljárást.

(2)   A biztonság megfelelő szintjének meghatározásakor kifejezetten figyelembe kell venni az adatkezelésből eredő olyan kockázatokat, amelyek különösen a továbbított, tárolt vagy más módon kezelt személyes adatok véletlen vagy jogellenes megsemmisítéséből, elvesztéséből, megváltoztatásából, jogosulatlan nyilvánosságra hozatalából vagy az azokhoz való jogosulatlan hozzáférésből erednek.

(3)   Az adatkezelő, illetve az adatfeldolgozó 40. cikk szerinti jóváhagyott magatartási kódexekhez vagy a 42. cikk szerinti jóváhagyott tanúsítási mechanizmushoz való csatlakozását felhasználhatja annak bizonyítása részeként, hogy az e cikk (1) bekezdésében meghatározott követelményeket teljesíti.

(4)   Az adatkezelő és az adatfeldolgozó intézkedéseket hoz annak biztosítására, hogy az adatkezelő vagy az adatfeldolgozó irányítása alatt eljáró, a személyes adatokhoz hozzáféréssel rendelkező természetes személyek kizárólag az adatkezelő utasításának megfelelően kezelhessék az említett adatokat, kivéve, ha az ettől való eltérésre uniós vagy tagállami jog kötelezi őket.

#### Hozzájárulás feltételei
(1) Ha az adatkezelés hozzájáruláson alapul, az adatkezelőnek képesnek kell lennie annak igazolására, hogy az érintett személyes adatainak kezeléséhez hozzájárult.

(2) Ha az érintett hozzájárulását olyan írásbeli nyilatkozat keretében adja meg, amely más ügyekre is vonatkozik, a hozzájárulás iránti kérelmet ezektől a más ügyektől egyértelműen megkülönböztethető módon kell előadni, érthető és könnyen hozzáférhető formában, világos és egyszerű nyelvezettel. Az érintett hozzájárulását tartalmazó ilyen nyilatkozat bármely olyan része, amely sérti e rendeletet, kötelező erővel nem bír.

(3) Az érintett jogosult arra, hogy hozzájárulását bármikor visszavonja. A hozzájárulás visszavonása nem érinti a hozzájáruláson alapuló, a visszavonás előtti adatkezelés jogszerűségét. A hozzájárulás megadása előtt az érintettet erről tájékoztatni kell. A hozzájárulás visszavonását ugyanolyan egyszerű módon kell lehetővé tenni, mint annak megadását.

(4) Annak megállapítása során, hogy a hozzájárulás önkéntes-e, a lehető legnagyobb mértékben figyelembe kell venni azt a tényt, egyebek mellett, hogy a szerződés teljesítésének - beleértve a szolgáltatások nyújtását is - feltételéül szabták-e az olyan személyes adatok kezeléséhez való hozzájárulást, amelyek nem szükségesek a szerződés teljesítéséhez.

## 5. Funkcionális terv
- **Felhasználó:** Képes lesz a teszt kitöltésére, majd a kitöltés végén a teszt eredményét megtekinteni.
- Továbbá a felhasználó képes lesz saját profiljának adatai megtekintésére is!

### 5.1 Rendszerszereplők
Felhasználó: Joga van a profiljának megtekintésére és a játékban résztvenni.
Admin: Tudja befolyásolni a pontok állását, felhasználókat zárolni, törölni.
### 5.2 Rendszerhasználati esetek és lefutásaik
Minden felhasználó külön van tárolva, így mindenki a saját reális pontjait látja. Egyszerre több felhasználó is képes "játszani" az oldalon és pontokat gyűjteni.
