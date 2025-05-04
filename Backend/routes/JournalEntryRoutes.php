<?php
require_once __DIR__ . '/../services/JournalEntryService.php';

Flight::set('journalEntryService', new JournalEntryService());

Flight::route('GET /journal-entries', function () {
    Flight::json(Flight::get('journalEntryService')->get_all());
});

Flight::route('GET /journal-entries/@id', function ($id) {
    try {
        Flight::json(Flight::get('journalEntryService')->get_by_id($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});

Flight::route('POST /journal-entries', function () {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('journalEntryService')->add($data));
});

Flight::route('PUT /journal-entries/@id', function ($id) {
    $data = Flight::request()->data->getData();
    Flight::json(Flight::get('journalEntryService')->update($data, $id));
});

Flight::route('DELETE /journal-entries/@id', function ($id) {
    try {
        Flight::json(Flight::get('journalEntryService')->delete($id));
    } catch (Exception $e) {
        Flight::json(['error' => $e->getMessage()], 400);
    }
});
