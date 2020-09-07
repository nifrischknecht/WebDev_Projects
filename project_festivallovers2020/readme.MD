# Dokumentation Website «FestivalLovers»

## Abstract / Management Summary

Die Website «Festivallovers» pixelgerecht umzusetzen war ein spannendes, aber herausforderndes Projekt. Ich habe mir zum Ziel gesetzt, gesamtes verlangtes HTML und CSS umzusetzen, dies für Smartphones, Tablets und Desktop, was mir auch gelungen ist. 
Die Funktionalität des Filters und Local Storage konnte ich aus zeitlichen Gründen nicht mehr umsetzen. Ich werde dies aber bestimmt in naher Zukunft angehen.

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
Für den/die Entwickler/-in erleichtert dies das Codieren von CSS enorm.

#### **BEM**
BEM steht für Block Element Modifier und dient in erster Linie um CSS Klassen transparent und für andere Entwickler/-innen nachvollziehbar zu halten. Für die Übersicht des Projektes des SCSS resp. CSS Files zu behalten, ist die Schreibweise nach BEM goldwert.

#### **Rest API**
Rest API ermöglicht die Kommunikation zwischen Frontend und Backend und den Zugriff auf Ressourcen, um diese anzuzeigen oder sie zu verändern. Das heisst, um die Daten aus einer Datenbank zu holen und ins Frontend zu speisen, werden in diesem Projekt Rest APIs verwendet.

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

-----
## Eidesstattliche Erklärung
Hiermit erkläre ich, dass ich die Diplomarbeit selbstständig verfasst / programmiert und keine anderen als die angegebenen Quellen und Hilfsmittel benutzt und die aus fremden Quellen direkt oder indirekt übernommenen Gedanken als solche kenntlich gemacht habe. Die Arbeit habe ich bisher keinem anderen Prüfungsgremium in gleicher oder vergleichbarer Form vorgelegt. Sie wurde bisher auch nicht veröffentlicht.