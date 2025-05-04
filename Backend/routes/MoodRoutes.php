<?php
require_once __DIR__ . '/../services/MoodService.php';

Flight::set('moodService', new MoodService());

Flight::route('GET /moods', function () {
    Flight::json(Flight::get('moodService')->get_all());
});

Flight::route('GET /moods/@id', function ($id) {
    try {
        Flight::json(Flight::get('moodService')->get_by_id($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});

Flight::route('POST /moods', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('moodService')->add($data));
});

Flight::route('PUT /moods/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('moodService')->update($data, $id));
});

Flight::route('DELETE /moods/@id', function ($id) {
    try {
        Flight::json(Flight::get('moodService')->delete($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});
