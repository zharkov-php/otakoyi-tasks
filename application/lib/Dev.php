<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * My debug function
 * Моя функція для розбору
 * @param $str
 */
function myDebug($str)
{
	echo '<pre>';
	var_dump($str);
	echo '</pre>';
	exit;
}