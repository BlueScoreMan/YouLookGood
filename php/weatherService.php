<?php

//echo htmlspecialchars($_SERVER["PHP_SELF"]);

//Copy paste the API responds to locally stored json, one for hot & cold weather... (localhost can't connect to the service, because it has no domain)!
/* function getWeatherJson() {
	set_time_limit(0); // unlimited max execution time
	$ch = curl_init();
	$source = "http://api.openweathermap.org/data/2.5/weather?q=Zurich&appid=cf95c786daad1103b1e992a9f20444b3&units=metric";
	curl_setopt($ch, CURLOPT_URL, $source);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec ($ch);
	curl_close ($ch);
	$destination = "/youlookgood/js/weather.json";
	$file = fopen($destination, "w+");
	fputs($file, $data);
	fclose($file);
} */

if(!function_exists('getWeatherJson')){ 
	function getWeatherJson($filename){
		if (file_exists($filename)) {
			$str = file_get_contents($filename);
			$json = json_decode($str, true);

			$rand = rand (0, 2);

			$temperature = $json[$rand]['main']['temp'];
			//$temperatureMin = $json[0]['main']['temp_min'];
			//$temperatureMax = $json[0]['main']['temp_max'];

			//echo $temperature . '<br>';
			//echo $temperatureMin . '<br>';
			//echo $temperatureMax . '<br>';

			return $temperature;

			//echo '<pre>' . print_r($json, true) . '</pre>';
			echo "$filename wurde zuletzt modifiziert:: " . date ("F d Y H:i:s.", filemtime($filename));
		} else {
			echo "<strong>no file exists</strong>";
		}
	}
}
//Filename path needs to be corrected
//You have to change the path accordingly to the json element
$filename = 'F:\ZLI\Project-mini-IPA\xampp\htdocs\YouLookGood\json\weather.json';
//Query
$query = '';

$temp = getWeatherJson($filename);

//Differnt queries will be set...
if($temp == 20){
	 $query = 'SELECT tbl_clothes.name, tbl_clothes.thumbnail
	from tbl_clothes
	join tbl_category on tbl_category.categoryID = tbl_clothes.categoryIDFS
	where tbl_clothes.categoryIDFS like "2" Order by rand() Limit 1';
} elseif ($temp == 15){
		$query = 'SELECT tbl_clothes.name, tbl_clothes.thumbnail
	 from tbl_clothes
	 join tbl_category on tbl_category.categoryID = tbl_clothes.categoryIDFS
	 where tbl_clothes.categoryIDFS like "3" Order by rand() Limit 1';
} else{
	$query = 'SELECT tbl_clothes.name, tbl_clothes.thumbnail
 from tbl_clothes
 join tbl_category on tbl_category.categoryID = tbl_clothes.categoryIDFS
 where tbl_clothes.categoryIDFS like "1" Order by rand() Limit 1';
}




?>
