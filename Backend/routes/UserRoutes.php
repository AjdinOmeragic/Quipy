<?php

require_once __DIR__ . '/../services/UserService.php';

Flight::route('GET /users', function() {
    $service = new UserService();
    Flight::json($service->get_all());
});

Flight::route('GET /users/@id', function($id) {
    $service = new UserService();
    try {
        Flight::json($service->get_by_id($id));
    } catch (Exception $e) {
        Flight::halt(400, $e->getMessage());
    }
});

Flight::route('POST /users', function() {
    $data = Flight::request()->data->getData();
    $service = new UserService();
    Flight::json($service->add($data));
});

Flight::route('PUT /users/@id', function($id) {
    $data = Flight::request()->data->getData();
    $service = new UserService();
    try {
        Flight::json($service->update($data, $id));
    } catch (Exception $e) {
        Flight::halt(400, $e->getMessage());
    }
});

Flight::route('DELETE /users/@id', function($id) {
    $service = new UserService();
    try {
        Flight::json($service->delete($id));
    } catch (Exception $e) {
        Flight::halt(400, $e->getMessage());
    }
});