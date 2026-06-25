<?php

test('all location pages return a successful response', function ($routeName) {
    $response = $this->get(route($routeName));

    $response->assertStatus(200);
})->with([
    'locations.mansarovar',
    'locations.vaishalinagar',
    'locations.jhotwara',
    'locations.jagatpura',
    'locations.banipark',
    'locations.sanganer',
    'locations.malviyanagar',
    'locations.sitapura',
    'locations.pratapnagar',
]);
