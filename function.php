<?php 


function getCurrentIp(){
	$client		=	@$_SERVER['HTTP_CLIENT_IP'];
	$forward	=	@$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote		=	@$_SERVER['REMOTE_ADDR'];
	
	if(filter_var($client, FILTER_VALIDATE_IP)){
		$ip	=	$client;
	}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
		$ip	=	$forward;
	}else{
		$ip	=	$remote;
	}
	return $ip;
}
function getCityAndCountry(){
	$data				=	array();
	$currentIP			=	getCurrentIp();
    $ip_data			=	@json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$currentIP));
	//print_r($ip_data); die;
    if($ip_data && $ip_data->geoplugin_city != null){
        $data["city"]	=	$ip_data->geoplugin_city;
        $data["country"]=	$ip_data->geoplugin_countryCode;
    }
	else{
		$data["city"]	=	"Brooklyn";
        $data["country"]=	"US";
	}
    return $data;
}
function getForcast(){
	$return_data	=	getCityAndCountry();
	$url			=	"http://api.openweathermap.org/data/2.5/forecast/daily?".	
						"APPID=b214769e5c1652037807feb794356380&q={".$return_data["city"]."}&mode=json&units=metric&cnt=5";
	$contents		=	file_get_contents($url); 
	$clima			=	json_decode($contents);
	
	//$clima =  (array) $clima;
	return $clima;
	//print_r($clima);
	//echo $cityname = $clima->city->name; 
	//echo $icon=$clima->list[0]->weather[0]->icon;
}

function convertCelsiusToFahrenheit($temp){
	return ($temp * 1.8) + 32;
}

function convertFahrenheitToCelsius($temp){
	return ($temp - 32) / 1.8;
}