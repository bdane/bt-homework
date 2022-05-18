<?php

$sviPodaci = array(
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

function married($married, $gender)
{
    if ($married) {
        if ($gender == 'male') {
            return "ozenjen je";
        } else {
            return "udata je";
        }
    } else {
        if ($gender == 'male') {
            return "nije ozenjen";
        } else {
            return "nije udata";
        }
    }
}

foreach ($sviPodaci as $kandidat) {

    echo "<p>" . $kandidat['name'] . " " . $kandidat['last_name'] . " ima " . $kandidat['age'] . " godina i " . married($kandidat['married'], $kandidat['gender']) . ". ";
    echo "Ima prosecnu ocenu " . $kandidat['avg_rating'] . ", a kurseve koje trenutno slusa su: ";
    foreach ($kandidat['courses'] as $key => $courses) {
        echo $courses;
        if ($key == count($kandidat['courses']) - 1) {
            echo ".</p>";
        } else {
            echo ", ";
        }
    }
}
