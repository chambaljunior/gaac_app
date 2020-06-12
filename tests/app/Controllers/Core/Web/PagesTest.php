<?php
class PagesTest extends PHUnit_Framework_TestCase
{
    public function testRenderReturnsOlaPhpUnit(){
        $pages = new \Controllers\Core\Web\Pages();

        $expected = 'Ola PHP Unit';

        $this->assertEquals($expected, $pages->render());
    }
}