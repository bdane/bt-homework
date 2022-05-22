<?php

/**
 * This function search char or string in name or last name
 * @param array $users
 * 
 * @return array
 */
function search_users(array $users, string $searchContent = ""): array
{
    $newArray = [];
    foreach ($users as $key => $user) {
        if (strpos(strtolower($user['name']), strtolower($searchContent)) !== false || strpos(strtolower($user['last_name']), strtolower($searchContent)) !== false) {
            $newArray[] = $user;
        }
    }

    return $newArray;
}

$users = array(
    array(
        'name' => 'Pera',
        'last_name' => 'Peric',
        'age' => 28,
        'gender' => 'male',
        'avg_rating' => 7.5,
        'married' => false,
        'courses' => ['laravel', 'react', 'jQuery']
    ),
    array(
        'name' => 'Mika',
        'last_name' => 'Mikic',
        'age' => 32,
        'gender' => 'male',
        'avg_rating' => 8.1,
        'married' => true,
        'courses' => ['Python', 'Django', 'jQuery']
    ),
    array(
        'name' => 'Zorka',
        'last_name' => 'Zoric',
        'age' => 22,
        'gender' => 'female',
        'avg_rating' => 8.6,
        'married' => false,
        'courses' => ['JAVA', 'MySQL', 'Spring']
    ),
    array(
        'name' => 'Sima',
        'last_name' => 'Simic',
        'age' => 25,
        'gender' => 'male',
        'avg_rating' => 9.2,
        'married' => true,
        'courses' => ['HTML', 'CSS', 'PHP']
    ),
    array(
        'name' => 'Mira',
        'last_name' => 'Miric',
        'age' => 30,
        'gender' => 'female',
        'avg_rating' => 8.4,
        'married' => true,
        'courses' => ['WordPress', 'PHP', 'JavaScript']
    )
);

echo "<pre>";
var_dump(search_users($users, "Sima"));
echo "</pre>";
echo "<hr><br>";
echo "<pre>";
var_dump(search_users($users, "mi"));
echo "</pre>";
echo "<hr><br>";
echo "<pre>";
var_dump(search_users($users, "ric"));
echo "</pre>";
echo "<hr><br>";
echo "<pre>";
var_dump(search_users($users, "asder"));
echo "</pre>";
