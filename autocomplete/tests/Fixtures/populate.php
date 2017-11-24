<?php

require __DIR__.'/Fixtures.php';

$fixtures = new Fixtures();
$fixtures->cleanUp();
$fixtures->load();
