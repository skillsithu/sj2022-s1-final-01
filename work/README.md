# Utazás

## API

```
/api/poi/random
```

A GET HTTP metódussal érhető el.

A látványosságok közül véletlenszerűen kiválaszt egyet az adatbázisból.
A látványosságokat az alábbi táblázatban található tulajdonságok írják le:

| Tulajdonság | Leírás                                         |
|-------------|------------------------------------------------|
|`id`         | A látványosság azonosítója                     |
|`name`       | A látványosság megnevezése                     |
|`image`      | A látványossághoz tartozó kiemelt kép          |
|`description`| A látványosság leírása                         |
|`gallery`    | A látványossághoz tartozó további képek tömbje |
|`rating`     | Az értékelések átlaga                          |

A galériában található képek az alábbi tulajdonságokkal rendelkeznek:

| Tulajdonság | Leírás                             |
|-------------|------------------------------------|
|`id`         | A kép azonosítója                  |
|`title`      | A kép címe                         |
|`path`       | A kép elérési útvonala             |
|`order`      | A képek megjelenítésének sorrendje |

```
/api/rating
```
A POST HTTP metódussal érhető el.

Az elvárt adatok

 - `poi_id`: a látványosság azonosítója (egész szám)
 - `rating`: az értéklés 1-5 közötti egész szám

Visszaadott értékek:
 Egy olyan JSON objektum, ahol a `data` értéken belül az újraszámított átlag található.

```
/api/booking
```
A POST HTTP metódussal érhető el.

Az elvárt adatok

- `firstname`: keresztnév
- `lastname`: vezetéknév
- `date`: a foglalás dátuma (ISO formátumú dátum YYYY-MM-DD)
- `passengers`: a személyek száma, legalább 1
- `extra_baggage`: logikai érték: 1, ha igen, 0, ha nem
- `transportation` a jármű. (`bus`, `train` vagy `plane`)

Visszaadott értékek:
Egy olyan JSON objektum, ahol a `data` értéken belül a foglalás adatai, feldolgozás nem szükséges.

## Foglalás
Vonattal és busszal az út péntek reggel indul, érkezés szombaton délelőtti órákban.
Repülőgéppel kétféle út is választható. Pénteki utazás esetén már aznap este elfoglalhatja a szállást,
igaz egy extra éjszakát is jelent a szállás költségében. Továbbá indul szombat reggel is repülő, így ugyanakkor
érkezhet meg, mint az egyéb közlekedési fajtát választók.

A hazaút egységesen vasárnap este indul az utazási módtól függetlenül.

A vonat és a busz ára egységesen 80 000 Ft. Repülőgéppel az út csak 70 000 Ft.
Ugyanakkor az extra bőrönd repülőn 30 000 Ft, míg egyéb járműveken csak 10 000 Ft.
Az extra bőrönd személyenként értendő!

A szállás 20 000 Ft egy fő számára egy éjszakára.

Leggyakrabban két fő szokott utazni általában, az űrlap kialakításakor vegye figyelembe ezt,
hogy a többség számára kényelmes legyen a kitöltése.

Az április 16-án induló buszon még sok hely van, így legyen ez az alapértelmezetten kiválasztott útvonal.