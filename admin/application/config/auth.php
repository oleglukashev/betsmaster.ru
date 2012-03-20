<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'hash_key',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
	    //'oleg' => '5faae5c036aa6279859cd248fca5d2b30be9cc91c2b4be56d775ee095d0b1ac4',
	),

);
