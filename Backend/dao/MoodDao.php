<?php
require_once __DIR__ . '/BaseDaov2.php';

class MoodDao extends BaseDaov2
{
    public function __construct()
    {
        parent::__construct('moods');
    }

    public function getMoodsByUser($user_id) {
        return $this->query("SELECT * FROM moods WHERE user_id = :user_id", ['user_id' => $user_id]);
    }
    
}

