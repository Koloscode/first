<?php
$timeZone = 'Europe/Kiev';
date_default_timezone_set($timeZone);
require_once 'header.php';
?>
<div class="row">
    <div class="col-12 contant-text">
        <h2>header</h2>
        <div>
<?php


$date_begin = '25-12-2018';
$date_end = "26-12-2018";
$count = 20;

echo $days_diff = date_diff(date_create($date_begin), date_create($date_end))->days . '<br>';
echo $days_diff_now = date_diff(date_create('now'), date_create($date_end))->days . '<br>';
//echo $diff = $days_diff_now/$days_diff*$count . '<br>';
//$q = date_create('now');
function places_count($count, $date_begin, $date_end) {
    $days_diff = date_diff(date_create($date_begin), date_create($date_end))->days;
    $days_diff_now = date_diff(date_create('now'), date_create($date_end))->days;
    if ($days_diff_now < $days_diff)
        $diff = ($days_diff_now/$days_diff*$count)+rand(1, 3);
    else
        $diff = intval($count)*rand(80, 100)/100;
    return intval($diff);
}

echo places_count($count, $date_begin, $date_end) . ' - возврат функции <br>';

//echo $days_diff_now = date_create('now')->format("d-m-Y");
//echo '<br> random';
//echo intval($diff = intval($count)*rand(80, 100)/100);
//echo '<br> random';
//echo rand(1, 10)/10;
//echo '<pre>';
//var_dump( $q);
//echo '</pre>';
//$date1=date_create("2013-03-15");
//$date2=date_create("2013-03-16");
//$diff=date_diff($date1,$date2);
//echo $diff->days;
?>
        </div>
    </div>
    <div class="col-12" style="height:200px; width: 100%; opacity: 0.2; background-color: #0c5460"></div>
