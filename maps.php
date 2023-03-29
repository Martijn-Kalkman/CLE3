<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maps</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
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
    </style>
</head>

<body>
    <?php include('./components/header.php') ?>

    <section class="main">
        <div class="flex flex-row justify-between w-9/12 mx-auto mt-40">
            <div class="w-5/12">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, dolores repudiandae? Autem nam distinctio exercitationem architecto perferendis, eligendi laboriosam omnis voluptates voluptatibus. Optio, saepe aperiam ullam odit cum eius commodi incidunt cumque dignissimos quis nostrum quo officia eos, ex doloremque voluptates rem omnis. Inventore enim, facilis alias beatae, obcaecati aperiam sunt blanditiis debitis perspiciatis temporibus sequi earum vel, fuga quod. Placeat fuga quod consequatur impedit consequuntur dignissimos voluptate esse numquam eos ab nihil porro, cum ut. Minus, aperiam laudantium. Officia, voluptatum cum praesentium et accusamus repudiandae voluptates architecto culpa voluptatem quisquam ipsum est quod adipisci, excepturi eius ratione harum iusto porro corrupti repellat unde, blanditiis aliquam cupiditate obcaecati! Sequi ratione laborum quisquam consequuntur omnis soluta perspiciatis provident eius dolor illum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id dolorem animi illo ea quam esse quidem, consequatur voluptas itaque nam deserunt consectetur, voluptatem similique blanditiis velit distinctio saepe? Cum, quis!</p>
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
        mapboxgl.accessToken = 'pk.eyJ1Ijoic3RyeGN0IiwiYSI6ImNsZmdzaHRkODNwbjUzdG80M2E0c25pYzIifQ.Uv6n7vdCqPILpXYIZU2VYQ';

        const geojson = {
            'type': 'FeatureCollection',
            'features': [{
                    'type': 'Feature',
                    'properties': {
                        'message': 'Foo',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.473678571039766, 51.91633765019952]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Bar',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.4667859911319185, 51.91220486849157]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Bar',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.432773517203808, 51.91334239729775]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Bar',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.445779396945856, 51.91007949415251]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Bar',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.458221806731108, 51.90930392963557]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz1',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.4817151483772255, 51.913695876983944]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz2',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.481288601027359, 51.91822122310532]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz4',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.489573248744942, 51.91993968139612]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz9',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.496567525284764, 51.92309172396853]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz10',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.458247259936562, 51.930510661598284]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'Baz11',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.470050713984024, 51.92391693754955]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram1',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.480619549433688, 51.91865445218559]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram2',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram3',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram4',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram5',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram6',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                {
                    'type': 'Feature',
                    'properties': {
                        'message': 'tram7',
                        'iconSize': [25, 25]
                    },
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [4.478320133811918, 51.923267873572975]
                    }
                },
                
            ]
        };

        const map = new mapboxgl.Map({
            container: 'map', // container ID
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            center: [4.474463, 51.914925], // starting position [lng, lat]
            zoom: 13 // starting zoom
        });


        // Add markers to the map.
        for (const marker of geojson.features) {
            // Create a DOM element for each marker.
            const el = document.createElement('div');
            const width = marker.properties.iconSize[0];
            const height = marker.properties.iconSize[1];
            el.className = 'marker';
            el.style.backgroundImage = `url(https://placekitten.com/g/${width}/${height}/)`;
            el.style.width = `${width}px`;
            el.style.height = `${height}px`;
            el.style.backgroundSize = '100%';

            el.addEventListener('click', () => {
                window.alert(marker.properties.message);
            });

            // Add markers to the map.
            new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)
                .addTo(map);
        }
    </script>
</body>

</html>