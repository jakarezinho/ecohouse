<?php 
error_reporting(0);
Header('Content-Type: text/html; charset=utf-8');
function getWeather($id,$appid)
{
    if(!empty($id))
    {
		try{
        $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?id='.$id.'&units=metric&appid='.$appid);
        $weatherData = json_decode($json, true);
        return $weatherData;
    } catch (Exception $e) { var_dump($e);}
	}//if

}



function json_cached_api_results( $cache_file = NULL, $expires = NULL ) {
    global $request_type, $purge_cache, $duration, $request_limit;

$duration = 180;
    if( !$cache_file ) $cache_file = dirname(__FILE__) . '/api-cache.json';
     $expires = (time() - filectime($cache_file))/60;

//echo "$duration - $expires";

    // Check that the file is older than the expire time and that it's not empty
    if ( $duration  < $expires || file_get_contents($cache_file)  == '' ) {

        // File is too old, refresh cache
        $api_results = getWeather('2264923','9f887808eb1b963b9da423f96bee9b46');
		$err = $api_results ['cod'];
        $json_results = json_encode($api_results);

        // Remove cache file on error to avoid writing wrong xml
        if ( $api_results && $json_results && $err == 200 )
            file_put_contents($cache_file, $json_results);
		else
            return false;
    } else {
        // Fetch cache
        $json_results = file_get_contents($cache_file);
        $request_type = 'JSON';
    }

    return json_decode($json_results,true);
	
}
$weather = json_cached_api_results();
/////


//echo $weather ['weather'][0] ['icon'] 2264923;
$error = $weather ['cod'];
if ($error ==200) :?>
<?php  
$i = $weather ['weather'][0] ['icon'];
$nuvens = $weather ['weather'][0] ['description'];
$nom = $weather  ['name'];
$temp = round ($weather ['main'] ['temp']);
$humidity= $weather ['main'] ['humidity'];
$press = $weather ['main'] ['pressure'];
$vent = round ($weather ['wind'] ['speed']);
$degree = round($weather ['wind'] ['deg']);
$icon ="<img src ='http://openweathermap.org/img/w/$i.png'>";
$today = date("d.M.Y");
function cardinalize($bearing) {
     $tmp = round($bearing / 22.5);
     switch($tmp) {
          case 1:
               $direction = "N-NE";
               break;
          case 2:
               $direction = "NE";
               break;
          case 3:
               $direction = "E-NE";
               break;
          case 4:
               $direction = "E";
               break;
          case 5:
               $direction = "E-SE";
               break;
          case 6:
               $direction = "SE";
               break;
          case 7:
               $direction = "S-SE";
               break;
          case 8:
               $direction = "S";
               break;
          case 9:
               $direction = "S-SW";
               break;
          case 10:
               $direction = "SW";
               break;
          case 11:
               $direction = "W-SW";
               break;
          case 12:
               $direction = "W";
               break;
          case 13:
               $direction = "W-NW";
               break;
          case 14:
               $direction = "NW";
               break;
          case 15:
               $direction = "N-NW";
               break;
          default:
               $direction = "N";
     }
     return $direction;
}
?>
<section class="weather_block">
<p><small><?=$nom;?> / <?=$today;?></small> </p> 
<p> <?=$icon;?> <?=$nuvens;?></p>
<h1><?=$temp;?>&ordm;C</h1>
<p><strong>Wind </strong><?=$vent;?> m /s  - <?=cardinalize($degree);?> <small>(<?=$degree;?>&ordm;)</small>
<br><strong>Pressure</strong> <?=$press;?> hpa  </p>
<?php else :?>
<p>Weather data not Available :( </p>
<?php endif;?>
</section>