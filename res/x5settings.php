<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '20E5C48E122B39F702DA95C7A0688856',
	'url' => 'https://veda.netxi.in/',
	'homepage_url' => 'https://veda.netxi.in/index.html',
	'icon' => '',
	'version' => '2022.3.6.0',
	'sitename' => 'Новый проект',
	'lang_code' => 'ru-RU',
	'public_folder' => '',
	'salt' => '7qy3jluzqhiubqgblf8m3kzi1q76w2yhr144ntzma',
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"ewjy05eq-imCpt\">Проверочное слово:</label><br />
			<input type=\"text\" id=\"ewjy05eq-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_0r3roj2c.webp',
	'notification_public_key' => '52892f46e7759c5a',
	'notification_private_key' => '2f0b123b3b629622',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$dbconf = getDbData($imSettings['ecommerce']['database']['id']);
$ecommerce->setDatabaseConnection(ImDb::from_db_data($dbconf), $imSettings['ecommerce']['database']['table']);
$ecommerce->setSettings(array(
	'page_url' => 'https://veda.netxi.in/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(255, 255, 255, 1); background-color: rgba(241, 90, 49, 1); padding: 10px 15px 10px 15px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;',
	'email_opening' => 'Уважаемый покупатель,Благодарим вас за ваш заказ и напоминаем, что вам нужно его оплатить.<br /><br />Ниже вы найдете список заказанных товаров, данные счета-фактуры и отправки и инструкции по оплате.',
	'email_closing' => 'Обращайтесь к нам за дополнительной информацией.<br /><br />С уважением, сотрудники отдела продаж.',
	'email_payment_opening' => 'Уважаемый покупатель,<br /><br />Благодарим вас за покупку. Мы получили ваш платеж. Ваш заказ будет выполнен в кратчайшие сроки.<br /><br />Ниже вы найдете список заказанных товаров, данные счета-фактуры и отправки.',
	'email_payment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_digital_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список ссылок для загрузки заказанных товаров:',
	'email_digital_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'email_physical_shipment_opening' => 'Уважаемый Клиент,<br /><br />Благодарим вас за покупку и высылаем вам список заказанных товаров:',
	'email_physical_shipment_closing' => 'Мы в вашем распоряжении для дополнительной информации.<br /><br />С уважением, Коммерческий отдел',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '₴',
	'currency_code' => 'UAH',
	'currency_name' => 'Ukraine, Hryvnia',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'hd3z9jwi' => array(
		'id' => 'hd3z9jwi',
		'name' => 'Новая категория',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_c1be943f_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Банковский платеж',
		'description' => 'Оплатить позже банковским платежом.',
		'email_text' => 'Вот данные, необходимые для банковского платежа:

XXX YYY ZZZ

Пожалуйста, обратите внимание, что как только платеж будет проведен, необходимо отправить копию квитанции об оплате вместе с номером заказа.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'почтой',
		'description' => 'Товары будут доставлены в течение 3-5 дней.',
		'email_text' => 'Доставка почтой.\\nТовары будут доставлены в течение 3-5 дней.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'службой экспресс-доставки',
		'description' => 'Товары будут доставлены в течение 1-2 дней.',
		'email_text' => 'Доставка службой экспресс-доставки.\\nТовары будут доставлены в течение 1-2 дней.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = false;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Arial\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Arial\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Arial\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Arial;';

// End of file x5settings.php