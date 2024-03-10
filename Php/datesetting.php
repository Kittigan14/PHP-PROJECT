<?php

$date = "01/01/2024";
$dateTime = DateTime::createFromFormat('d/m/Y', strtok($date, '/'));
$englishDate = $dateTime->format('Y-m-d');

?>