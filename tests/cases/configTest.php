<?php
/**
 * config Test
 *
 */
require_once __DIR__ . '/../header.php';
use CoreORM\Utility\Debug, CoreORM\Utility\Config;
/**
 * test core
 */
class TestConfig extends PHPUnit_Framework_TestCase
{
    protected $conf = array(
        'key1' => 1,
        'key2' => 2,
        'key3' => array(
            'key3_1' => 3,
            'key3_2' => 4,
            'key3_3' => array(
                'key3_3_1' => 5,
                'key3_3_2' => 6,
            )
        )
    );

    public function testMain()
    {
        Config::set($this->conf);
        $this->assertEquals(Config::export(), $this->conf);
        // next, match point syntax
        $this->assertEquals(Config::get('key3.key3_1'), $this->conf['key3']['key3_1']);
        // next, match simple syntax
        $this->assertEquals(Config::get('key3'), $this->conf['key3']);

    }

}
