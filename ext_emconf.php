<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "femanagerextended"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'femanagerextended',
    'description' => 'Extend fe_users and femanager with a new field and a new validation',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'author_company' => '',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5',
            'femanager' => '7.0.0-',
        ],
    ],
];
