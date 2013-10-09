<?php

return array(
	'name'=>'Message Board',
	'defaultController'=>'posts',
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	'components'=>array(
		'urlManager'=>array(
            'showScriptName'=>false,
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>'=>'post/view',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=messageboard',
			'emulatePrepare' => true,
			'username' => 'messageboard',
			'password' => 'messageboard',
			'charset' => 'utf8',
			'tablePrefix' => 'mb_',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
                 */
			),
		)
	),
);