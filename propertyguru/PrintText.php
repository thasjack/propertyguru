<?php
class PrintText
{
	public $output = '';
	public $exitModFive = false;
	public $exitModThree = false;
	
	public function printTextFromRange($range = array())
	{
		for($i = $range[0]; $i <= $range[1]; $i++)
		{
			$found = false;
			if($i % 3 == 0)
			{
				$this->output .= 'Fizz';
				$found = true;
				$this->exitModThree = true;
			}
			if($i % 5 == 0)
			{
				$this->output .= 'Buzz';
				$found = true;
				$this->exitModFive = true;
			}
			if(!$found)
			{
				$this->notFoundText($i);
			}
			$this->output .= ' ';
		}
		return $this->output;
	}
	
	public function notFoundText($var)
	{
		$this->output .= $var;
	}
}
?>