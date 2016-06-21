# CakeOpauth plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require takashi-moripower/cake-opauth
```
app/comfig/app.php

...
'opauth' => [
	'security_salt' => 'SECURITY_SALT', //
	'path' => '/opauth/auth/', // path to this plugin
	'callback_url' => '/opauth/auth/callback/', // path to return after opauth
	'Strategy' => [
		'Twitter' => [
			'key' => 'YOUR_KEY',
			'secret' => 'YOUR_SECRET'
		],
		'Facebook' => [
			'app_id' => 'YOUR_APPID',
			'app_secret' => 'YOUR_APPSECRET'
		]
	]
]
...
