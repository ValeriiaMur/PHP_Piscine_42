#!/usr/bin/php
<?php

if ($argc < 1 || $argc > 3)
{
	exit();
}
$read = fopen($argv[1], "r");
$page = "";
while ($read && !feof($read))
{
	  $page .= fgets($read);
 }
$find1 = "/(<.*title=\")(.*)(\">)/";
$find2 ="/(<a.*>)(.*)(<\/a)/";
$find3 = "/(<a.*>)(.*)(<img)/";
$page = preg_replace_callback("$find1", function ($matches) {
		  return $matches[1].strtoupper($matches[2]).$matches[3];}, $page);
$page = preg_replace_callback("$find2", function ($matches) {
		  return $matches[1].strtoupper($matches[2]).$matches[3];}, $page);
$page = preg_replace_callback("$find3", function ($matches) {
		  return $matches[1].strtoupper($matches[2]).$matches[3];}, $page);
fclose($read);
print($page);

?>
