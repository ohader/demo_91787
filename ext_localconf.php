<?php

use TYPO3\Demo91787\DemoInputBehaviorElement;
use TYPO3\Demo91787\DemoInputLegacyElement;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1631559141] = [
    'nodeName' => 'demoInputBehavior',
    'priority' => 50,
    'class' => DemoInputBehaviorElement::class,
];
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1631559142] = [
    'nodeName' => 'demoInputLegacy',
    'priority' => 50,
    'class' => DemoInputLegacyElement::class,
];
