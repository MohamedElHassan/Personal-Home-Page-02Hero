<?php

// Print current date
echo date('Y-m-dM h:i:s').'<br>';
// Print yesterday
echo date('Y-m-dM h:i:s', time() - 60 * 60 * 24).'<br>';
echo time() / 60 / 60 / 24 / 365;
// Different format: https://www.php.net/manual/en/function.date.php

// Print current timestamp
echo time().'<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$date = '2020-12-6 12:34:12';
echo '<pre>';
echo var_dump(date_parse($date)).'<br>';
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$formatDate = '12 9 2032 45:12:12';
echo '<pre>';
echo var_dump(date_parse_from_format('m d Y s:H:i',$formatDate)).'<br>';
echo '</pre>';