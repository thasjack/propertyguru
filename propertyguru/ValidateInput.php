<?php

require_once 'propertyguru/Validate.php';

Class ValidateInput extends Validate
{
	//$input String
	public $inputString = '';
	//$input Array
	public $inputArray = array();
	
	public function __construct($input = '')
	{
		$this->setInputArray($input);
	}
	
	
	public function setInputString($input)
	{
		$this->inputString = $input;
	}
	
	public function setInputArray($input)
	{
		$this->setInputString($input);
		$this->inputArray = explode("..", $input);
	}
}