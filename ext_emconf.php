<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'sitepackage',
    'description' => 'Templates für Hotel Marienmünster',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pascalebeierde\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pascale Beier',
    'author_email' => 'mail@pascalebeier.de',
    'author_company' => 'pascalebeier.de',
    'version' => '1.0.2',
];
