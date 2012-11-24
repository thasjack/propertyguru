<?php
require_once 'propertyguru/ValidateInput.php';
require_once 'propertyguru/PrintConsectiveText.php';
fwrite(STDOUT, "Please enter positive integer range \n");
$range = fgets(STDIN);
$val = new ValidateInput($range);
$numberRange = $val->getInputArray();
$print = new PrintConsectiveText();
$output = $print->printTextFromRange($numberRange);
fwrite(STDOUT, $output);
