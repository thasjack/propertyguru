<?php
require_once 'propertyguru/PrintText.php';

class PrintConsectiveText extends PrintText
{
	
	public function notFoundText($var)
	{
		if($this->exitModFive && $this->exitModThree)
		{
			$this->output .= 'Buzz';
			$this->exitModFive = false;
			$this->exitModThree = false;
		}
		else
			$this->output .= $var;
	}
}