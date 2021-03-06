<?php namespace Partham\core\repositories;

use Partham\core\interfaces\IDatabaseService;

class AppRepository
{
    private $database;

    public function __construct(IDatabaseService $database)
    {
        $this->database = $database;
    }

    public function getById($appId)
    {
        $record = $this->database->get(['name'], 'apps', ['id', $appId]);
        return $record['name'];
    }

    public function getIdByName($appName)
    {
        // TODO: when app is not found then the default $appName to create a new one
        // TODO: later a dashboard could be created to create a mapping with a nicer name

        switch ($appName) {
            case 'game':
                $translatedName = 'TypeScript Game';
                break;
            case 'ci':
                $translatedName = 'Partham';
                break;
            case 'chat':
                $translatedName = 'Awesome Chat';
                break;
            default:
                $translatedName = 'Partham';
                break;
        }


        // TODO: database class should handle difference between string and number, if not number then add quotes
        $record = $this->database->get(['id'], 'apps', ['name', "'{$translatedName}'"]);
        return $record['id'];
    }
}