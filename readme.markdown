# ISO 690 pro CSL

Testovací verze stylu pro bibliografické citace podle normy ISO 690 ve formátu *csl 1.0*. Testováno v procesoru *citeproc-hs* a *citeproc-js*. Oficiální lokalizační soubor CSL pro češtinu je pro starší verzi tohoto jazyka, obsahuje některé nepřeložené řetězce a chybně tiskne řadové číslovky. Opravená verze je k dispozici na adrese <https://github.com/michal-h21/locales/blob/master/locales-cs-CZ.xml>. 

V současnosti styl řeší hlavně formátování seznamu literatury, metodám pro citování (author-year, numeric a poznámky pod čarou) se budu věnovat později.

## Užití

Styl je uložen v souboru [iso690.csl](https://github.com/michal-h21/csl-iso690/raw/master/src/iso690.csl). 

V *zoteru* stačí zkopírovat do adresáře se styly. Funguje generování bibliografie a propojení s Open Office, Word nemám, ale asi funguje také.

V *pandoc* se používá:

`pandoc soubor.pripona --bibliography soubor_s_bib_databazi --csl cesta/iso690.csl` 

Jako formát bibliografické databáze je nejlepší *citeproc json*, u ostatních formátů se nemusí využít všechyn informace. Například v bib formátu pro biblatex se nevyužijí pole s vydáním, datem citování URL atd.

## Problémy

- Nefunguje v aplikaci *Mendeley*. Nemám tušení proč, asi bude třeba obrátit se na support

- Při exportu do html se v pandocu znaky pro < a > zobrazují jako entity

- Další problémy vycházejí z omezení *CSL*

  - V polích CSL chybí pole pro ISSN. Podle normy je povinné.
  
  - Nedá se rozlišit, v jakém jazyce je citovaný dokument, podle doporučení by některé řetězce měly být v původním jazyce.
  
  - Asi není možné přidávat vlastní lokalizační termíny. Přidal jsem termín `www-available` pro oznámení o dostupnosti dokumentu na WWW, ale validátor hlásí chybu. Možná bude třeba tyto hláčky natvrdo přidat do stylu, ale pak bude podporovat pouze češtinu.  
