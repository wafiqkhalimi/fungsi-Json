<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/dc6a2e8247981d34/geolookup/conditions/q/ID/kebunteh.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$weather = $parsed_json->{'current_observation'}->{'weather'};
$feelslike_c= $parsed_json->{'current_observation'}->{'feelslike_c'};
$wind_degrees= $parsed_json->{'current_observation'}->{'wind_degrees'};
$windchill_c= $parsed_json->{'current_observation'}->{'windchill_c'};
$dewpoint_c= $parsed_json->{'current_observation'}->{'dewpoint_c'};
echo "Saat ini sedang berada di ${location}\n";
echo "<br>";
echo "Cuaca saat ini : ${weather}\n";
echo "<br>";
echo "Derajat Angin : ${wind_degrees} \n";
echo "<br>";
echo "Terasa Seperti : ${feelslike_c} celcius \n";
echo "<br>";
echo "Angin Dingin : ${windchill_c} celcius \n";
echo "<br>";
echo "Titik embun : ${dewpoint_c}celcius\n";
?>