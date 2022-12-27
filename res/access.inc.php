<?php

// Users data
$imSettings['access']['users'] = array(
	'example@example.com' => array(
		'id' => 'yobwep9b',
		'groups' => array('dpb38v6c'),
		'firstname' => 'Admin',
		'lastname' => '',
		'password' => '$2a$11$jeHoyROQ.DcDE6HdA2iPHOfNUTllUQ6DQyDNSWgU6MPHzIU2xyfpK',
		'crypt_encoding' => 'csharp_bcrypt',
		'db_stored' => false,
		'page' => false
	)
);

// Admins list
$imSettings['access']['admins'] = array('yobwep9b');

// Page/Users permissions
$imSettings['access']['pages'] = array();

// PASSWORD CRYPT

$imSettings['access']['password_crypt'] = array(
	'encoding_id' => 'php_default',
	'encodings' => array(
		'no_crypt' => array(
			'encode' => function ($pwd) { return $pwd; },
			'check' => function ($input, $encoded) { return $input == $encoded; }
		),
		'php_default' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_DEFAULT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		),
		'csharp_bcrypt' => array(
			'encode' => function ($pwd) { return password_hash($pwd, PASSWORD_BCRYPT); },
			'check' => function ($input, $encoded) { return password_verify($input, $encoded); }
		)
	)
);

// End of file access.inc.php