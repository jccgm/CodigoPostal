<?php

$datas = json_decode(file_get_contents('https://api.republicofdevs.com/api/v1/zipcodes', true));
$edms = $datas->content;
?>