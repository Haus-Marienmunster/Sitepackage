<?php

/**
 * Extension Manager/Repository config file for ext "hotel".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'hotel',
    'description' => 'Templates für Hotel Marienmünster',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => 0,
    'clearCacheOnLoad' => 1,
    'author' => 'Pascale Beier',
    'author_email' => 'mail@pascalebeier.de',
    'author_company' => 'Pascale Beier',
    'version' => '1.0.0',
];
