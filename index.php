<?php
require_once 'Date.php';

$date = new Date('2022-3-22');
echo $date->getDay().'<br>';
echo $date->subDay(1).'<br>';
echo $date->format('m-d-Y').'<br>';
echo $date->getWeekDay('en').'<br>';
echo $date->getMonth().'<br>';
echo $date->getYear().'<br>';
echo (new Date)->addDay(1).'<br>';
echo (new Date('2025-10-31'))->addMonth(1);
