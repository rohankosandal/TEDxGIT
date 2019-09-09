<?php
ini_set('date.timezone', 'Asia/Kolkata');

$time =  getdate(strtotime("05:00pm September 9 2019"));
if ($time['hours']=="22" && $time['mon']=="9") {
  echo "TRUE";
}else {
  echo "FALSE";
}


echo $time['hours'];
 ?>
