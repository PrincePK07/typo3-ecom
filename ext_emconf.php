<?php

/**
 * Extension Manager/Repository config file for ext "demo_project".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'demo project',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pits\\DemoProject\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'prince_pk',
    'author_email' => 'prince.pk@pitsolutions.com',
    'author_company' => 'PITS',
    'version' => '1.0.0',
];
