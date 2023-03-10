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
            "stars" => "Dutch",
        ],
        [
            "id" => 3,
            "name" => "Bert",
            "stars" => "Italian",
        ],
        [
            "id" => 4,
            "name" => "Kebab",
            "stars" => "Turkish",
        ],
        [
            "id" => 5,
            "name" => "Paella",
            "stars" => "Spanish",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Put it in the oven and go!",
            "tags" => ['cheese', 'oven']
        ],
        2 => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        3 => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],
        4 => [
            "recipe" => "Everytime in the city after midnight",
            "tags" => ['kapsalon', 'tasty', 'meat']
        ],
        5 => [
            "recipe" => "Specialty when on holiday in Spain",
            "tags" => ['fish']
        ],
    ];

    return $tags[$id];
}
