<?php
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../Session.php';

class SessionTest extends TestCase
{
    private $sessionClass; 

    public function setUp() : void
    {
        $this->sessionClass = new SessionClass();
    }

    public function testSessionObject() : void
    {

        $this->assertEquals(get_class($this->sessionClass), 'SessionClass', 'Session object not created');
    }
}