# Követelmény Specifikáció

## 1.) Jelenlegi helyzet leírása
Az MNIST adatbázis egy nagyméretű, kézzel írt számjegyek adatbázisa, amelyet általában különféle képfeldolgozó rendszerek betanítására használnak. Az adatbázist széles körben használják képzésre és tesztelésre is a gépi tanulás területén. A NIST eredeti adatkészleteiből származó minták „újrakeverésével” jött létre. A NIST fekete-fehér képeit normalizálták, hogy beleférjenek egy 28x28 pixeles határolódobozba, és élsimításra kerültek, ami szürkeárnyalatos szinteket vezetett be.

## 2.) Vágyálom rendszer leírása
- Egy olyan webalkalmazás fejlesztése a cél, melyben egy személynek fel kell ismernie milyen számot lát egy képen
- Olyan rendszert hozunk létre, melyet teljesítve a felhasználó pontokat gyűjthet eltalálta-e a megfelelő számot
- Regisztráció/bejelentkezés szükséges lesz a használatához
- A "teszt" végén a felhasználó kap egy pontszámot az alapján, hogy hányat talált el jól
- A beírandó számot nem billentyűzettel, hanem egy képernyőn lévő numpaddal kell bevinni
- Reszponzív design

## 3.) A rendszerre vonatkozó pályázat, törvények, rendeletek, szabványok és ajánlások felsorolása

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

## 4.) Jelenlegi üzleti folyamatok modellje

Üzleti szereplők: 	
-	felhasználó

Üzleti munkatárs: 	
-	karbantartó

Üzleti entitások: 		
-	email cím
-	Leadboard

Üzleti folyamatok: 	
-	Új felhasználó felvétele a rendszerbe: A felhasználó email címe megadásával és egy saját felhasználói név megadásával regisztrálni tud az oldalra aminek az adatait titkosítva egy adatbázisban menti el a rendszer
-	Program menete: A felhasználó belépés után a Start gombra kattintva 20 random képet kap sorban egymás után amikről elkell dönteni-e, hogy 1-től 9-ig melyik számjegyet ábrázolja.
-	Értékelés: Minden egyes jó válasz adásért pontot kap a felhasználó, legvégén pedig megtudja nézni, hogy a ranglistán hanyadik helyen áll.

## 5.) Igényelt üzleti folyamatok modellje:
Profilkép: A felhasználó számára biztosítani kell egy profilkép feltöltési lehetőséget. Ezeket adatbázisban tároljuk.
Profil leírás rendszere: A rendszer lényege, hogy minden felhasználó képes legyen saját magáról pár sort írni, hogy ki is ő igazából. Ezzel picit humánusabbá téve magát az egész oldalt.
## 6.) Követelménylista
Regisztráció: A felhasznűlók számára biztosított kell legyen a könnyű regisztrálási lehetőség.
Bejelentkezés: A regisztrált felhasználók számára biztosítani kell az egyszerű belépési lehetőséget az oldalra.
Jelszavak titkosítása: A felhasználók jelszavait a megfelelő titkosítás mellett kell tárolni.
Jól látható képek: Fontos hogy mindenki olyan képeket kapjon ami jól látható nem pixeles.
Pontrendszer: A felhasználók verseny szerűen gyűjtik a pontokat és így rangsoroljuk őket.
## 7.) Irányított és szabad szöveges riportok
- **Kivitelező:** Kérem mondja el milyen programra lenne szüksége!
 - **Megrendelő:** Mostanában azon gondolkozatam, hogy nyitni készíteni szeretnék egy olyan saját weboldalt, ahol a felhasználónak 20 véletlenszerű ember által írt számokat kéne helyesen kitalálniük.  
 - **Kivitelező:** Hogyan gondolta ezt megvalósítani?
 - **Megrendelő:** Úgy, hogy ezeket az emberek által írt számokat mondjuk egy adatbázisban tárolnám ahonnan véletlenszerűen lenne kiválasztva 20 kép amiken ugye a számok szerepelnének. Ezen kívűl felhasználóknak biztosítanék egy rangsort is ahol csak az e-mail címüket kellene megadniuk és a rangsor úgy állna fel, hogy mennyit talált el helyesen. 
 - **Kivitelező:** Rendben, a csapatom és én megpróbáljuk a legjobb tudásunk szerint megcsinálni az ön által megálmodott weboldalt!

## 8.) Fogalomszótár
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet.
- **MNIST database (Modified National Institute of Standards and Technology database)** - egy nagyméretű, kézzel írt számjegyek adatbázisa, amelyet általában különféle képfeldolgozó rendszerek betanítására használnak. Az adatbázist széles körben használják képzésre és tesztelésre is a gépi tanulás területén.
- **Adatbázis** - Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.

