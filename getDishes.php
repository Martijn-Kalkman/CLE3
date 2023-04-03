<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "elevator_height" => "5 Meter",
            "status" => "Werkend",
            "closed" => "gesloten tot 15 maart 2023",
            "accessibility" => "Geschikt voor mensen met rolstoel",
            "specifics" => "Geen bijzonderheden"
        ],
        [
            "id" => 2,
            "name" => "Kale",
            "kitchen" => "Dutch",
        ],
        [
            "id" => 3,
            "name" => "Lasagna",
            "kitchen" => "Italian",
        ],
        [
            "id" => 4,
            "name" => "Kebab",
            "kitchen" => "Turkish",
        ],
        [
            "id" => 5,
            "name" => "Paella",
            "kitchen" => "Spanish",
        ]
    ];
}

// Set the content type header
header("Content-Type: application/json");

// Output the dishes as JSON
echo json_encode(getDishes());




