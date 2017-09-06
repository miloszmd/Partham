<?php namespace Partham\core\repositories;

use Partham\core\services\DatabaseService;

class AppRepository
{
    private $database;

    public function __construct(DatabaseService $database)
    {
        $this->database = $database;
    }

    public function getById($appId)
    {
        $record = $this->database->get(['name'], 'apps', ['id', $appId]);
        return mysqli_fetch_assoc($record)['name'];
    }
}