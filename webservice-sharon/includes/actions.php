<?php
/**
 * @return array
 */
function getReviews()
{
    return [
        [
            "id" => 1,
            "name" => "Bob",
            "stars" => "2",
        ],
        [
            "id" => 2,
            "name" => "Hannah",
            "stars" => "1",
        ],
        [
            "id" => 3,
            "name" => "Bert",
            "stars" => "3",
        ],
        [
            "id" => 4,
            "name" => "Sandra",
            "stars" => "2",
        ],
        [
            "id" => 5,
            "name" => "Belle",
            "stars" => "1",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getReviewDetails($id)
{
    $tags = [
        1 => [
            "feedback" => "De lift werkt 9/10 keren niet, ik raad zeker niet aan om gebruik te maken van dit station.",
            "tags" => ['lift', 'afgeraden']
        ],
        2 => [
            "feedback" => "De lift (als hij al werkt) stinkt enorm naar urine.",
            "tags" => ['lift', 'afgeraden']
        ],
        3 => [
            "feedback" => "Vaak werkt de lift niet maar gelukkig zijn er twee.",
            "tags" => ['lift'],
        ],
        4 => [
            "feedback" => "Er lopen weinig werknemers rond om te helpen mocht het nodig zijn.",
            "tags" => ['werknemers', 'afgeraden']
        ],
        5 => [
            "feedback" => "Er zit een stoeptegel los waardoor ik het station niet op kom.",
            "tags" => ['stoeptegel', 'afgeraden']
        ],
    ];

    return $tags[$id];
}
