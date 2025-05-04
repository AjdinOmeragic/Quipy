<?php
require_once __DIR__ . '/../services/BaseService.php';
require_once __DIR__ . '/../dao/MoodDao.php';

class MoodService extends BaseService {
    public function __construct() {
        $dao = new MoodDao();
        parent::__construct($dao);
    }

    public function get_all() {
        return parent::get_all();
    }

    public function get_by_id($id) {
        if (!is_numeric($id) || $id <= 0) {
            throw new Exception("Enter Valid ID");
        }
        return parent::get_by_id($id);
    }

    public function add($entity) {
        return parent::add($entity);
    }

    public function update($entity, $id, $id_column = "id") {
        return parent::update($entity, $id, $id_column);
    }

    public function delete($id) {
        if (!is_numeric($id) || $id <= 0) {
            throw new Exception("Enter Valid ID");
        }
        return parent::delete($id);
    }
}

?>