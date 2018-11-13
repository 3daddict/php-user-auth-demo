<?php
require_once __DIR__ . '../inc/bootstrap.php';

$bookTitle = request()->get('title');
$bookDescription = request()->get('description');