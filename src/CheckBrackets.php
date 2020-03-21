<?php


namespace AlexVenga;

class CheckBrackets
{

    public function checkBracketsInString(BracketsMathematicalExpressions $stringClass)
    {

        $string = $stringClass->getClearMathematicalExpression();

        while (preg_match('/\(\)/', $string)) {
            $string = preg_replace('/\(\)/', '', $string);
        }

        if (empty($string)) {
            return true;
        } else {
            return false;
        }

    }

}