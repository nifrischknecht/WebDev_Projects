# Dokumentation Website «FestivalLovers»


## Abstract / Management Summary

Die Website «Festivallovers» pixelgerecht umzusetzen war ein spannendes, aber herausforderndes Projekt. Ich habe mir zum Ziel gesetzt, gesamtes verlangtes HTML und CSS umzusetzen, dies für Smartphones, Tablets und Desktop, was mir auch gelungen ist. 
Die Funktionalität des Filters und Local Storage konnte ich aus zeitlichen Gründen nicht mehr umsetzen. Ich werde dies aber bestimmt im September angehen.

Was für mich persönlich eine grosse Herausforderung war, war einerseits das Javascript. Ich habe gemerkt, dass mir HTML und CSS viel besser liegt. Trotzdem aber habe ich Fortschritte gemacht und kann jetzt mit gutem Gewissen sagen: «Ein bisschen Javascript verstehe ich. ;-)»
Eine zweite Herausforderung waren die verschiedenen Browser (Chrome, Firefox und Safari). Ich habe immer alles zuerst im Chrome erstellt danach in den beiden anderen Browsern gestestet. Ich habe gemerkt, dass Safari vielfach ein Margin Problem hatte und Firefox ist sensibel auf Höhen und Breiten von Elementen.


**An die lieben Referenten:**
- **Breakpoints:** Ich habe drei Breakpoints erstellt. Für Smartphone, Tablet und Desktop. Diese habe ich bei 769px, 1024px und 1600px gesetzt. Während dem Codieren habe ich aber gemerkt, dass dies mit dem vorgegebenen Layout nicht immer funktioniert. So habe ich noch zwei Weitere Breakpoints bei 1230px und 1400px gesetzt.
- **Buttons:** Die Buttons und Links sind alle im :active / :focus Zustand auf "outline: none;" gestellt. Falls dies wegen der Userfreundlichkeit (Barrierefreiheit) nicht erlaubt ist, können sie mit einem Klick und Löschen deaktiviert werden.
- **Validator W3:** Warnings wegen sections-tag, die sollten immer ein h2-h6 beinhalten. Dies ist in meiner Website nicht immer der Fall.  
Ein Fehler gib es auch, wenn ich in einen Button weitere Tags verschachtle. Dies ist jedoch gemäss Aussage vom 21. August 2020 von Kilian Schefer völlig in Ordnung. Wichtiger ist, dass Felder, die man anklicken muss, um eine Ineraktion auszulösen, immer ein Button oder ein Link beinhalten.
- **Logo in Header:** befinden sich nicht genau in der Mitte vom gesamten Header (Querachse), sondern genau in der Mitte von Menu und Login. Macht für mich optisch für das gesamte Design mehr Sinn.
- **Audio:**: Für die Audios habe ich ein «data attribut» verwendet
- **Magazin: und News:** sind mit einem Masonry erstellt worden. Mithilfe eines Tutorials (siehe quelle) und Kilian Schefer habe ich dies geschafft. vielen Dank! Pixelbreiten stimmen nicht mit dem Styleguide überein. Es wurde mit responsiven Breiten (in Prozent) gearbeitet.  
Normalerweise lädt man den Text via Rest API in die Website. So kann man genau angeben (mit limit), wieviele Artikel sichtbar sein sollen. Mit dem «Mehr-Button» können danach mehrere Texte nachgeladen werden. Einfachheitshalber wurden für dieses Projekt die Texte jedoch statisch geladen, d.h. der Text wurde direkt in den HTML-Code geschrieben.  
Bei den News kann man auf die Herzchen klicken und die Artikel zu liken.
- **Menü und Login:** Die JS Funktionen des Headers wie auch dem Login war ein langsames Antasten. In einem ersten Schritt habe ich diese beiden mit add und remove geöffnet und auch wieder geschlossen. Die Problematik hier war folgende: Sobald man die Seite wechseln will (z.B. von der Index-Seite auf die Festival-Seite), wurde das Login nicht mehr geschlossen. Nun, dank Hilfe wurde ich darauf hingewiesen, Funktionen für toggleMenu() und toggleLogin() zu erstellen, welche ich fürs schliessen und öffnen verwenden kann. Beim Schliessen muss einfach ein 'close' (wurde so in der Funktion mit einem Force-Status bestimmt) als Parameter mitgeben.
- **Filter:** Inhalt ist noch nicht dynamisch... erst statisch. Somit funktioniert die Filterfunktion auch noch nicht. Dies möchte ich dann sobald ich mehr Zeit habe nach der Diplomarbeit in Angriff nehmen.
- **Festival-Overview:** Die Kachel- und Listenansicht funktionieren tadellos. Klickt man auf die Liste, erscheinen dieselben Festivals wie bei den Kacheln. Die Sortierung nach Datum und nach Kanton funktioniert noch nicht.  
**Vermassung:** Die Kacheln und auch die Listen wurden nach Prozent und nicht nach genauer Pixelangabe wie im Styleguide aufgeteilt. Grund dafür ist die Einhaltung vom responsiven Design, was mit der Breitenaufteilung in Pixel nicht eingehalten werden könnte.  
**Listen:** Die Listenansicht ab Tabletgrösse weicht etwas vom Styleguide ab. Grund dafür ist, zu wenig Platz für alle gewünschten Felder. So wurde ein vierter und füntter Viewpoint (L+ bei 1230px UND L++ bei 1400px) gesetzt. Das Festivalbild erscheint erst ab diesem Punkt. Die Location und das Datum bleiben im selben Kachel bis der Viewport X++ eintrifft, da es sonst vor dem Vieport 1400px zu wenig Platz für den Titel hat.
- **Farben für die versch. Genres:** Die Farben wurden separat in einem SCSS-File (coloring) in verschiedene Klassen geschrieben. Z.Bsp. für Icon-Hintergrund, Linien, Hover etc. Mit kleinem Aufwand kann so die Farbe der einzelnen Genres auf die Schnelle geändert werden. Dies wird bestimmt auch ein grosser Vorteil sein, sobald die Website dynamisch ist.
- **Countdown:** funktioniert dynamisch. Mithilfe Javascript zählt er die Tage zurück bis hin zum Festivaltag.
- **Carousel/Slider:** Das Carousel basiert auf einem fertigen Carousel aus dem Web. Es wurden einige Sachen abgeändert, wie Slider-Quadrate (unten), Bildgrösse, Bilder, Texte wurden entfernt, etc. Das Carousel funktioniert ganz einfach auf allen Mediaqueries gleich. Aus optischen und nutzerfreundlichen Gründen (Usability und Design) wurde auf ein Vollbildmodus verzichtet. Das Carousel funktioniert direkt in der Website.
Auf der Mobil-Version wurden die Pfeile gelassen, da sie für die nutzerfreundliche Anwendung des Users dienen. Der Swipeeffekt wurde aus zeitlichen Gründen nicht programmiert.
- **Line up:** Das Line Up hatte ich total unterschätzt. Das Dropdown-Menü in der mobilen Version war eine echte Herausforderung. Ziel war, dieselben Button für Freitag, Samstag und Sonntag für die Mobile Version zu verwenden, wie auch für die Tablet und Desktop Version. Ich habe so viel wie möglich über die CSS Klassen geregelt, damit das JS etwas schmaler ausfällt. Mehr dazu in der Technischen Dokumentation.

-----
## Setup Guide
Damit man das Projekt sauber von github.com klonen kann und es danach zum Laufen bringt, muss man nach dem Klonen im Terminal an den ensprechen Ort (in Projektordner) navigieren und dort «npm install» eingeben. So werden alle Pakete, die es braucht, um das Projekt zum Laufen zu bringen, heruntergeladen und in das Projekt integriert. Hierzu gehört vor allem der Taskrunner «gulp», den ich für meine Arbeit genutzt habe.

1. Projekt von Github klonen
2. Via Terminal in Projektordner navigieren und «npm install» eingeben + Enter klicken
3. Gulp-Befehle:
-   **«gulp watch»**  
Mit diesem Befehl starte ich den Watcher. Es beinhaltet einen Sassruner (wandelt in CSS um und bündelt alles), bündelt alle JS-Dateien, und macht, dass der Browser im automatisch reloadet nach dem Speichern. Die Dateien speichert es automatisch in den dev-Ordner als Unterordner vom app-Ordner.
-   **«gulp build»**  
Dieser Befehlt macht dasselbe wie Gulp watch, einfach kopiert es zusätzlich noch alle Bilder, Audios, Schriften, etc. und speichert es in den dist-Ordner. Der dist-Ordner ist dann das fertige Projekt, welches ins Web hochgeladen wird.

-----
## URL der lauffähigen Version
    URL: https://festivallovers2020.nfrischknecht.ch/  
    Host: https://hostpoint.ch

-----
## Zeitplan / Meilensteine ( für Basisdispo)

    30. Juni 2020
    Start Projekt FestivalLovers
    -> Aufbau Grundstruktur der Website (Ordnerstrukturen)
    -> npm installieren
    -> Gulp installieren
    -> git-Projekt initialisieren
    ---------------------------------------------------------

    4. Juli 2020
    Abgabe der Basisdisposition
    -> Technologiewahl inkl. Begründung
    -> Zeitplan und Meilensteine
    ---------------------------------------------------------

    2. Juli 2020
    Fertigstellung HTML Grundstruktur (nur Basics)
    Alle Files sind erstellt und die Grundstrukturen im HTML (Basics) sind umgesetzt.
    ---------------------------------------------------------

    9. Juli 2020
    Fertigstellung: Startseite mit Musikfiler
    HTML, CSS, JS steht und sind miteinander verknüpft.
    Musikfilter (nach Musikstil) ist programmiert und funktioniert.
    -> Für Mobil und Desktop
    ---------------------------------------------------------

    14. Juli 2020
    Fertigstellung: Footer, Header inkl. Menü
    HTML, CSS, JS steht und sind miteinander verknüpft.
    Menü funktioniert in Header und auch im Footer.
    -> Für Mobil und Desktop
    ---------------------------------------------------------

    24. Juli 2020
    Fertigstellung: Festivalübersicht mit Festivalfilter
    HTML, CSS, JS steht und sind miteinander verknüpft. 
    Festivalfilter (nach Datum und Kanton) ist programmiert und funktioniert.
    -> Für Mobil und Desktop
    ---------------------------------------------------------

    1. August 2020
    Fertigstellung: Festivaldetail mit Countdown, Slider und Google Maps
    HTML, CSS, JS steht und sind miteinander verknüpft. 
    Seite für Festival teilen steht. Verbindungsbutton zu Ticketbestellung funktionert.
    -> Für Mobil und Desktop
    ---------------------------------------------------------

    10. August 2020
    Fertigstellung:  Ticket-Bestellung mit Bestellprozess
    -> Für Mobil und Desktop
    ---------------------------------------------------------

    24. August 2020
    Fertigstellen: alle zusätzlichen Tools, Zusatzaufgaben etc. sofern genügend Zeit
    -> Suchfunktion in Menü
    -> Breakpoint für Tablets
    ---------------------------------------------------------

    29. August 2020
    Abgabe gesamtes Projekt
    ---------------------------------------------------------

    11. /12. September 2020
    Fachgespräche
    -> Präsentation erstellen
    -> Vorbereitung für Fachgespräch

-----
## Technologiekonzept inkl. Begründung (für Basisdispo)

Als Polygrafin fühle ich mich im kreativen Bereich zu hause. So habe ich mich für die Frontend Entwicklung der Website FestivalLovers entschieden. Falls es zeitlich möglich ist, versuche ich noch Teile vom Backend umzusetzen.

#### **HTML, CSS, Javascript**
Der Frontend Bereich dieser Website wird eigenthändig mit den drei Sprachen HTML (für die Struktur), CSS (für das Design) und JavaScript (für die Interaktivität) geschrieben. Vorteil vom selber Codieren ist die Flexibilität. Im Gegensatz zu einem vorgefertigtem Baukastensystem (CMS) wie beispielsweise dem Wordpress sind in der Gestaltung und Interaktivität kaum Grenzen gesetzt.

#### **PHP**
Damit die Übersichtlichkeit eines Webprojektes gewährleistet ist, nimmt man verschiedene Bereiche einer Website (beispielsweise Header, Navigation, Main-Bereich, Footer etc.) auseinander. Genauer gesagt, man lagert die Bereiche in zusätzlichen Files aus. Um die verschiedenen Code-Schnipsel später wieder ins Hauptfile zu integrieren, braucht man die include-Funktion. Dies kann man nur machen, wenn man PHP verwendet.

#### **SCSS / Sass**
SCSS resp. Sass ist eine Stylesheet-Sprache, die als Präprozessor die Erzeugung von CSS erleichtert.
SCSS ist eine strukturiertere Schreibweise mittels Verschachtelungen, die auch Variablen sowie zusätzliche Funktionalitäten (wie beispielsweise Mixins, Partials etc.) unterstützt. 
Mithilfe diesem SCSS Präprozessors wird der Code zu reinem CSS umgeschrieben, damit der Code vom Browser interpretiert werden kann.
Für den/die Entwickler/-in erleichtert dies das codieren von CSS enorm.

#### **BEM**
BEM steht für Block Element Modifier und dient in erster Linie um CSS Klassen transparent und für andere Entwickler/-innen nachvollziehbar zu halten. Für die Übersicht des Projektes des SCSS resp. CSS Files zu behalten, ist die Schreibweise nach BEM goldwert.

#### **Rest API**
Rest API ermöglicht die Kommunikation zwischen Frontend und Backend und den Zugriff auf Ressourcen, um diese anzuzeigen oder sie zu verändern. Das heisst, um die Daten aus einer Datenbank zu holen und ins Frontend zu speisen, werden in diesem Projekt Rest APIs verwendet.  
-> Aus zeitlichen Gründen konnte ich den Filter nicht umsetzen. Demzufolge habe ich die Rest API auch nicht integriert.

#### **GIT**
GIT ist eine Versionsverwaltung und dient zur Erfassung von Änderungen an Dokumenten oder Dateien. Alle Versionen werden in einem Archiv mit Zeitstempel und Benutzererkennung gesichert und können zu einem späteren Zeitpunkt wiederhergestellt werden. Es dient auch dazu, das Projekt zu einem vergangenen Punkt/Level zurückzusetzen, falls dies notwendig ist.

#### **GITHUB**
Damit das Projekt auf einem externen Sever gespeichert ist und die verschiedenen Versionen abrufbar sind, wird das Projekt auf Github gespeichert. Zusätzlich kann das Expertenteam auf das Projekt zugreifen.

#### **NPM**
NPM (Node Package Manager) ist ein Paketmanager für die JavaScript-Laufzeitumgebung Node.js.
NPM wird installiert, damit man dieverse Hilfsmittel wie beispielsweise ein Taskrunner herunterladen und benutzen kann.

#### **Gulp**
Der Taskrunner Gulp wird verwendet, um repetitive Tasks während der Entwicklung zu automatisieren. Für dieses Projekt wird vor allem das Kompilieren von SASS (Umwandlung in CSS), der BrowserSync (LiveReload des Browsers), der Autoprefixer (ergänzt CSS mit Präfix), Bundling von Dateien (zusammenfassen), die Minification & Uglificaiton von JavaScript und CSS (kürzere Schreibweise), etc. verwendet. Dies vereinfacht den Entwicklungsprozess der Website enorm.

## Technische Dokumentation

### **Strukturen HTML [PHP], CSS und Javascript:**

### HTML -> PHP: Verwendung von PHP:
In diesem Projekt wird PHP lediglich verwendet, um die verschiedenen html-Files miteinander verbinden zu können. Hauptsächlich findet man html in den PHP-Files.
Grund für die vielen PHP-Files ist die Verschaffung der Übersichtlichkeit. Nur ein index.html-File wäre viel zu unübersichtlich.


### CSS -> SCSS: Verwendung von Partials:
- **Farben:** Die Farben werden mittels Variabeln ($) erstellt.  
Grund dafür ist, einfach zu handhaben, falls später eine Farbe ändert. So kann man nur einen Wert ändern und muss nicht jeder einzelne Farbwert ändern. Für die Farben der Genres wurde ein extra File erstellt, dass die Handhabung, sobald das Projekt dynamisch ist, viel einfacher ist. Weitere Informationen unten im Kapitel «Farben für Genres».
- **Schriften:** Die Schriften werden via @font-face {} in einem separaten File erstellt. Um die Schrift dann anzusteuern, muss man nur noch den Font-Family-Code in den einfachen 'Klammern' einsetzen.  
Dies macht auch wieder Sinn für die Vereinfachung von Schriftanpassungen im Nachhinein. Weitere Informationen dazu unten im Kapitel «Schriften».
- **Mediaquerys:** Die Breakpoints für das responsive Verhalten der Website wird via das Partials _mediaquery.scss angesteuert. Die Breakpoints sprich Mediaquerys werden mittels einem Mixin, welches wiederum eine Funktion enthält mit drei if-Bedingungen (für jeden Breakpoint [M, L, XL] eine Bedingung) abgefragt.  
Diese Breakpoints können im SCSS-File dann ganz eifach mit der Funktion und dem entsprechenden Parameter angesteuert werden.
- **Normalize-File:** Das File _normalize.scss ist eine CSS-Normalisierung und bietet Entwicklern einen sicheren Ausgangspunkt, um zu wissen, dass die Stile in allen Browsern (browserübergreifend) gleich sind.
- **Hauptfile**: Im Hauptfile "main.scss" findet man alles Allgemeine und vor allem den body, main, die h-Schriften usw.  
Die Partials werden in diesem File via [@import "  "] je nach Priorität der Files entweder ganz oben oder ganz unten eingefügt.
- **Restliche Partials:** Wie beispielsweise der Footer, Header, die Detailseite oder alle Overlays, die Overview, Detail, Tickets usw. werden aufgrund der Übersichtlichkeit separat in einem scss-File gespeichert und ins Hauptfile main.scss eingebunden.


### JS -> wird mit Module Pattern gearbeitet:
Sofern die Möglichkeit besteht, wird mit Module Pattern gearbeitet. Dies verschafft dem Javascript einerseits bessere Übersicht, andererseits braucht es weniger Code, den es kann mit Vorlagen gearbeitet werden.  
Das Javascript wird dementsprechend in verschiedene Files aufgeteilt. Im Hauptfile «app.js» wird der Hauptcode (js) der Website abgespeichert. Sobald zum Beispiel eine Funktion oder eine Konstante mehrmals verwendet wird (wiederkehrend ist), wird dieser Code in ein zweites File (Module) gespeichert und als Vorlage verwendet. Als Module-File wird in diesem Projekt folgendes File verwendet: tools.js

**tools.js**
- **Delegate Ansatz:** Funktion Delegate wird verwendet, um mehrere gleichnamige Klassen anzusprechen. So muss nur ein addEventListener verwendet werden.

        const delegate = (cssClass, myfunction) => {
            return (event) => {
                if (event.target.matches(cssClass)){
                    myfunction(event);
                };
            };
        };


Grundsätzlich wollte ich alles auslagern und für jedes Thema ein eigenes File erstellen. Aus zeitlichen Gründen konnte ich leider das Dokument «main.js» nicht mehr auseinander nehmen und einzeln umsetzen. Ich würde jedoch das nächste mal gleich von anfang an mit ausgelagerten Elementen arbeiten.


**Funktionen**
Hauptsächlich wird die alte Schreibweise für Funktionen verwendet. Es kann jedoch vorkommen, dass zwischendurch auch der neue Ansatz verwendet wird.

**Variabeln: var, const, let**
Um die Website zu einem späteren Zeitpunkt dynamisch umzusetzen, wird von anfang an mit const und let gearbeitet.


### **Schriften:**
Die Schriftarten «Adelle und Proxima Nova»  inkl. all ihren Schriftschnitten wurden via @foont-face in einem separaten Partial (SCSS-File) namens «_fonst.scss» in die Website implementiert. Dieses File macht die Schnittstelle zwischen dem fonts-Ordner und den verwendeten Schriften der Website.
Alle Hauptformatierungen der verschiedenen Tags wie h1 - h4, Grundtext (in body), lead, usw. wurden im Haupt-SCSS-File eingestellt und können danach nur via entsprechendem Element angesteuert werden.
- **h1:** Kommt wegen SEO nur einmal vor. Da der erste Titel auf der ersten Seite der aussagekräftigste ist, wurde dieser als h1 gesetzt.
- **h2:** Als h2 wurden alle weiteren Titel, die eigentlich die selbe Formatierung wie der h1 aufweisen, deklariert.
- **h3 plus:**--> demzufolge werden alle Titel um eins versetzt. h2 ist neu h3, h3 ist h4 usw.
- **Grundschrift:** Im Body wurde die Grundschrift ProximaNova, Regular, 17px/28px gesetzt. Falls nichts geändert wird und ein normaler p-Tag verwendet wird, formatiert es die Schrift automatisch gemäss Grundschrift Formatierung.

### **Buttons:**
Die SCSS-Formatierung der Buttons wird grundsätlich immer via Partials _buttons.scss geholt. Die Klassen sind extra gleich benennt. Für die ansteuern der einzelnen Buttons via JS, wird jedem Button noch eine individuelle Klasse erteilt.
Falls die Buttons von der Norm abweichen, werden sie direkt im entsprechenden SCSS-File dieses Themas erstellt. Dies ist beispielsweise beim Button der App-Werbung auf der index-Seite oder auch der Filter-Buttons (Filter zurücksetzen oder Ergebnis anzeigen) der Fall.

### **Farben für Genres:**
Die Farben für die Genres werden für jedes einzelne Genres an einem Ort gesammelt. Vorteil ist, man muss nur einmal pro gleichem Genres die Styles erteilen. Wichtig, man setzt die richtige Klasse auf die entsprechenden Elemente. Dies funktioniert dann auch gut, sobald man die Website dynamisch macht. Man kann dann das ganze über ein Obejekt «genres» steuern.

### **Masonry:**
Das Masonry funktioniert nun so, dass die selben Klassen für alle äusseren Elementen wie z.Bsp. die Box um den Inhalt verwendet habe. D.h. die einzelnen Artikel muss man mit der Klasse «masonry__brick» versehen und kann dann so alle Masonry im selben Projekt zum Laufen bringen.

### **Festivalübersicht:**
Die Übersicht der Festivals habe ich mit Grid programmiert. Dies macht alles viel einfacher. Herausforderung hier war, in jeder Ansicht die Kästchen anders anzuordnen und darzustellen.

### **Audio:**
Die Musik auf der index-Seite läuft. Sobald ein zweites Stück Musik abgespielt wird, stoppt es das Laufende.

### **Countdown:**
Der Countdown läuft... Es zählt die Tage zurück bis zum Festival. Dies wurde im JS umgesetzt. Das heutige Datum wird vom Festivaldatum abgezogen, so zeigts die Tage an bis zum entsprechenden Festival.

### **Carousel vs. Slider:**
Das Carousel basiert auf einem fertigen Carousel aus dem Web. Es wurden einige Sachen abgeändert. Das Javascript befindet sich im PHP vom Carousel-File.

### **Line Up:**
Die Buttons werden mit einer Klasse (lineupFestival__singleDay) gestylt, für die Mobile Version werden sie auf display: none gestellt, für Tablet und Desktop sind sie immer sichtbar. Die Buttons der Mobiles werden dann erst angezeigt, wenn sie mit der Klasse --active aktiviert werden oder wenn das übergeordnete Element die --open Klasse erhält (Dropdown-Menu offen). Für die Tablet und Desktop Version werden die Buttons immer angezeigt und die --active Klasse ist nur noch eine Ergänzung für die Hervorhebung des aktiven Buttons.
Mit der "lineupFestival__linupAllDay--open" Klasse sagt man im mobilen Zustand, dass das Dropdown-Menü aktiviert werden soll. Mithilfe toggle im JS kann man das Dropdown dann einschalten, mit remove dann wieder ausschalten. Damit man nicht alle Buttons einzeln ansteuern muss, macht man eine ForEach-Schleife und lässt sie durchlaufen.
Damit man die verschiedenen Tage (Freitag, Samstag, Sonntag), ob Buttons oder Musik-Programm, besser ansteueren kann, wurde mit «data attributes» gearbeitet. Für die Buttons: "data-day" und für das Programm: "data-program". Mit diesen Attributes kann das JS dann einfacher die entsprechenden Tage mit etwas Voodoo und Zauber ansprechen.


### **Google Maps:**
Mit Code aus dem Internet für HTML und JS, einem Login mit Kreditkartenhinterlegung und etwas Styling auf der google.map Website konnte die Karte erstellt werden. Es braucht vor allem zwei Codes, der API Key und die MAP ID. Die beiden Codes müssen dann im script-code im HTML eingefügt werden. Koordinaten der Ortschaft muss noch eingefügt werden und der ensprechende Code-Schnipsel für die Icon-Einbindung.


-----
## Zusammenfassung und Ausblick, persönliche Anmerkungen
Es war ein sehr anspruchsvolles, jedoch lernreiches Projekt. Ich sass viele Stunden vor dem Mac und programmierte jeweils bis tief in die Nacht. Ich hatte mit ungefähr 150 Stunden gerechnet... war aber weit darüber aus. Der Zeitplan konnte ich schon nach einer Woche nicht mehr einhalten.  
Es brauchte viele Nerven und vor allem Koffein! Nun bin ich aber stolz auf mich und mein Projekt, dass es nun online ist. Ich merkte, wie ich von Woche zu Woche schneller programmiere. Vor allem im CSS und HTML habe ich extrem Fortschritte gemacht. JS ist noch immer etwas undurchsichtig für mich.  
 Ich werde das Projekt auf jeden Fall weiterentwickeln und versuchen, eine Rest API anzuhängen, damit ich die Daten aus der Datenbank holen kann. Je länger man am Projekt war, desto mehr hat es einem gepackt. Man konnte kaum mehr aufhören oder eine Pause einlegen.  
 An dieser Stelle danke ich auch meinen beiden Lehrern Kilian und Pascal für die vielen aufgewendeten Nerven und meinem Cousin Joachim, dass ihr euch immer Zeit genommen habt, wenn ich Fragen hatte.  
Was mir mein Cousin Joachim auf den Weg gegeben hat, ist das data attribut. Er meint, ohne dies zu leben, wäre sinnlos. ;-) So versuche ich dies nun auch in meine Programmierkünste einzubinden.

-----
## Literaturverzeichnis, Quelle
- Index-Seite, Maganzine und News: Damit das Magazine und auch die News sauber als Masonry dargestellt werden kann und responsive umgesetzt ist, wird ein Masonry mit Grid verwendet. Der Aufbau des HTML-, CSS- und JS-Code wurde genau nach dem Beschrieb und Erklärung von Rahul (publiziert am 27. Mai 2020) unter Website https://w3bits.com/css-grid-masonry/ gemacht und danach mithilfe von Kilian Schefer auf das Projekt optimiert.
- Detail-Seite, Carousel (Slider): basiert auf dem Carousel von folgender Website: https://www.w3schools.com/howto/howto_js_slideshow.asp
- Google Map: Mithilfe dieser Website konnte ich die Files PHP, CSS und JS aufbereiten: https://developers.google.com/maps/documentation/javascript/cloud-based-map-styling#maps_map_id_style-html, danach musste ich den Marker einbauen, mithilfe folgender Website: https://developers.google.com/maps/documentation/javascript/markers und zum Schluss, die Karte noch stylen mithilfe folgender Website unter Map Styles: https://console.cloud.google.com/google/maps-apis/
- Menü + Login: nach dem Öffnen automatisch Schliessen lassen, sobald man auf einen anderen Button klickt, bekam ich Hilfe von Joachim Frischknecht
- Audio (index.php), Line Up (festivals-detail.php), Hilfe von Joachim Frischknecht

-----
## Eidesstattliche Erklärung
Hiermit erkläre ich, dass ich die Diplomarbeit selbstständig verfasst / programmiert und keine anderen als die angegebenen Quellen und Hilfsmittel benutzt und die aus fremden Quellen direkt oder indirekt übernommenen Gedanken als solche kenntlich gemacht habe. Die Arbeit habe ich bisher keinem anderen Prüfungsgremium in gleicher oder vergleichbarer Form vorgelegt. Sie wurde bisher auch nicht veröffentlicht.