<?php


namespace AlexVenga;

//use InvalidArgumentException;

use InvalidArgumentException;

class BracketsMathematicalExpressions
{

    protected $mathematicalExpression;

    public function __construct($mathematicalExpression)
    {

        $this->mathematicalExpression = $mathematicalExpression;

        if (!$this->checkMathematicalExpression()) {
            throw new InvalidArgumentException('The equation contains invalid characters');
        }
    }

    protected function checkMathematicalExpression()
    {
        if (preg_match('/[^() \t\n\r]/', $this->mathematicalExpression)) {
            return false;
        } else {
            return true;
        }
    }

    public function getMathematicalExpression()
    {
        return $this->mathematicalExpression;
    }

    public function getClearMathematicalExpression()
    {
        return preg_replace('/[ \t\n\r]+/', '', $this->mathematicalExpression);
    }

}
