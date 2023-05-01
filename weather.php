<?php
$apiKey = "YOUR API ID";
$cityId = "524901"; // Example city ID (Moscow)

$apiUrl = "http://api.openweathermap.org/data/2.5/forecast?id=524901&appid=c43666a92e23a0ae4ea557a271cbaa31";
$response = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/forecast?id=524901&appid={YOUR API ID"), true);



if ($response["cod"] === "200") {
    $cityName = $response["city"]['name'];
    
    $weatherDescription = $response['list'][0]['weather'][0]['description'];
    $temperature = $response['list'][1]['main']['temp'];
    $humidity = $response['list'][1]['main']['humidity'];
    
    echo "\nCity: $cityName";
    echo "<br>";
    echo "\nWeather: $weatherDescription ";
    echo "<br>";
    echo "\nTemperature: $temperature";
    echo "<br>";
    echo "\nHumidity: $humidity";
    echo "<br>";
} else {
    echo "Error getting weather data: " . $weatherData["message"];
}
?>
