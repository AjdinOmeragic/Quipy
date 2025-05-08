<?php
require_once __DIR__ . '/../services/QuoteService.php';

Flight::set('quoteService', new QuoteService());

Flight::route('GET /quotes', function () {
    Flight::json(Flight::get('quoteService')->get_all());
});

Flight::route('GET /quotes/@id', function ($id) {
    try {
        Flight::json(Flight::get('quoteService')->get_by_id($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});

Flight::route('POST /quotes', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('quoteService')->add($data));
});

Flight::route('PUT /quotes/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('quoteService')->update($data, $id));
});

Flight::route('DELETE /quotes/@id', function ($id) {
    try {
        Flight::json(Flight::get('quoteService')->delete($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});
