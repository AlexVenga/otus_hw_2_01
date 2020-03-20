<?php

use AlexVenga\BracketsMathematicalExpressions;
use AlexVenga\CheckBrackets;

require_once './vendor/autoload.php';


$mathematicalExpression = new BracketsMathematicalExpressions("(()(())(()())\n\t())");

echo $mathematicalExpression->getMathematicalExpression() . PHP_EOL;

$checkClass = new CheckBrackets();

var_dump($checkClass->checkBracketsInString($mathematicalExpression));

echo PHP_EOL;