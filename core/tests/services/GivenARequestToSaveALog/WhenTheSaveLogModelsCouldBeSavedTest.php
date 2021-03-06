<?php

use Partham\core\logs\ILogRepository;
use Partham\core\logs\LogService;

class WhenTheLogModelsCouldBeSavedTest extends PHPUnit\Framework\TestCase
{
    private $mock;

    public function setUp()
    {
        $this->mock = $this->createMock(ILogRepository::class);
        $this->mock->expects($this->once())->method('save')->with('1', '2');
    }

    public function testLogRepositoryGetsCalledWithCorrectlyMappedParameters()
    {
        $subject = new LogService($this->mock);
        $subject->invoke('1', '2');
    }
}