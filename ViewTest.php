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
        $mockObj = $this->getMockBuilder(View::class)->onlyMethods(['setTemplate'])->getMock();

        $mockObj->expects($this->exactly(1))->method('setTemplate')->with($this->isType('string'));

        $mockObj->setTemplate("courses");
    }
    
    public function testDisplay() : void
    {
        $mockObj = $this->getMockBuilder(View::class)->onlyMethods(['display'])->getMock();

        $mockObj->expects($this->exactly(1))->method('display')->will($this->returnValue('string'));

        $this->assertIsString($mockObj->display());
    }

    public function testAddVar() : void
    {
        $mockObj = $this->getMockBuilder(View::class)->onlyMethods(['addVar'])->getMock();

        $mockObj->expects($this->exactly(1))->method('addVar')->with($this->isType('string'), $this->isType('string'));

        $mockObj->addVar("courses", "Electronics");
    }

}