<?php
require_once __DIR__ . '/BaseDaov2.php';

class QuoteDao extends BaseDaov2
{
    public function __construct()
    {
        parent::__construct('quotes');
    }
}