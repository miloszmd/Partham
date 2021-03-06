<?php

use Partham\core\interfaces\IDatabaseService;
use Partham\core\repositories\AppRepository;

class DatabaseServiceStubForAppRepository implements IDatabaseService
{
    public function getAll($table, $reverse = false, $limit = 1000)
    {
        // TODO: Implement getAll() method.
    }

    public function get($columns, $table, $conditions, $limit = 1)
    {
        return [
            'id' => 1,
            'name' => 'Partham'
        ];
    }

    public function insert($table, $columns, $values)
    {
        // TODO: Implement insert() method.
    }

    public function update($table, $conditions, $values)
    {
        // TODO: Implement update() method.
    }
}

class WhenTheAppCouldBeRetrievedTest extends PHPUnit\Framework\TestCase
{
    private $result;

    public function setUp()
    {
        $subject = new AppRepository(new DatabaseServiceStubForAppRepository());
        $this->result = $subject->getById(1);
    }

    public function testOneResultIsReturned()
    {
        $this->assertEquals(sizeof($this->result), 1);
    }

    public function testNameIsMappedCorrectly()
    {
        $this->assertEquals($this->result, "Partham");
    }
}