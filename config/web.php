<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    // This part replaces the "user" setting commented below but lool at docs to add options
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
        ],
    ],
    'components' => [
        // Uncomment out the below code and the Themefactory theme will start to render
        // 'view' => [
        //     'theme' => [
        //         'pathMap' => ['@app/views' => 'themes/dorian'],
        //         'baseUrl'   => 'themes/dorian'
        //     ],
        // ], 
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'gfWIx3XdsOCYeUve6VVm1KF4VayT0z7t',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // 'user' => [
        //     'identityClass' => 'app\models\User',
        //     'enableAutoLogin' => true,
        // ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // The below code makes the sign-in and sign-up pages work but it breaks the tip and story pages
        'urlManager' => ['enablePrettyUrl' => true ],
        // 'urlManager' => [
        //     'class' => 'yii\web\UrlManager',
        //     // Disable index.php
        //     // 'showScriptName' => false,
        //     // Disable r= routes
        //     'enablePrettyUrl' => true,
        //     'rules' => array(
        //         '<controller:\w+>/<id:\d+>' => '<controller>/view',
        //         '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        //         '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
        //     ),
        // ],
        // The below code replaced the commented code below it after installing mailgun extension
        'mailer' => [
            'class' => 'boundstate\mailgun\Mailer',
            'key' => 'key-84afa5b6a102cf2f3c8439a6ed91797f',
            'domain' => 'app814ce068eac248cab5b68c4589c3b1b4.mailgun.org',
        ],
        // 'mailer' => [
        //     'class' => 'yii\swiftmailer\Mailer',
        //     // send all mails to a file by default. You have to set
        //     // 'useFileTransport' to false and configure a transport
        //     // for the mailer to send real emails.
        //     'useFileTransport' => false,
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['10.240.0.*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['10.240.0.*'],
    ];
}

return $config;
