@extends('layouts.app')

@section('title', 'ZNOT 2024 - Pravila')

@section('content')
<div class="hero-container blurred">
    <div class="content-wrapper">

        <div class="scrollable-content">
            <section class="info-section margin-top">
                <h2>Pravila Zimskega nočnega orientacijskega tekmovanja</h2>
                
                @for ($i = 1; $i <= 46; $i++)
                    @if($i==18)
                    <h4>Pogoji tekmovanja</h4>
                    @endif


                    @if($i==31)
                    <h4>Opis nalog in točkovanje
                    </h4>
                    @endif


                    @if($i==44)
                    <h4>Diskvalifikacije
                    </h4>
                    @endif

                    @if($i==45)
                    <h4>Razglasitev in končne določbe
                    </h4>
                    @endif




                    <p><strong>{{ $i }}. člen</strong></p>
                    @switch($i)
                        @case(1)
                            <p>Zimsko nočno orientacijsko tekmovanje (ZNOT) organizira Rod skalnih taborov iz Domžal. Organizirano je vsako leto. Tekmovanje je enodnevno, poteka v noči iz sobote na nedeljo in vsebuje orientacijski pohod, naloge iz taborništva, orientacije in šaljive panoge.</p>
                            @break
                        @case(2)
                            <p>Vse ekipe, ki tekmujejo, imajo možnost prenočitve.</p>
                            @break
                        @case(3)
                            <p>Tekmovalci tekmujejo v štirih kategorijah:</p>
                            <ul>
                                <li>100 – Mlajši Gozdovniki in gozdovnice (GG) – od 11 do 12 let</li>
                                <li>200 – Starejši Gozdovniki in gozdovnice (GG) – od 13 do 14 let</li>
                                <li>300 – Popotniki in popotnice (PP) – od 15 do 20 let</li>
                                <li>500 – Raziskovalci ter raziskovalke (RR) ter grče (Gr) – 21 let in več</li>
                            </ul>
                            @break
                        @case(4)
                            <p>Ekipe so lahko mešane, za vsako dekle se dobi bonus točke.</p>
                            @break
                        @case(5)
                            <p>Ekipa šteje 5 članov. Ekipa s 4 člani lahko tekmuje brez olajšav. Ekipa s 3 ali manj člani tekmuje izven konkurence. Ekipa s 6 in več tekmovalci tekmuje prav tako izven konkurence, a je lahko eden od članov ekipe vodnik, ki ekipo spremlja na poti (za kategorijo mlajši GG).</p>
                            @break
                        @case(6)
                            <p>V ekipi lahko samo en član odstopa od starostne kategorije v kateri tekmuje, vendar ne več kot za 2 leti. Starost tekmovalcev organizator lahko preveri s pregledom osebnih dokumentov tekom tekmovanja. Starost tekmovalcev se računa po koledarskem letu.</p>
                            @break
                        @case(7)
                            <p>Vsi tekmovalci tekmujejo na lastno odgovornost.</p>
                            @break
                        @case(8)
                            <p>Vodstvo tekmovanja vsaj mesec dni pred tekmovanjem objavi razpis tekmovanja. Lokacijo tekmovanja se lahko objavi kasneje, vendar ne kasneje kot 14 dni pred tekmovanjem.</p>
                            @break
                        @case(9)
                            <p>V razpisu ali na spletni strani vsaj 3 dni pred tekmovanjem organizator obvesti ekipe, na katerem listu DTK25 bo potekalo tekmovanje.</p>
                            @break
                        @case(10)
                            <p>Tekmovanje poteka v skladu s taborniškimi zakoni. Organizator si pridržuje pravico, da kršitelja diskvalificira. Nobena ekipa (mladoletni in polnoletni) se ne bo smela udeležiti tekmovanja, če pred tekmovanjem ne bo poslana izjava starešine na mail naveden v razpisu.</p>
                            @break
                        @case(11)
                            <p>Ekipe štartnino nakažejo že pred tekmovanjem na transakcijski račun organizatorja, ki je objavljen v razpisu tekmovanja. Po izteku roka prijav ne sprejemamo več prijav ekip. Plačilo štartnine oziroma prijave na dan tekmovanja niso mogoče.</p>
                            @break
                        @case(12)
                            <p>V primeru odpovedi ali preložitve tekmovanja iz različnih razlogov mora organizator o tem obvestiti vse prijavljene ekipe vsaj 4 dni pred tekmovanjem. Štartnine se ob odpovedi prijavljenim ekipam v celoti vrnejo.</p>
                            @break
                        @case(13)
                            <p>Ekipa ima možnost pritožbe zaradi nepravilnega sojenja ali drugega vzroka 45 minut po neuradni razglasitvi rezultatov.</p>
                            @break
                        @case(14)
                            <p>Uradna razglasitev rezultatov je v nedeljo zjutraj.</p>
                            @break
                        @case(15)
                            <p>Rezultati tekmovanja in slike so v roku enega tedna objavljeni na spletni strani tekmovanja: http://znot.rst-domzale.si.</p>
                            @break
                        @case(16)
                            <p>Za tiste, ki prespijo v telovadnici oz. dvorani so obvezni copati.</p>
                            @break
                        @case(17)
                            <p>Vsak udeleženec ZNOT-a prejme našitek tekmovanja.</p>
                            @break
                        @case(18)
                            <p>Štartna številka vsake ekipe se izžreba večer prej na zadnjem sestanku ZNOT ekipe, ob prijavi ekipe ali na sestanku vodij ekip po uvodnem zboru.</p>
                            @break
                        @case(19)
                            <p>Na vse kontrolne točke morajo priti vsi člani ekipe.</p>
                            @break
                        @case(20)
                            <p>Med orientacijskim pohodom tekmovalci ne smejo uporabljati prevoznih sredstev.</p>
                            @break
                        @case(21)
                            <p>Ekipa mora kontrolne točke (KT) na progi pobirati v pravilnem vrstnem redu. V nasprotnem primeru se ji KT, po katero se je ekipa vrnila, ne šteje.</p>
                            @break
                        @case(22)
                            <p>Proga poteka na državni topografski karti 1:25.000. Ekipa prejme vsaj 1 barvni izvod karte ob štartu na progo.</p>
                            @break
                        @case(23)
                            <p>Del proge lahko poteka na karti večjega merila (npr. karta za orientacijski tek). O tem so obveščene vodje ekip na sestanku vodij ekip po končanem uvodnem zboru.</p>
                            @break
                        @case(24)
                            <p>Ekipa naloge rešuje skupno, razen v primerih, ko je posebej določeno drugače.</p>
                            @break
                        @case(25)
                            <p>Ekipa štarta in rešuje naloge ob času, ki ga določi organizator.</p>
                            @break
                        @case(26)
                            <p>Topografski test se rešuje pred odhodom na orientacijski pohod.</p>
                            @break
                        @case(27)
                            <p>Ekipa je diskvalificirana, če prekorači dvakratni čas časovnice + čas, ki ga ima ekipa na voljo za reševanje nalog.</p>
                            @break
                        @case(28)
                            <p>Na tekmovanju se uporablja elektronski način potrjevanja prisotnosti na KT (SPORTIDENT). Ekipe brez čipov si ob prijavi sposodijo čip, ki ga priskrbi organizator (doplačilo 2€ ob plačilu štartnine). V primeru, da ekipa čip izgubi, mora poravnati račun za izgubljen čip v višini 40€ (velja za vse čipe, ki jih tekmovalci prejmejo in uporabljajo tekom tekmovanja). Na dan ZNOT-a se ob prijavi ekipe plača kavcija za čip v vrednosti 40€, katero se vrne ekipi na cilju ob vrnitvi čipa.</p>
                            @break
                        @case(29)
                            <p>V primeru, da SPORTIDENT postaja na KT odpove, ekipa lahko dokaže, svojo prisotnost na KT s pomočjo pametnih naprav(slika).</p>
                            @break
                        @case(30)
                            <p>V kolikor mora ekipa na KT zaradi gneče čakati na začetek opravljanja naloge, se ji upošteva mrtvi čas.</p>
                            @break
                        @case(31)
                            <p><span class="kt-title">Topografski test</span><br>
                            Vsak član ekipe posamično rešuje test s topografsko vsebino. Možno je doseči 12 točk na test. Čas reševanja je 5 minut. V primeru, da ekipa šteje 4 člane, lahko najhitrejši član reši tudi peti test. Če tekmovalec na testu ne označi številke izseka, s katerim si pomaga pri reševanju testa, ta za to nalogo avtomatično prejme nič točk.<p><b>Možno število točk: 60</b></p></p>
                            @break
                        @case(32)
                            <p><span class="kt-title">Bonus točke</span><br>
                            Za vsako dekle ekipa prejme nekaj bonus točk. V kategoriji PP in RR/Grče za eno dekle v ekipi 20 točk, za dve dekleti 40 točk, za tri dekleta 60 točk za štiri dekleta 80 točk in za pet deklet 100 točk. Možno število točk: 100</p>
                            @break
                        @case(33)
                            <p><span class="kt-title">Orientacijski pohod</span><br>
                            Vse KT so označene z zastavicami, na njih je SPORTIDENT postaja in „kresnička". Na živih KT lahko kontrolor pripiše število doseženih točk na KT na štartni list ekipe. Časovnica je določena na začetku tekmovanja. Za vsako minuto zamude dobi ekipa 2 negativni točki. Ekipe morajo najti čim več kontrolnih točk. Vsaka šteje 70 točk. Število kontrolnih točk za posamezno kategorijo določi traser glede na težavnost terena in orientacije. O številu KT so obveščene vodje ekip na sestanku vodij ekip, na dan tekmovanja. Ena izmed KT je »KT na vrisani poti«. Na vseh živih KT (razen na KT na vrisani poti) je določen čas za opravljanje naloge, ki se upošteva pri časovnici.<p><b>Možno število točk: GG 560+ PP 700+ RR/Gr 840+</b></p> </p>
                            @break
                        @case(34)
                            <p><span class="kt-title">Prihod pod kotom</span><br>
                            Ekipa mora v ravni vrsti priti na KT pod določenim kotom, ki je napisan na štartnem listu. Odstopanje mora biti manjše od 10 stopinj. Za odstopanje od 5 do 10 stopinj ekipa dobi polovično število točk. Kot pod katerim mora ekipa priti na KT je napisan na štartnem listu. Primer: Če je kot 90 st., mora ekipa priti na KT z vzhoda. <p><b>Možno število točk: 30</b></p></p>
                            @break
                        @case(35)
                            <p><span class="kt-title">Prehod minskega polja</span><br>
                            Je namenjen le PP in RR/Gr ekipam. Ekipa prehodi minsko polje s petimi razdaljami in petimi koti. Za odstopanje v krogu do 1 m pri posamezni točki, ekipa lahko nadaljuje z opravljanjem naloge. Če odstopa več kot za 1 m pa ekipa ne sme nadaljevati. Vsaka pravilno določena točka prinese ekipi 20 točk. Čas za prehod je 10 minut in je vštet v časovnico. Po 10 minutah mora ekipa prenehati z merjenjem. Na minskem polju ni dovoljeno meriti razdalje z laserskim razdaljemerom. <p><b>Možno število točk: 100</b></p></p>
                            @break
                        @case(36)
                            <p><span class="kt-title">Bombe!</span><br>
                            Podobno minskemu polju, namenjena je le GGjem. Po gozdu so postavljeni listki s črkami. Ekipa po istem principu kot za minsko polje (4 razdalje in 4 koti) išče posamezne bombe, ki so označene s črkami. Vsaka pravilna črka prinese 20 točk, dokler ekipa ne zgreši pravilne črke. Črke so med seboj oddaljene vsaj en meter. Časa za nalogo je 10 minut, ki je vštet v časovnico. Po 10 minutah mora ekipa prenehati z merjenjem. <p><b>Možno število točk: 80</b></p></p>
                            @break
                        @case(37)
                            <p><span class="kt-title">Spretnostno tekmovanje</span><br>
                            Ekipa mora uspešno prečkati progo in/ali opraviti praktične naloge, ki jih zahteva kontrolor. Upoštevata se čas ali natančnost prehoda. <p><b>Možno število točk: 75</b></p></p>
                            @break
                        @case(38)
                            <p><span class="kt-title">KT na vrisani poti</span><br>
                            se skriva nekje na poti med dvema kontrolnima točkama. Pot med tema dvema kontrolnima točkama je označena tudi na karti. Za najdemo KT ekipa prejme 70 točk. Za pravilni vris KT na karto ekipa dobi dodatnih 20 točk. KT se vriše s pikico ter krogcem premera do pol centimetra. Pravilnost vrisa se preveri na KT ali na cilju. Dobi lahko tudi 20 točk za krajšo nalogo, ki jo zahteva kontrolor. <p><b>Možno število točk: 40</b></p></p>
                            @break
                        @case(39)
                            <p><span class="kt-title">Mrtva KT</span><br>
                            je označena z zastavico in „kresničko", na njej sta perforator in SORTIDENT postaja. Na njej se ne opravlja naloge, lahko pa je prisoten kontrolor, ki preverja če je na KT prišla celotna ekipa.</p>
                            @break
                        @case(40)
                            <p><span class="kt-title">KT presenečenja</span><br>
                            Kot ime samo pove, lahko pričakujete nalogo presenečenja. <p><b>Možno število točk: 40</b></p></p>
                            @break
                        @case(41)
                            <p><span class="kt-title">Skica terena pod kotom</span><br>
                            Le za PP in RR/Gr ekipe. Ekipa riše skico terena pod kotom v merilu, ki ga določi organizator, z največjim polmerom 150 metrov. Čas risanja 20-30 min (točen čas pove organizator na sestanku vodij ekip-napisan bo tudi na časovnici) je vštet v časovnico. List za risanje skice dobi ekipa na kontrolni točki, kjer tudi odda končni izdelek. V primeru prekoračitve predvidenega časa, je za prvih 20 min prekoračitve -1 točka/min, za vsako nadaljnjo prekoračeno minuto pa -3 točke. <p><b>Možno število točk: 100</b></p></p>
                            @break
                        @case(42)
                            <p><span class="kt-title">»Direkt«</span><br>
                            Le za PP in RR/Gr ekipe. Na štartnem listu ali na živi KT ekipa prejme dva azimuta in eno razdaljo. Najprej gre ekipa za dano razdaljo (D1) v smeri prvega azimuta (A1), nato pa od tam naprej v smeri drugega azimuta (A2). Začetek drugega azimuta ni označen ne na karti, ne v naravi, temveč ekipa sama oceni kdaj se je za določeno razdaljo (D1) premaknila v smeri prvega azimuta (A1). Najmanjša razdalja do KT (od prejšnje KT) je 200 metrov, najdaljša pa 1500 metrov. Ekipa prejme točke (70) za najdeno KT »Direkt« le, če je našla tudi KT pred njo. <p><b>Možno število točk: 70</b></p></p>
                            @break
                        @case(43)
                            <p><span class="kt-title">Štafeta</span><br>
                            Je namenjena GG/PP/RR/Gr ekipam. Ekipa mora opraviti 5 predaj. Vsak član mora opraviti vsaj eno predajo, če ekipa šteje 4 člane, pa lahko eden od članov gre dvakrat. Naloga je vredna 100 točk. Točkuje se relativno po zaostanku glede na čas najboljše ekipe v kategoriji, vendar v primeru, da ekipa preseže dvojni čas najhitreje opravljene naloge, se naloga točkuje z nič točkami. Dodeljen čas za opravljanje naloge je 5min. Po 8 min pa se opravljanje naloge prekine in takrat se za vsako neperforirano postajo ekipi prišteje pribitek (1,5min). Končni seštevek opravljanja naloge se ne upošteva pri končnem času celotnega tekmovanja. V primeru, da tekmovalec namerno poškoduje progo, se nalogo točkuje z nič točkami. V primeru goljufije pa kontrolor ekipi dodeli kazenski pribitek 1,5min. <p><b>Možno število točk: 100</b></p></p>
                            
                            <h3>Tabela nalog po kategorijah</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Naloga</th>
                                        <th>GG</th>
                                        <th>PP</th>
                                        <th>RR/grče</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Topotest</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Bonus točke</td>
                                        <td></td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Orientacijski pohod</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Prihod pod kotom</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Spretnostno tekmovanje</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>KT na vrisani poti</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>KT presenečenja</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Mrtva KT</td>
                                        <td>X</td>
                                        <td>XX</td>
                                        <td>XXX</td>
                                    </tr>
                                    <tr>
                                        <td>Bombe</td>
                                        <td>X</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Prehod minskega polja</td>
                                        <td></td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Skica terena pod kotom</td>
                                        <td></td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>Štafeta</td>
                                        <td>X</td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>"Direkt"</td>
                                        <td></td>
                                        <td>X</td>
                                        <td>X</td>
                                    </tr>
                                    <tr>
                                        <td>MOŽNIH TOČK:</td>
                                        <td>780</td>
                                        <td>1160</td>
                                        <td>1280</td>
                                    </tr>
                                </tbody>
                            </table>

                            
                            @break
                        @case(44)
                            <p>Diskvalifikacije<br>
                            Ekipa je diskvalificirana, če med orientacijskim pohodom uporablja prevozna sredstva, če prekorači dvakratni čas in čas za naloge ali zaradi kršenja pravil in netaborniškega vedenja.</p>
                            @break
                        @case(45)
                            <p>Razglasitev in končne določbe<br>
                            Ekipa, ki zbere največ točk je zmagovalna ekipa. Prvim trem ekipam v posamezni kategoriji se podelijo praktične nagrade, lahko pa tudi za najboljše dosežke pri posameznih nalogah in skupno uvrstitev v točkovanju rodov.</p>
                            @break
                        @case(46)
                            <p>Pravila so bila zapisana in potrjena iz strani rodove uprave Rodu skalnih taborov, dne 13. 9. 2024</p>
                            @break
                        @endswitch
                        @endfor


</section>
</div>
</div>
</div>
@endsection