# Szépítészet

Szeretném bemutatni az oldalam. Két fő részből áll. A **Főoldal** és az **Admin** oldal.

## Főoldal
Van egyedi favicon-om
A header-ben a váltakozó kép, időpontfoglalási linkkel

- Bemutatkozás
    - Az ikonokra kattintva az adott linkekre jutunk (pl: a footerben a gombostű a kapcsolatok térképéhez visz)
- Szolgáltatások
    - Adatbázisban tárolva, onnan beolvasva
- Galéria
    - A gombokra kattintva az adott alrészhez jutunk
    - A képek egy mappában vannak tárolva, tartalmát foreach ciklus segítségével jelenítem meg
    - Lentről a könnyebb feljutás érdekében használtam egy felugró nyilat (ami vagy működik, vagy nem...), ezt csak felhasználtam, nem saját
- Blog
    - Ez nem készült el
- Kapcsolat
    - Adatbázisba kerülnek az adatok. Validáció beállítva. Hibaüzenet, sikeres üzenet megjelenik.
- **Foglalás**
    - Betöltődik egy naptár, amiben lehet napozni a hónapok között, és az aktuális hónap jelenik meg.
    - A mai nap kiemelve jelenik meg.
    - A mai napra és visszamenőleg nem lehet időpontot választani, csak mindig az adott napot követő naptól
    - Az elérhető és kiválasztott napra kattintás után egy űrlap kitöltésével lehet foglalni
    - A szolgáltatás típus választás után frissül a szolgáltatás megnevezése legördülő menü
    - Validáció beállítva, hibaüzenet, sikeres foglalás megjelenik
    - Sikeres foglalás esetén megjelennek a foglalási adatok, és ha valamit elírt az illető, akkor ott megjelnik egy kapcsolatfelvételi űrlap, a már megadott adataival, hogy fel tudja venni a kapcsolatot

Még nincs megoldva a foglalás többi része, az időpont kiválasztás csak egy tömbből kerül meghívásra, nincs beállítva, hogy az adott szolgáltatás mennyi időt vesz igénybe, lehetnek ütközések

## Admin oldal
http://localhost/szepiteszet/public/admin \
Az oldal megtekintéséhez bejelentkezés szükséges: \
Felhasználónév: *admin* \
Jelszó: *12345* \
 \
A menü megjelenik (a Belépés és Kilépés cserélődik az aktuális állapotnak megfelelően) \
A menüre kattintva vagy az URL-be írva az elérési útvonalat, csak a belépési felület látható, míg be nem lépünk \
Egyedül a weboldalra tudunk átnavigáni bejelentkezés nélkül

- Főoldal
    - Az adatbázisból történik lekérésre a két legfontosabb menüpont utolsó 5 elemének listázása: foglalások és üzenetek
- Foglalások illetve Szolgáltatások
    - Ugyanazt tudja még mindkettő: listázás, módosítás, törlés, új hozzáadása
    - Sikeres művelet után felugró, bezárható ablak
    - Törlésnél megerősítés kérése, hogy még vissza lehessen lépni
- Üzenetek
    - Listáz, lehet törölni, itt is csak megerősítés után
    - Van a törlés melett egy olyan 'check' ikon, amire kattintva bejelölhetjük, hogy arra az üzenetre válaszoltunk, az adatbázisba ezt elmenti
    - Vissza is lehet vonni ezt az ikont, és ismét megválaszolatlan lesz az adott üzenet
    - Lehet szűrni az üzeneteket (összes/megválaszolatlan/megválaszolt)

#### Hiányosságok:
- A szolgáltatások módosítása, vagy újabb hozzáadása után az adatbázisban frissül, de nem onnan töltődik be a foglalásnál a szolgáltatás kiválasztása, hanem az egy tömbből kerül beolvasásra.
- A fentebb említett foglalás többi része, plusz hogy több szolgáltatást is lehessen választani egy foglalás alatt
- Nem teljesen responsive-ek az oldalak
- A képek nem nagyíthatóak, nem lapozhatóak
- Admin oldalon az új foglalás rögzítésénél a második legördülő menü tartalma nem az elvárt szerint működik, de feltételezzük, hogy az admin nem fog hülyeséget beírni... (a javascriptet egyelőre nem tudtam nála működésre bírni, mint ahogy a főoldalon van)
