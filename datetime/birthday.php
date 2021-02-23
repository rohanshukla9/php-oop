<?php

$date = new DateTime;

$my_birthday = (new DateTime)->setDate(1994, 12, 01)->setTime(23, 20, 00);

$timeUntilBirthday = $date->diff($my_birthday);

var_dump($timeUntilBirthday);
