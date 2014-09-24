<?php
/**
 * pdo adaptor
 *
 */
require_once __DIR__ . '/../header.php';
use CoreORM\Utility\Debug;
/**
 * test core
 */
class TestDebug extends PHPUnit_Framework_TestCase
{
    public function testDump()
    {
        ob_start();
        Debug::dump('some string');
        parent::assertContains('some', ob_get_clean());
        ob_start();
        Debug::dump(new \Exception('hello world'));
        parent::assertContains('Exception', ob_get_clean());

    }


}
