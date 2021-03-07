<?php
// Date
echo date ('Y');
echo '<br>';
echo date ('H:i A'); // 24 hour clock
echo '<br>';

//echo date ('h:i A'); // how we understand time
//echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date('h:i A');

echo '<br>';
$todayDate = date('H:i A');
if($todayDate <= 11 ) {
    echo 'Good morning';
}
elseif ($todayDate <= 15) {
    echo 'Good Afternoon';
}
else {
    echo 'Good evening';
}