<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: relative;
            top: 0;
            bottom: 0;
            width: 100%;
            height: 750px;
            margin: 0 auto;
        }

        .marker {
            display: block;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            padding: 0;
        }


        #marker {
            background-image: url('https://docs.mapbox.com/mapbox-gl-js/assets/washington-monument.jpg');
            background-size: cover;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
        }

        .mapboxgl-popup {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <?php include('./components/header.php') ?>

    <section class="main">
        <div class="flex flex-row justify-between w-9/12 mx-auto mt-40">
            <div class="w-5/12">
                <p>
                Een kaart kan een onschatbare bron van informatie zijn voor mensen met beperkte mobiliteit die problemen hebben met lopen. Bij het reizen met het openbaar vervoer kan het vinden van de juiste route en stations een uitdaging zijn, vooral als je niet bekend bent met de stad. Gelukkig zijn er nu speciale kaarten beschikbaar die specifiek zijn ontworpen voor mensen met beperkte mobiliteit en die informatie bieden over de toegankelijkheid van treinstations.
                <br/><br/>
Met behulp van een toegankelijkheidskaart kunnen mensen met beperkte mobiliteit snel en gemakkelijk zien welke treinstations toegankelijk zijn voor rolstoelgebruikers, welke stations liften hebben, welke stations een roltrap hebben en welke stations een rolstoelhelling hebben. Deze informatie kan hen helpen bij het plannen van hun reizen en het verminderen van stress en angst bij het navigeren door een onbekende stad.
<br/><br/>
Een goede toegankelijkheidskaart moet duidelijk en overzichtelijk zijn, met alle nodige informatie gemakkelijk te begrijpen. Door het gebruik van deze kaarten kunnen mensen met beperkte mobiliteit meer zelfvertrouwen krijgen bij het reizen met het openbaar vervoer en hun onafhankelijkheid vergroten, waardoor ze meer kansen hebben om te genieten van de vele bezienswaardigheden en attracties die onze steden te bieden hebben.
                </p>
            </div>
            <div class="w-5/12">
                <img src="https://picsum.photos/seed/picsum/400/400" alt="">
            </div>
        </div>
        <section class="mx-auto mt-80">
            <div class="" id="map"></div>
        </section>
    </section>

    <script>
        let averageLocalStorage = JSON.parse(window.localStorage.getItem('averages'))
        


        // TO MAKE THE MAP APPEAR YOU MUST
        // ADD YOUR ACCESS TOKEN FROM
        // https://account.mapbox.com
        mapboxgl.accessToken = 'pk.eyJ1Ijoic3RyeGN0IiwiYSI6ImNsZmdzaHRkODNwbjUzdG80M2E0c25pYzIifQ.Uv6n7vdCqPILpXYIZU2VYQ';
        const map = new mapboxgl.Map({
            container: 'map',
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12',
            center: [4.474463, 51.914925],
            zoom: 11.15
        });

        map.on('load', () => {
            map.addSource('places', {
                // This GeoJSON contains features that include an "icon"
                // property. The value of the "icon" property corresponds
                // to an image in the Mapbox Streets style's sprite.
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': [{
                            'type': 'Feature',
                            'properties': {
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                                
                                // 'description': '<strong>Make it Mount Pleasant</strong><p><a href="http://www.mtpleasantdc.com/makeitmtpleasant" target="_blank" title="Opens in a new window">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.473678571039766, 51.91633765019952]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,

                                // 'description': '<strong>Mad Men Season Five Finale Watch Party</strong><p>Head to Lounge 201 (201 Massachusetts Avenue NE) Sunday for a <a href="http://madmens5finale.eventbrite.com/" target="_blank" title="Opens in a new window">Mad Men Season Five Finale Watch Party</a>, complete with 60s costume contest, Mad Men trivia, and retro food and drink. 8:00-11:00 p.m. $10 general admission, $20 admission and two hour open bar.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.4667859911319185, 51.91220486849157]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                               
                                // 'description': '<strong>Big Backyard Beach Bash and Wine Fest</strong><p>EatBar (2761 Washington Boulevard Arlington VA) is throwing a <a href="http://tallulaeatbar.ticketleap.com/2012beachblanket/" target="_blank" title="Opens in a new window">Big Backyard Beach Bash and Wine Fest</a> on Saturday, serving up conch fritters, fish tacos and crab sliders, and Red Apron hot dogs. 12:00-3:00 p.m. $25.grill hot dogs.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.432773517203808, 51.91334239729775]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                               
                                // 'description': '<strong>Ballston Arts & Crafts Market</strong><p>The <a href="http://ballstonarts-craftsmarket.blogspot.com/" target="_blank" title="Opens in a new window">Ballston Arts & Crafts Market</a> sets up shop next to the Ballston metro this Saturday for the first of five dates this summer. Nearly 35 artists and crafters will be on hand selling their wares. 10:00-4:00 p.m.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.445779396945856, 51.91007949415251]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                                
                                // 'description': '<strong>Seersucker Bike Ride and Social</strong><p>Feeling dandy? Get fancy, grab your bike, and take part in this year\'s <a href="http://dandiesandquaintrelles.com/2012/04/the-seersucker-social-is-set-for-june-9th-save-the-date-and-start-planning-your-look/" target="_blank" title="Opens in a new window">Seersucker Social</a> bike ride from Dandies and Quaintrelles. After the ride enjoy a lawn party at Hillwood with jazz, cocktails, paper hat-making, and more. 11:00-7:00 p.m.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.458221806731108, 51.90930392963557]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                              
                                // 'description': '<strong>Capital Pride Parade</strong><p>The annual <a href="http://www.capitalpride.org/parade" target="_blank" title="Opens in a new window">Capital Pride Parade</a> makes its way through Dupont this Saturday. 4:30 p.m. Free.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.4817151483772255, 51.913695876983944]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                                
                                // 'description': '<strong>Muhsinah</strong><p>Jazz-influenced hip hop artist <a href="http://www.muhsinah.com" target="_blank" title="Opens in a new window">Muhsinah</a> plays the <a href="http://www.blackcatdc.com">Black Cat</a> (1811 14th Street NW) tonight with <a href="http://www.exitclov.com" target="_blank" title="Opens in a new window">Exit Clov</a> and <a href="http://godsilla.bandcamp.com" target="_blank" title="Opens in a new window">Gods’illa</a>. 9:00 p.m. $12.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.481288601027359, 51.91822122310532]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                              
                                // 'description': '<strong>A Little Night Music</strong><p>The Arlington Players\' production of Stephen Sondheim\'s  <a href="http://www.thearlingtonplayers.org/drupal-6.20/node/4661/show" target="_blank" title="Opens in a new window"><em>A Little Night Music</em></a> comes to the Kogod Cradle at The Mead Center for American Theater (1101 6th Street SW) this weekend and next. 8:00 p.m.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.489573248744942, 51.91993968139612]
                            }
                        },
                        {
                            'type': 'Feature',
                            'properties': {
                                // 'description': '<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>3/5</p></div>',
                                'description': `<div class="flex flex-row"><div class="flex flex-col"><p>Waar?</p> <i class="fa-solid fa-train"></i> </div> <span class="mx-2"> : </span> <p>Ondergronds</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Rolstoel <br/> Toegangelijk?</p> <i class="fa-brands fa-accessible-icon"></i> </div> <span class="mx-2"> : </span> <p>Ja</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Melding?</p> <a href="./status.php"><i class="fa-sharp fa-solid fa-circle-exclamation"></i> </a>  </div> <span class="mx-2"> : </span> <p>Lift werkt</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Drukte?</p> <i class="fa-solid fa-person"></i> </div> <span class="mx-2"> : </span> <p>1/5</p></div> <div class="flex flex-row"><div class="flex flex-col"><p>Beoordeling?</p> <a href="./review.php"> <i class="fa-solid fa-star"></i>  </a> </div> <span class="mx-2"> : </span> <p>${averageLocalStorage}/5</p></div>`,
                              
                                // 'description': '<strong>Truckeroo</strong><p><a href="http://www.truckeroodc.com/www/" target="_blank">Truckeroo</a> brings dozens of food trucks, live music, and games to half and M Street SE (across from Navy Yard Metro Station) today from 11:00 a.m. to 11:00 p.m.</p>',
                                'icon': 'rail'
                            },
                            'geometry': {
                                'type': 'Point',
                                'coordinates': [4.496567525284764, 51.92309172396853]
                            }
                        }
                    ]
                }
            });
            // Add a layer showing the places.
            map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    'icon-image': ['get', 'icon'],
                    'icon-allow-overlap': true
                }
            });

            // When a click event occurs on a feature in the places layer, open a popup at the
            // location of the feature, with description HTML from its properties.
            map.on('click', 'places', (e) => {
                // Copy coordinates array.
                const coordinates = e.features[0].geometry.coordinates.slice();
                const description = e.features[0].properties.description;

                // Ensure that if the map is zoomed out such that multiple
                // copies of the feature are visible, the popup appears
                // over the copy being pointed to.
                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }

                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
            });

            // Change the cursor to a pointer when the mouse is over the places layer.
            map.on('mouseenter', 'places', () => {
                map.getCanvas().style.cursor = 'pointer';
            });

            // Change it back to a pointer when it leaves.
            map.on('mouseleave', 'places', () => {
                map.getCanvas().style.cursor = '';
            });
        });


    </script>
    <script src="review.js"></script>

</body>

</html>