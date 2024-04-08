<?php

/**
 * TYPO3 v13 Test Extension
 * @author Michael Schams | https://schams.net
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 v13 Test Extension',
    'description' => 'TYPO3 v13 Test Extension',
    'category' => 'be',
    'state' => 'alpha',
    'author' => 'Michael Schams',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'SchamsNet\\Typo3v13\\' => 'Classes'
        ]
    ]
];
