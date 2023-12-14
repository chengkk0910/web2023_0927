<?php
$str = "SELECT * FROM `admin` 
    WHERE 1;
    ";


$year = $_GET['year'] ?? '2023';
$month = $_GET['month'] ?? '2023';


$originArr = [
    'data' => $data,
    'desc' => 'http:://images/'
];


$originArr= compact("year", "month");


