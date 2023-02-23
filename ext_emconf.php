<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "deepltranslate"
 *
 * Auto generated by Extension Builder 2020-04-18
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Deepl Translate',
    'description' => 'Fork of deepltranslate from pitsolutions.This extension provides option to translate content element, and tca record texts to Deepl and Google supported languages.',
    'category' => 'module,backend',
    'author' => 'web-vision GmbH Team',
    'author_company' => 'web-vision GmbH',
    'author_email' => 'markhouben91@gmail.com, ricky@web-vision.de, anu@web-vision.de',
    'state' => 'stable',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.3.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.1-11.5.99',
        ],
        'conflicts' => [
            'recordlist_thumbnail' => '*'
        ],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'WebVision\\WvDeepltranslate\\' => 'Classes',
        ],
    ],
];
