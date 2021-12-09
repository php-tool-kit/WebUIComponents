<?php

require 'vendor/autoload.php';

use PTK\Webface\Component\Viewport;

$vp = new Viewport('Hello world');

print_r($vp);