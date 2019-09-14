<?php
ini_set('date.timezone', 'Asia/Kolkata');
$time =  getdate(strtotime("05:00pm September 12 2019"));
if ( $time['hours'] >= "17" && $time['mday'] >= "9" ) {

}

print_r($time);

print_r(getdate(time()));


$currentTime = getdate(time());

if ( $currentTime['0'] >= $time['0'] ) {
  echo "TRUE";
}else {
  echo "false";
}

 ?>
