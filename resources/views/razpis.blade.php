@extends('layouts.app')

@section('title', 'ZNOT - Zimsko nočno orientacijsko tekmovanje')

@section('content')
<div class="hero-container">
    <div class="hero-background"></div>
    <div class="content-wrapper">
        <section class="hero-content">
            <h1>ZNOT 2026</h1>
            <p style="color: #4da8da">5. 12. – 6. 12. 2026</p>
                <a href="" target="_blank" style="display: flex; align-items: center; justify-content: center; margin-top: 10px; margin-bottom: 20px;">
                    <img src="/images/location.svg" alt="Lokacija" class="location">
                    <h3 class="text-location">Zaenkrat še skrivnost
                    </h3>
                </a>
            <div class="button-container">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScAAYwouYnRoz5jMS06n1Jc8GAVkxAevFhCTXVN2YKlnLE7gw/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava ekipe</a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSec4QFplObtpx4mDNU8B6jzI6b12KMxkDAi2b2m5EP5A_krhQ/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava solo</a>
            </div>
        </section>

        <div class="scrollable-content initial-hide">
            <section class="info-section">
                <h2>OSNOVNE INFORMACIJE</h2>
                <p><b>Kdaj:</b> 5. 12. – 6. 12. 2026</p>
                <p>Prijave se odprejo ob 14.00 in zaprejo ob 15.30. Nato sledi zbor ekip. Zaključni zbor ekip bo v nedeljo okoli 9.00.
                </p>
                <p><b>Kje: /</b>/</p>
                <br>
                <p>Vsi mladoletni udeleženci morajo ob prijavi predložiti še potrdilo za mladoletne osebe, v primeru da tega ne naredijo se ne bodo smeli udeležiti tekmovanja. Prav tako se nobena ekipa (mladoletni in polnoletni) ne bo smela udeležiti tekmovanja, če pred tekmovanjem ne bo poslana Izjava starešine na mail znot.rst@gmail.com. Netaborniške ekipe morajo prav tako poslati enako izjavo, ki jo podpiše predsednik kluba oz. vodja društva.
                </p>
                <div class="button-container" style="justify-content:center;">
                    <a href="{{ asset('files/izjava-staresine.pdf') }}" class="btn btn-custom btn-primary" target="_blank">Izjava starešine</a>
                    <a href="{{ asset('files/potrdilo-za-mladoletne.pdf') }}" class="btn btn-custom btn-primary" target="_blank">Potrdilo za mladoletne</a>
                </div>


            </section>

            <section class="info-section">
                <h2>STAROSTNE KATEGORIJE</h2>
                <ul>
                    <li>Mlajši gozdovniki in gozdovnice (GG) – od 11 do 12 let</li>
                    <li>Starejši gozdovniki in gozdovnice (GG) – od 13 do 14 let</li>
                    <li>Popotniki in popotnice (PP) – od 15 do 20 let</li>
                    <li>Raziskovalci in raziskovalke (RR) ter grče (Gr) – 21 let in več</li>
                </ul>
                <p><b>Prijavljene ekipe tekmujejo v ustrezni kategoriji. Starost tekmovalcev se računa po koledarskem letu.</b></p>
                <p>Število ekip je po kategorijah omejeno na 25 GG (mlajši) ekip, 25 GG (starejši) ekip, 30 PP ekip in 20 RR&GRČE ekip. Na podlagi števila prijavljenih ekip, se lahko te omejitve spremenijo. Spremembe bomo objavili v obvestilih. Vsako dekle ekipi prinese dodatne točke (skladno s pravili).</p>
            </section>

            <section class="info-section">
                <h2>PRIJAVE</h2>
                <p>Ob prijavi ekipa navede: starostno kategorijo, v kateri tekmuje, ime, priimek, elektronski naslov in telefonsko številko vodje ekipe, prehranske posebnosti.</p>
                <p>Na tekmovanju se uporablja elektronski sistem perforiranja (SportIdent), zato naj ekipe, ki imajo svoje čipe, to navedejo ob prijavi ter napišejo njegovo številko. <b>Vse ostale ekipe, ki si bodo čip izposodile od organizatorja, morajo pri prijavi oz. pri plačilu štartnine plačati dodatna 2€ za izposojo.</b></p>
                <!-- <div class="button-container">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScxIFI6naDXaDlA4T8-yiw7UT1bbcayUfp66t0dd-rEqXXtQQ/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava ekipe</a>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSecCuyssADh18s3zzXIaI0_kLvA__nqNzVBTYOyZPzf_yNWrQ/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava solo</a>
                </div> -->

                <p>Rok plačila štartnine in s tem prijav je <b>ponedeljek 25. november 2026 do polnoči</b>. Prijava ekipe je veljavna šele ob plačilu štartnine in ob poslanem potrdilu plačila na <b>znot.rst@gmail.com</b>, iz katerega je razvidno <b>ime ekipe, rod in datum plačila</b>. Ob nejasnem/nepravilnem plačilu vrnemo štartnino. Štartnina ob prijavi do vključno <b>ponedeljek 13. novembra 2026</b> do polnoči znaša <b>55€</b>(57€ ob izposoji čipa) na ekipo. Po 13. novembru 2026 se štartnina zviša na <b>75€</b> (77€ ob izposoji čipa) na ekipo.
                </p>

                <p>Cena se obračuna glede na datum plačila in NE datum izpolnjenega obrazca oz. je nižja cena veljavna le pri plačilu znotraj roka cenejših prijav. V primeru izposoje čipa od organizatorja, mora ekipa ob plačilu štartnine (v primeru cenejših in dražjih prijav) plačati dodatna 2€.
                </p>

                
                <p>Odjave so možne do vključno ponedeljka 25. novembra 2026. Do tega datuma vračamo štartnino. Pri odjavi po <b>26. novembru 2026</b> štartnine ne vračamo (prav tako ne plačila za izposojo čipa).
                </p>

                <p>Na dan ZNOT-a se ob prijavi ekipe plača kavcija za čip v vrednosti 40€, katero se vrne ekipi na cilju ob vrnitvi čipa.
                </p>

                <div class="button-container" style="justify-content:center;">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScAAYwouYnRoz5jMS06n1Jc8GAVkxAevFhCTXVN2YKlnLE7gw/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava ekipe</a>
                </div>
                <br>



                <h4>Štartnino lahko poravnate na:</h4>
                <p>transakcijskem računu: <b>SI56-0230-0001-2196-019</b> odprtem pri Novi ljubljanski banki d.d.
                </p>

                <p>BIC banke: <b>LJBASI2X</b>
                </p>

                <p>namen nakazila: <b>ime ekipe + ime rodu</b> 
                </p>
                <p> uporabite sklic: <b>1111-2026</b>
                </p>

                <p> prejemnik: <b>RST Domžale, Kopališka cesta 4, 1230 Domžale</b> 
                </p>

                <p>(Upoštevali bomo samo tista plačila, za katera se bo iz namena plačila nedvoumno videlo za katero ekipo je namenjeno).
                </p>

                <p>Plačilo štartnin in prijave na dan tekmovanja niso možne. Pridržujemo si pravico, da rok prijav skrajšamo ob zapolnitvi prostih mest!
                </p>
            </section>

            <section class="info-section">
                <h2>SOLO KATEGORIJA</h2>
                <p>Za vodnike, ki na ZNOT pridejo kot spremljevalci članov prijavnine ni. Za vse ostale znaša 7€. 
                </p>
                <div class="button-container" style="justify-content:center;">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSec4QFplObtpx4mDNU8B6jzI6b12KMxkDAi2b2m5EP5A_krhQ/viewform" class="btn btn-custom btn-primary" target="_blank">Prijava solo</a>
                </div>

            </section>
        </div>
    </div>
</div>

@endsection