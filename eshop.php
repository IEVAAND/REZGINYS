
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="REZGINYS rankų darbo dirbiniai: riešinės, vytinės juostos, pintinės, megztos piršinės ir daugiau.">

    <link href="css/menu-styles.css" rel="stylesheet">
    <link href="css/article-style.css" rel="stylesheet">
    <link href="css/footer-style.css" rel="stylesheet">
    <link href="css/filter.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REZGINYS | E.parduotuvė</title>
</head>

<body>
    <?php include('header.php'); ?>

    <article class="main-content">
        <h1>Rankų darbo dirbiniai, išsirinkite!</h1>

        <div id="selector">
            <button class="btn" onclick="filterSelection('all')">Visos kategorijos</button>
            <button class="btn" onclick="filterSelection('baskets')">Pinti krepšeliai</button>
            <button class="btn" onclick="filterSelection('braids')">Juostos</button>
            <button class="btn" onclick="filterSelection('gloves')">Pirštinės</button>
            <button class="btn" onclick="filterSelection('wrisband')">Riešinės</button>
        </div>



        <svg height="5" width=100%>
        <line x1="0" y1="0" x2="1000" y2="0" style="stroke:grey;stroke-width:3"/>
        </svg>
        <div class="products-container">

            <div class="product braids">
                <a href="assets/braids/Jurgos/braid_5.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Jurgos/min_braid_5.jpg" alt="Vytinė juosta žaliais raštais" title="Vytinė juosta žaliais raštais">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta žaliais raštais</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 2 m plotis 5 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 60,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product baskets">
                <a href="assets/baskets/basket_1.jpg" target="_blank" class="active-picture">
                    <img src="assets/baskets/min_basket_1.jpg" alt="Pintas krepšelis su aguona" title="Pintas krepšelis su aguona">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Pintas krepšelis su aguona</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pinta iš vytelių, dugnas dekupažas. Matmenys: ilgis 19 cm, plotis 14 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 4,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Vilmos/braid_1.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Vilmos/min_braid_1.jpg" alt="Vytinė geltona marga juosta" title="Vytinė geltona marga juosta">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė geltona marga juosta</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 2,50 m, plotis 2 cm. </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 40,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product wrisband">
                <a href="assets/wristband/riesines_1.jpg" target="_blank" class="active-picture">
                    <img src="assets/wristband/mini_riesines_1.jpg" alt="Riešinės, maunamos per pirštą" title="Riešinės, maunamos per pirštą">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Riešinės, maunamos per pirštą</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 70% vilna, 30% akrilas. Karoliukai: Čekiškas biseris.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product gloves">
                <a href="assets/gloves/min_gloves_4.jpg" target="_blank" class="active-picture">
                    <img src="assets/gloves/min_gloves_4.jpg" alt="Virbalais megztos baltos pirštinės" title="Virbalais megztos baltos pirštinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Virbalais megztos baltos pirštinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 100 % vilna. Delno ilgis 17 cm, plotis 9,5 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Vilmos/braid_2.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Vilmos/min_braid_2.jpg" alt="Vytinė mėlyna juosta" title="Vytinė mėlyna juosta">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė mėlyna juosta</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė, vilna. Ilgis 2,08 m plotis 3,1 cm. Skirta vieną kartą apsijuosti juosmenį. </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 40,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product baskets">
                <a href="assets/baskets/basket_2.jpg" target="_blank">
                    <img src="assets/baskets/min_basket_2.jpg" alt="Paprasta pinta dėžutė" title="Paprasta pinta dėžutė">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Paprasta pinta dėžutė</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pinta iš vytelių, dugnas medinis. Matmenys: ilgis 15 cm, plotis 9 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 3,50 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Vilmos/braid_3.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Vilmos/min_braid_3.jpg" alt="Vytinė juosta baltu raudonu raštu" title="Vytinė juosta baltu raudonu raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta baltu raudonu raštu</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė, vilna. Ilgis 2,37 m, plotis 3,2 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 46,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product baskets">
                <div>
                    <a href="assets/baskets/basket_3.jpg" target="_blank"><img src="assets/baskets/min_basket_3.jpg" alt="Maža dėžutė papuošalams" title="Maža dėžutė papuošalams"></a>
                </div>
                <div class="product-description">
                    <div class="product-name">
                        <p>Maža dėžutė papuošalams</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pinta iš vytelių, dugnas dekupažas. Matmenys: skersmuo 11 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 3,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Vilmos/braid_4.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Vilmos/min_braid_4.jpg" alt="Vytinė juosta raudonu raštu" title="Vytinė juosta raudonu raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta raudonu raštu</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 3,60 m, plotis 1,7 cm. Tinka juosmeniui apsijuosti, drabužių kraštams papuošti.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 36,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product gloves">
                <a href="assets/gloves/min_gloves_2.jpg" target="_blank" class="active-picture">
                    <img src="assets/gloves/min_gloves_2.jpg" alt="Virbalais megztos žalios pirštinės" title="Virbalais megztos žalios pirštinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Virbalais megztos žalios pirštinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 75 % akrilas, 25 % vilna. Delno ilgis 18 cm, plotis 9 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Jurgos/braid_9.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Jurgos/min_braid_9.jpg" alt="Vytinė juosta bangelių raštu" title="Vytinė juosta bangelių raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta bangelių raštu</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 3 m, plotis 2 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 48,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Jurgos/braid_8.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Jurgos/min_braid_8.jpg" alt="Vytinė juosta išskirtiniu raštu" title="Vytinė juosta išskirtiniu raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta išskirtiniu raštu</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 3 m, plotis 5 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 120,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product wrisband">
                <a href="assets/wristband/riesines_2.jpg" target="_blank" class="active-picture">
                    <img src="assets/wristband/mini_riesines_2.jpg" alt="Gelsvos riešinės" title="Gelsvos riešinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Gelsvos riešinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 70% vilna, 30% akrilas. Karoliukai: Čekiškas biseris. Matmenys: plotis 8 cm, ilgis 12 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 20,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Jurgos/braid_7.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Jurgos/min_braid_7.jpg" alt="Vytinė juosta išskirtiniu raštu" title="Vytinė juosta išskirtiniu raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta su pynute</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 80 % vilna, 20 % akrilas. Ilgis 2,5 m plotis 3,5 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 75,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product gloves">
                <a href="assets/gloves/min_gloves_1.jpg" target="_blank" class="active-picture">
                    <img src="assets/gloves/min_gloves_1.jpg" alt="Virbalais megztos geltonos pirštinės" title="Virbalais megztos geltonos pirštinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Virbalais megztos geltonos pirštinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 75 % akrilas, 25 % vilna. Delno ilgis 18 cm, plotis 9 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product wrisband">
                <a href="assets/wristband/riesines_4.jpg" target="_blank" class="active-picture">
                    <img src="assets/wristband/mini_riesines_4.jpg" alt="Pilkos riešinės" title="Pilkos riešinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Pilkos riešinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 70% vilna, 30% akrilas. Karoliukai: Čekiškas biseris. Matmenys: plotis 8 cm, ilgis 14 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 25,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product gloves">
                <a href="assets/gloves/min_gloves_5.jpg" target="_blank" class="active-picture">
                    <img src="assets/gloves/min_gloves_5.jpg" alt="Virbalais megztos rudos pirštinės" title="Virbalais megztos rudos pirštinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Virbalais megztos rudos pirštinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 50 % akrilas, 50 % vilna. Delno ilgis 18 cm, plotis 9 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product gloves">
                <a href="assets/gloves/min_gloves_6.jpg" target="_blank" class="active-picture">
                    <img src="assets/gloves/min_gloves_6.jpg" alt="Virbalais megztos žalsvos pirštinės" title="Virbalais megztos žalsvos pirštinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Virbalais megztos žalsvos pirštinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 75 % akrilas, 25 % vilna. Delno ilgis 18 cm, plotis 9 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 30,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product wrisband">
                <a href="assets/wristband/riesines_3.jpg" target="_blank" class="active-picture">
                    <img src="assets/wristband/mini_riesines_3.jpg" alt="Juodos riešinės" title="Juodos riešinės">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Juodos riešinės</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 70% vilna, 30% akrilas. Karoliukai: Čekiškas biseris. Matmenys: plotis 8 cm, ilgis 11 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 20,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product braids">
                <a href="assets/braids/Jurgos/braid_6.jpg" target="_blank" class="active-picture">
                    <img src="assets/braids/Jurgos/min_braid_6.jpg" alt="Vytinė juosta baltiškais raštais" title="Vytinė juosta baltiškais raštais">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Vytinė juosta baltiškais raštais</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Pusvilnė. Ilgis 2 m plotis 2,5 cm.
                        </p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 50,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

            <div class="product wrisband">
                <a href="assets/wristband/riesines_5.jpg" target="_blank" class="active-picture">
                    <img src="assets/wristband/mini_riesines_5.jpg" alt="Žalios riešinės su raudonu raštu" title="Žalios riešinės su raudonu raštu">
                </a>
                <div class="product-description">
                    <div class="product-name">
                        <p>Žalios riešinės su raudonu raštu</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p>Siūlo sudėtis: 70% vilna, 30% akrilas. Karoliukai: Čekiškas biseris. Matmenys: plotis 9 cm, ilgis 13 cm.</p>
                    </div>
                <br>
                <br>
                    <div>
                        <p class="price">Kaina: 25,00 Eur su PVM</p>
                    </div>
                <br>
                <br>
                    <div>
                        <a href="account.html">
                            <button class="shop-card">Į prekių krepšelį</button>
                        </a>
                <br>
                <br>
                    </div>
                </div>
            </div>

        </div>

    </article>

<script>

//document.getElementsByClassName("main-content");

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("product");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


//Add active class to the current button (highlight it)
//var btnContainer = document.getElementByClassName("selector");
//var btns = btnContainer.getElementsByClassName("btn");
//for (var i = 0; i < btns.length; i++) {
//  btns[i].addEventListener("click", function(){
//    var current = document.getElementsByClassName("active");
//    current[0].className = current[0].className.replace(" active", "");
//    this.className += " active";
//  });
//}
</script>


    <?php include('footer.php'); ?>

</body>
</html>

