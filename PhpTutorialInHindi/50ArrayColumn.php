<?php
$array = array(
    array(
        'id' => 2201,
        'first_name' => 'Anil',
        'last_name' => 'kapoor',
    ),
    array(
        'id' => 2202,
        'first_name' => 'Salman',
        'last_name' => 'khan',
    ),
    array(
        'id' => 2203,
        'first_name' => 'John',
        'last_name' => 'Abraham',
    )
    );

    $newArray = array_column($array,'first_name','id');

echo "<pre>";
print_r($newArray);
echo "</pre>";

    ?>