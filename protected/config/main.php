<?php

return [
    'basePath' => 'C:\\wamp64\\www\\BugFree\\protected\\config\\..',
    'name' => 'BugFree 3.0.4',
    'preload' => [
        0 => 'log',
    ],
    'language' => 'en',
    'theme' => 'classic',
    'defaultController' => 'site',
    'timeZone' => 'Asia/Shanghai',
    'import' => [
        0 => 'application.models.*',
        1 => 'application.components.*',
        2 => 'application.service.*',
    ],
    'modules' => [
        'gii' => [
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            'ipFilters' => [
                0 => '127.0.0.1',
                1 => '::1',
            ],
        ],
    ],
    'components' => [
        'user' => [
            'allowAutoLogin' => true,
        ],
        'request' => [
            'enableCookieValidation' => true,
        ],
        'cache' => [
            'class' => 'CDbCache',
            'connectionID' => 'db',
        ],
        'urlManager' => [
            'urlFormat' => 'path',
            'showScriptName' => true,
            'rules' => [
                '<type:\\w+>/<id:\\d+>/<action:\\w+>' => 'info/edit',
                '<type:\\w+>/list/<product_id:\\d+>' => 'info/index',
                '<type:\\w+>/<id:\\d+>' => 'info/edit',
                '<controller:\\w+>/view/<id:\\d+>' => '<controller>/view',
                '<controller:\\w+>/<id:\\d+>' => '<controller>/view',
                '<controller:\\w+>/<action:\\w+>/<id:\\d+>' => '<controller>/<action>',
                '<controller:\\w+>/<action:\\w+>' => '<controller>/<action>',
            ],
        ],
        'db' => [
            'pdoClass' => 'NestedPDO',
            'connectionString' => 'mysql:host=localhost;dbname=bugfree;port=3306',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'bf_',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'class' => 'CLogRouter',
            'routes' => [
                0 => [
                    'class' => 'CFileLogRoute',
                    'levels' => 'info, error, warning',
                    'categories' => 'bugfree.*',
                ],
            ],
        ],
    ],
    'params' => [
        'uploadPath' => '../BugFile',
        'picPreviewApp' => 'http:///BugFile',
        'allUserGroupId' => 1,
        'showCaseResultTab' => true,
        'ldap' => [
            'host' => '',
            'port' => '',
            'base' => '',
            'user' => '',
            'pass' => '',
        ],
        'mail' => [
            'on' => '1',
            'from_address' => 'bugfree-noreply@test.com',
            'from_name' => 'BugFree',
            'send_method' => 'SMTP',
            'send_params' => [
                'host' => '',
                'smtp_auth' => false,
                'username' => '',
                'password' => '',
            ],
        ],
    ],
];
