<?php

 
// define root directory
define ('IamRoot', dirname(__DIR__), true);


// library auto load
require_once IamRoot . '/vendor/autoload.php';

use IamProgrammerlk\IamGitHubComposerTester\HalloThere;

echo HalloThere::sayHallo();