<?php



/**
 * @return array
 */
function getReviews()
{

    $elavatorInfo = [
//        "count" => 5,
        "results" => [
            [
                "id" => 1,
                "name" => "station name",
                "elevator_height" => "5 Meter",
                "status" => "Werkend",
                "closed" => "gesloten tot 15 maart 2023",
                "accessibility" => "Geschikt voor mensen met rolstoel",
                "specifics" => "Geen bijzonderheden",
                "image" =>  "images/lift.jpg"
            ],
            [
                "id" => 2,
                "elevator_height" => "5 Meter",
                "status" => "Werkend",
                "closed" => "gesloten tot 15 maart 2023",
                "accessibility" => "Geschikt voor mensen met rolstoel",
                "specifics" => "Geen bijzonderheden"
            ],
            [
                "id" => 3,
                "elevator_height" => "5 Meter",
                "status" => "Werkend",
                "closed" => "gesloten tot 15 maart 2023",
                "accessibility" => "Geschikt voor mensen met rolstoel",
                "specifics" => "Geen bijzonderheden"
            ],
            [
                "id" => 4,
                "elevator_height" => "5 Meter",
                "status" => "Werkend",
                "closed" => "gesloten tot 15 maart 2023",
                "accessibility" => "Geschikt voor mensen met rolstoel",
                "specifics" => "Geen bijzonderheden"
            ],
            [
                "id" => 5,
                "elevator_height" => "5 Meter",
                "status" => "Werkend",
                "closed" => "gesloten tot 15 maart 2023",
                "accessibility" => "Geschikt voor mensen met rolstoel",
                "specifics" => "Geen bijzonderheden"
            ]
        ]
    ];

    return $elavatorInfo;
}

/**
 * @param $id
 * @return mixed
 */
function getReviewDetails($id)
{
    $tags = [
        1 => [
            "comment" => "De lift werkt 9/10 keren niet, ik raad zeker niet aan om gebruik te maken van dit station.",
            "tags" => ['lift', 'afgeraden']
        ],
        2 => [
            "comment" => "De lift (als hij al werkt) stinkt enorm naar urine.",
            "tags" => ['lift', 'afgeraden']
        ],
        3 => [
            "comment" => "Vaak werkt de lift niet maar gelukkig zijn er twee.",
            "tags" => ['lift'],
        ],
        4 => [
            "comment" => "Er lopen weinig werknemers rond om te helpen mocht het nodig zijn.",
            "tags" => ['werknemers', 'afgeraden']
        ],
        5 => [
            "comment" => "Er zit een stoeptegel los waardoor ik het station niet op kom.",
            "tags" => ['stoeptegel', 'afgeraden']
        ],
    ];

    return $tags[$id];
}
