<? include ('header.php'); ?> 
<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Úlohy</h2>
                <p>V tejto sekcii uvádzame úlohy, ktoré sa snažíme vyriešiť</p>
            </div>
        </div>
    </div>
</div>

<?
    //tabulka
    $nazov      = array("Zoznámenie sa s problematikou",
                        "Úprava zdrojoveho kódu",
                        "Optimalizácia projektu",
                        "Implementácia snímača odtlačkov",
                        "Akcelerácia pomocou GPU",
                        "Dokumentácia zdrojového kódu",
                        "Nové architektúry NS",
                        "Extrakcia komplexných markantov",
                        "Testovanie na viacerých DB");

    $riesitel   = array("všetci",
                        "všetci",
                        "všetci",
                        "Bc. Richard Uzsák",
                        "Bc. Patrik Šulák, Bc. Miroslav Taraj",
                        "všetci",
                        "Bc. Matúš Ješko",
                        "Bc. László Kádek",
                        "všetci");

    $stav       = array("splnené",
                        "prebieha",
                        "prebieha",
                        "prebieha",
                        "prebieha",
                        "prebieha",
                        "prebieha",
                        "prebieha",
                        "nový");

    //accordions
    //pocet publikovanych uloh
    $publikuj   = 7;
                  
    $obsahUlohy = array("Na prvej konzultácii sme sa postupne zoznamovali s projektom Neurodactyl 2.0. Zistili sme ako ho vylepšiť. Našou prvou úlohou je naštudovať si dokumentáciu a zdrojové kódy predošlého projektu Neurodactyl 1.0",
                        "Na druhej konzultácii sme riešili detaily nášho tímového projektu, taktiež začíname študovať zdrojové kódy, implementované v programe QT Creator, boli sme oboznámení aj s našimi vedľajšími úlohami ako vytvárať zápisnice a pravidelne aktualizovať našu web stránku. Po dlhšom čase sme dokázali skompilovať projekt Neurodactyl 1.0 a môžme sa pustiť do optimalizácie projektu",
                        "Výsledkom meetingu z 4.11.2016 bolo detailné oboznámenie sa s problematikou využitia modulov v tímovom projekte. Zo stretnutia je jasné, že myšlienka použitia modulov v projekte nám zaručí to, že každý člen tímu nebude ovplyvňovaný iným členom a to zaručí správne fungovanie aplikácie bez nedokončených modulov. Ďalší výsledok stretntia nám hovorí o tom, že je potrebné vytvárať generovanú dokumentáciu ku projektu z dôvodu, že v ďaľšom vývoji sa nový člen tímu môže zapojiť bez toho, aby študoval zdrojové kódy.",
                        "Pri implementácii snímača odtlačkov prstov sme narazili na problém, keďže snímač používa 32 bitovú architektúru a ostatné technológie sú založené na 64 bitovej architektúre, prebehla analýza komunikácie týchto dvoch architektúr a bola predstavená myšlienka zdieľanej pamäte. Podarilo sa nám implementovať zdielanie pamäte medzi dvomi rozdielnymi architektúrami a tak dokážeme dostať do nášho programu nasnímaný otlačok.",
                        "Pre akceleráciu výpočtov používame ArrayFire a nástroje pre graficke karty CUDA a OPENCL, keďže operácie s veľkým počtom výpočtov sa niekoľko násobne rýchlejšie vykonávajú na grafickej karte. Momentálne sa pokúšame prepísať kód na predspracovanie obrazu z projektu NeuroDactyl 1.0.",
                        "Pomocou QDoc máme možnosť vygenerovať dokumentáciu ku zdrojového kódu. Takýmto spôsobom sme schopný komentovať funkcionality jednotlivých tried a funkcií. Výsledkom generovania bude jednoduchá HTML stránka s navigačnými prvkami a opismi. Dokumentácia bude slúžiť budúcim vývojárom, aby mohli jednoducho zistiť fungovanie jednotlivých častí aplikácie. Našim hlavným cieľom je naučiť sa a implementovať špeciálnu syntax QDoc na projekt.",
                        "Pre novú architektúru neurónových sietí sme sa rozhodli použiť konvolučné siete, knižnicu ConvNet, pomocou ktorých môžeme skrátiť dobu učenia, a tým skrátiť celkový čas. Momentálne sa pokúšame prepísať kód učenia siete z projektu NeuroDactyl 1.0."
                        );
     
    $stavUlohy  = array("100",
                        "60",
                        "20",
                        "90",
                        "20",
                        "20",
                        "30"); 

?>

<div class="mg-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Úlohy</h2>
                <table class="table mb40">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Úloha</th>
                            <th>Riešiteľ</th>
                            <th>Stav</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            $cnt = count($nazov);
                            $s   = '';
                            for($i = 0; $i < $cnt; $i++) {
                                $s .= '<tr>';  
                                    $s .= '<th>'.($i+1).'.</th>';
                                    $s .= '<td>'.$nazov[$i].'</td>';
                                    $s .= '<td>'.$riesitel[$i].'</td>';
                                    $s .= '<td>'.$stav[$i].'</td>';
                                $s .= '</tr>';
                            }
                            echo $s;
                        ?>
                    </tbody>
                </table>
                
                <div class="panel-group mb80" id="accordion" role="tablist" aria-multiselectable="true">
                    <?
                        $s= '';
                        for($i = 0; $i < $publikuj; $i++) {
                            $s .= '<div class="panel panel-default">';
                                 $s .= '<div class="panel-heading" role="tab" id="heading-'.$i.'">';
                                     $s .= '<h4 class="panel-title">';
                                         $s .= '<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$i.'" aria-expanded="false" aria-controls="collapse-'.$i.'">';
                                             $s .= $nazov[$i];
                                         $s .= '</a>';
                                     $s .= '</h4>';
                                 $s .= '</div>';
                                 $s .= '<div id="collapse-'.$i.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-'.$i.'">';
                                     $s .= '<div class="panel-body">';
                                         $s .= $obsahUlohy[$i];
                                     $s .= '</div>';
                                     $s .= '<div class="progress">';
                                         $s .= '<div class="progress-bar" role="progressbar" aria-valuenow="'.$stavUlohy[$i].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$stavUlohy[$i].'%;">';
                                             $s .= '<span class="mg-progress-bar-left">Stav</span>';
                                             $s .= '<span class="mg-progress-bar-popup">'.$stavUlohy[$i].'%</span>';
                                             $s .= '<span class="sr-only">'.$stavUlohy[$i].'% Complete</span>';
                                         $s .= '</div>';
                                     $s .= '</div>';
                                 $s .= '</div>';
                             $s .= '</div>';
                        }
                        echo $s;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<? include ('footer.php'); ?> 