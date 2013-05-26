<?php

function unittest_setup()
{
    // Setup the PieCrust environement.
    require dirname(__DIR__) . '/piecrust.php';
    piecrust_setup('test');

    // Include the global utilities.
    require __DIR__ . '/src/util.php';
    require __DIR__ . '/src/PieCrustTestCase.php';
}

unittest_setup();

