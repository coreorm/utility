<?php
/**
 * @TODO: all tests go here
 *
 */
require_once __DIR__ . '/../vendor/autoload.php';
// disable debug mode for faster testing and easier overall testing
\CoreORM\Utility\Debug::debug(getenv('ENABLE_DEBUG') != 'no');
