<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . '/../View.php';

class ViewTest extends TestCase
{
    private $view;

    public function setUp() : void
    {
        $this->view = new View();
    }

    public function testViewObject() : void
    {
        $this->assertEquals(get_class($this->view), 'View', 'View object not created');
    }

    public function testSetTemplate() : void
    {
        $this->$view->setTemplate('viewTemplate');
        $assertEquals('viewTemplate', $this->$view->getTemplate(), 'Template name was not set');
    }

    public function testDisplay() : void
    {
        $assertFalse('', $this->$view->getTemplate(), 'Template name is empty');

    }

    public function testAddVar() : void
    {

    }

}