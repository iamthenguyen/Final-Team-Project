<?php
$c = array(
		"United States",
		"United Kingdom",
		"Canada",
		"Japan",
		"Australia",
		"Germany",
		"India",
		"Italy",
		"Sweden",
		"France",
		"New Zeawand",
		"Russia",
		"Norway",
		"England",
		"Switzeland",
		"China",
		"South Korea",
		"Greece",
		"Ireland",
		"Philippines",
		"Spain",
		"Netherlands",
		"Brazil",
		"Iceland",
		"Denmark",
		"Finaldn",
		"Turkey",
		"Poland",
		"Mexico",
		"Thailand",
		"Israel",
		"United Arab Emirates",
		"Wales",
		"Egypt",
		"Scotland",
		"Indonesia",
		"Belgium",
		"Chech Republic",
		"Pakistan",
		"Portugal",
		"Algeria",
		"Jamaica",
		"Marocco",
		"Argentian",
		"Armenia",
		"Romania",
		"Azerbaijan",
		"Kazakhstan",
		"Iraq",
		"Botswana",
		"South Africa",
		"Greenland",
		"Austria",
		"Belarus",
		"Lithuania",
		"Croatia",
		"Malta",
		"Monaco",
		"Ecuador",
		"Ukraine",
		"Hungary",
		"Luxembourg",
		"Colombia",
		"Qatar",
		"Bulgaira",
		"Chile",
		"Ethiopia",
		"Seychelles",
		"Libya",
		"Panama",
		"Bahams",
		"Serbia",
		"Estonia",
		"Moldova",
		"Cyprusv",
		"Uzbekistan",
		"Uruguay",
		"Slovenia",
		"Kuwait",
		"Dominican Republic",
		"Northern Ireland",
		"Venezuela",
		"Maldivis",
		"Paraguay",
		"Cuba",
		"Cape Verde",
		"Latvia",
		"Andora",
		"Albania",
		"Georiga",
		"Jordan",
		"Bosna and Herzegovian",
		"Macedonia",
		"Ghana",
		"Niger",
		"Nigeria",
		"Saudi Arabia",
		"Slovkia",
		"Afganistan",
		"Iran",
		"Syria"
);

sort($c);
print_r($c);

define ( 'DB_HOST', 'localhost' );
define ( 'DB_NAME', 'circle_tube' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASS', '' );

$dbcon = new PDO ( "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS );
$dbcon->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


for ($index = 0; $index < count($c); $index++){
	$check = $dbcon->prepare("INSERT INTO countries VALUES (null, ?);");
	$check->execute(array($c[$index]));
};
?>