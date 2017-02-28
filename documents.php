<? include ('header.php'); ?> 
<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dokumenty</h2>
                <p>V tejto sekcii uvádzame použité dokumenty a zápisnice</p>
            </div>
        </div>
    </div>
</div>

<?
    $nazov      = array("Neurodactyl 1.0",
                        "Team Neurodactyl 2.0",
                        "Zápisnica 14.10.2016",
                        "Zápisnica 21.10.2016",
                        "Motiváciu tímu",
                        "Zápisnica 4.11.2016",
                        "Zápisnica 1.12.2016",
                        "Plán na zimný semester",
                        "Zápisnica 7.12.2016",
                        "Neurodactyl polročná prezentácia",
                        "Zápisnica 15.1.2017",
                        "Zápisnica 3.2.2017",
                        "Zápisnica 20.2.2017"
                        );

    $datum      = array("20.10.2016",
                        "21.10.2016",
                        "25.10.2016",
                        "26.10.2016",
                        "4.11.2016",
                        "4.11.2016",
                        "12.12.2016",
                        "12.12.2016",
                        "13.12.2016",
                        "7.2.2017",
                        "7.2.2017",
                        "7.2.2017",
                        "28.2.2017"
                        );
                        
    $subor      = array("neurodactyl_1.pdf",
                        "Neurodactyl_team.pdf",
                        "Zapisnica_14_10_2016.pdf",
                        "Zapisnica_21_10_2016.pdf",
                        "motivacia.pdf",
                        "Zapisnica_04_11_2016.pdf",
                        "Zapisnica_01_12_2016.pdf",
                        "ZS.pdf", 
                        "Zapisnica_07_12_2016.pdf",
                        "neurodactyl2.pdf",
                        "Zapisnica_15_01_2017.pdf",
                        "Zapisnica_03_02_2017.pdf",
                        "Zapisnica_20_02_2017.pdf"
                       );
                       
    $nazovLinky = array("GitHub");
    
    $linka = array("https://github.com/Zendo93/Neurodactyl_2.0_Refactored");
?>

<div class="mg-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dokumenty</h2>
                <table class="table mb40">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Názov</th>
                            <th>Dátum nahrania</th>
                            <th>Súbor</th>
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
                                    $s .= '<td>'.$datum[$i].'</td>';
                                    $s .= '<td><a href="/dactylos.sk/documents/'.$subor[$i].'" target="_blank">PDF</a></td>';  
                                $s .= '</tr>';
                            }
                            echo $s;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Dôležité linky</h2>
                <table class="table mb40">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Názov</th>
                            <th>Linka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?
                            $cnt = count($nazovLinky);
                            $s   = '';
                            for($i = 0; $i < $cnt; $i++) {
                                $s .= '<tr>';  
                                    $s .= '<th>'.($i+1).'.</th>';
                                    $s .= '<td>'.$nazovLinky[$i].'</td>';
                                    $s .= '<td><a href="'.$linka[$i].'" target="_blank">'.$linka[$i].'</a></td>';  
                                $s .= '</tr>';
                            }
                            echo $s;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<? include ('footer.php'); ?> 