

<?php



/**
 * @return array
 */
function getReviews()
{

    $data = [
        "results" => [
            [
                "id" => 1,
                "name" => "Bob",
                "rating" => 2,
            ],
            [
                "id" => 2,
                "name" => "Hannah",
                "rating" => 1,
            ],
            [
                "id" => 3,
                "name" => "Bert",
                "rating" => 3,
            ],
            [
                "id" => 4,
                "name" => "Sandra",
                "rating" => 2,
            ],
            [
                "id" => 5,
                "name" => "Belle",
                "rating" => 1,
            ]
        ]
    ];

    return $data;
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
