<?php
date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get()."<br>";
echo date("D, d M y - H:i:s A")."<br>";
echo date("l, d F Y - H:i:s A")."<br>";
?>



<?php
$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get()."<br>";
$date = strtotime("2005-10-02 +15 hours +15 minutes +15 seconds");
echo date("Y, F, l 'dS' H:i:s", $date)."<br>";
?>


<?php
$date = "1990-10-01";

date_default_timezone_set('Africa/Cairo');
$date_timestamp = strtotime("1990-10-01");
$days_diff = round(($date_timestamp - 0) / (60 * 60 * 24), 1);
$years_diff = round($days_diff / 365.25, 1);

echo "From Epoch Time Till 1990-10-01 Is Approximately $days_diff Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years_diff Years";
?>



<?php
date_default_timezone_set('Africa/Cairo');
$start_date = new DateTime("@0");
$end_date = new DateTime("1990-10-01");
$interval = date_diff($start_date, $end_date);
$days_diff = $interval->format("%a");
$years_diff = round($days_diff / 365.25, 1);

echo "From Epoch Time Till 1990-10-01 Is Approximately $days_diff Days<br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years_diff Years";
?>


<?php
echo strtotime("now") . "<br>"; 
$date = new DateTime();
echo $date->format("U") . "<br>"; 
echo floor(microtime(true)) . "<br>"; 
?>