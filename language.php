<?php
$arr = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
$arr[0] = substr($arr[0], 0, 2);

if (isset($_GET['lang']) && ($_GET['lang'] == 'es' || $_GET['lang'] == 'en')) {
    $arr[0] = $_GET['lang'];

    setcookie('lang', $arr[0], strtotime( '+30 days' ));
    header('location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

if (isset($_COOKIE['lang'])) {
    $arr[0] = $_COOKIE['lang'];
}

$lang['en'] = [
	// Botones NAV
	'home' => 'HOME',
	'us' => 'ABOUT US',
	'service' => 'SERVICES',
	'ports' => 'PRINCIPAL PORTS',
	'contact' => 'CONTACT',
	'lang_es' => 'SPANISH',

	// Nosotros
	'welcome' => 'WELCOME',
	'welcome_sub' => 'LOGISTICS SOLUTIONS FOR INTERNATIONAL TRADE',
	'welcome_btn' => 'Let\'s Talk',

	'welcome_to' => 'WELCOME TO',
	'about_us_text' => '<p>Our company, <strong>GRAND OCEAN SHIPPING SAC</strong> is a company dedicated to consulting and integral support in the logistics chain of import and export, both maritime and air means, with the support of our parent company Grand China Ocean Shipping LTD. We have highly trained and specialized staff departments that provide all the tools to manage their loads, providing the best alternatives and solutions to your requirements with our aggregate value, personalized service, providing information at the right time.</p><p>Our relationship is based on the long-term confidence becoming strategic partners of large, medium and small companies, with which we work and providing proposals in the logistics chain.</p>',
	'mission' => 'MISSION',
	'mission_text' => 'We are a company dedicated to providing solutions and alternatives within the supply chain, with services that meet quality standards and devote our efforts and talents to our users and partners.',
	'vision' => 'VISION',
	'vision_text' => 'Be recognized as one of the best companies for our users when looking for an alternative to manage their loads, increasing the level of quality.',

	// Servicios
	'serv01_title' => 'INTERNATIONAL CARGO TRANSPORT SEA AND AIR',
	'serv01_text' => 'Grand Ocean Shipping SAC offers the service of import and export, both marine and air, with a network of agents worldwide, which will provide an efficient and professional support, having as main traffic route from Asia, as we have our Headquarters GRAND OCEAN SHIPPING LTD.',
	'serv02_title' => 'INTERNATIONAL CARGO TRANSPORT FCL, LCL AND LOOSE LOAD',
	'serv02_text' => 'Grand Ocean Shipping SAC provides cargo service in FCL containers, cargo consolidated and loose cargo.',
	'serv03_title' => 'CONSULTING FOREIGN TRADE',
	'serv03_text' => 'Grand Ocean Shipping SAC provides advice to our clients, providing information about the set of processes involved in the logistics chain, allowing each time to conduct its operations, generating greater profitability and contributing to the growth of the same.',
	'serv04_title' => 'LOGISTICS SERVICE IMPORT AND EXPORT',
	'serv04_text' => 'We provide our customers conduct their load management through integrated logistics service, which includes:',
	'serv04_text_2' => '<li>Local transport.</li>
						<li>Storage.</li>
						<li>Distribution.</li>
						<li>Aduanas.</li>',
	'serv05_title' => 'TRACEABILITY SHIPMENTS',
	'serv05_text' => 'Grand Ocean Shipping SAC not only will provide monitoring and status of shipments, but has specialized in the traceability of the same team, which will facilitate a solution to a problem that may arise in the logistics chain.',

	'count_1' => 'AIR TRANSPORTATION',
	'count_2' => 'MARITIME TRANSPORTATION',
	'count_3' => 'MONITORING',

	// Form
	'form_title' => 'WE SEND A MESSAGE',
	'form_title_right' => 'CONTACT DETAILS',
	'name' => 'FIRST AND LAST NAME',
	'mail' => 'E-MAIL',
	'message' => 'WRITE YOUR MESSAGE...',
	'send' => 'SEND',
];


$lang['es'] = [
	// Botones NAV
	'home' => 'INICIO',
	'us' => 'NOSOTROS',
	'service' => 'SERVICIOS',
	'ports' => 'PRINCIPALES PUERTOS',
	'contact' => 'CONTACTO',
	'lang_es' => 'ESPAÑOL',

	// Nosotros
	'welcome' => 'BIENVENIDOS',
	'welcome_sub' => 'SOLUCIONES LOGÍSTICAS PARA EL COMERCIO INTERNACIONAL',
	'welcome_btn' => 'CONVERSEMOS',

	'welcome_to' => 'BIENVENIDOS A',
	'about_us_text' => '<p>Nuestra empresa, <strong>GRAND OCEAN SHIPPING SAC</strong> es una empresa dedicada a la asesoría y soporte integral en la cadena logística de importación y exportación, tanto en medios marítimos como aéreos, contando con el soporte de nuestra casa matriz Grand Ocean Shipping China LTD. Contamos con departamentos especializados y personal altamente capacitado que brindará todas las herramientas para el manejo de sus cargas, brindando las mejores alternativas y soluciones ante sus requerimientos mediante nuestro valor agregado, el servicio personalizado, brindando la información en el tiempo oportuno. </p><p>Nuestra relación está basada en la confianza a largo plazo convirtiéndonos en socios estratégicos de las grandes, medianas y pequeñas empresas,  con las cuales trabajamos y brindando propuestas en la cadena logística.</p>',
	'mission' => 'MISIÓN',
	'mission_text' => 'Somos una empresa que se dedica a brindar soluciones y alternativas dentro de la cadena logística, con servicios que cumplen los estándares de calidad, dedicando nuestro esfuerzo y talento hacia nuestros usuarios y colaboradores.',
	'vision' => 'VISION',
	'vision_text' => 'Be recognized as one of the best companies for our users when looking for an alternative to manage their loads, increasing the level of quality.',

	// Servicios
	'serv01_title' => 'TRANSPORTE INTERNACIONAL DE CARGA MARÍTIMA Y AÉREA',
	'serv01_text' => 'Grand Ocean Shipping SAC brinda el servicio de importación y exportación, tanto marítima como aérea, contando con una red de agentes a nivel mundial, los cuales brindarán un soporte eficiente y profesional, contando como principal tráfico la ruta de Asia, ya que contamos con nuestra casa matriz GRAND OCEAN SHIPPING LTD.',
	'serv02_title' => 'TRANSPORTE DE CARGA INTERNACIONAL FCL, LCL Y CARGA SUELTA',
	'serv02_text' => 'Grand Ocean Shipping SAC brinda el servicio de carga en contenedores FCL, carga consolidada y carga suelta.',
	'serv03_title' => 'ASESORÍA DE COMERCIO EXTERIOR',
	'serv03_text' => 'Grand Ocean Shipping SAC brinda asesoría a nuestros clientes, brindando información acerca del conjunto de procesos que intervienen en la cadena logística, permitiendo que cada uno de ellos realice sus operaciones a tiempo, generando una mayor rentabilidad y contribuyendo al crecimiento de las mismas.',
	'serv04_title' => 'SERVICIO LOGÍSTICO DE IMPORTACIÓN Y EXPORTACIÓN',
	'serv04_text' => 'Brindamos a nuestros clientes llevar a cabo el manejo de su carga a través del servicio logístico integral, el cual incluye:',
	'serv04_text_2' => '<li>Transporte local.</li>
						<li>Almacenamiento</li>
						<li>Distribución.</li>
						<li>Aduanas.</li>',
	'serv05_title' => 'TRACEABILITY SHIPMENTS',
	'serv05_text' => 'Grand Ocean Shipping SAC not only will provide monitoring and status of shipments, but has specialized in the traceability of the same team, which will facilitate a solution to a problem that may arise in the logistics chain.',

	'count_1' => 'TRASLADOS AÉREOS',
	'count_2' => 'TRASLADOS MARÍTIMOS',
	'count_3' => 'SEGUIMIENTOS',

	// Form
	'form_title' => 'ENVÍAMOS UN MENSAJE',
	'form_title_right' => 'DETALLES DE CONTACTO',
	'name' => 'NOMBRE Y APELLIDO',
	'mail' => 'CORREO ELECTRÓNICO',
	'message' => 'MENSAJE',
	'send' => 'ENVIAR',
];