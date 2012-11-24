<?php

require_once 'propertyguru/Validate.php';

Class ValidateInput extends Validate
{
	//$input String
	protected $inputString = '';
	//$input Array
	protected $inputArray = array();
	
	public function __construct($input = '')
	{
		$this->setInputArray($input);
		$this->validation();
	}
	
	
	public function setInputString($input)
	{
		$this->inputString = trim($input);
	}
	
	public function getInputString()
	{
		return $this->inputString;
	}
	
	public function setInputArray($input)
	{
		$this->setInputString($input);
		$this->inputArray = explode("..", $this->getInputString());
	}
	
	public function getInputArray($index = null)
	{
		if($index == null)
			return $this->inputArray;
		else if(isset($this->inputArray[$index]))
			return trim($this->inputArray[$index]);
		return;
	}
	
	public function incrementalValidation()
	{
		if($this->getInputArray(0) >= $this->getInputArray(1))
			exit("Only Incremental Integer Numbers are valid");
	}
	
	public function validation()
	{
		if($this->nullValidation($this->getInputArray(0)) || $this->nullValidation($this->getInputArray(1)))
			exit("Input are not valid");
		if($this->integerValidation($this->getInputArray(0)) || $this->integerValidation($this->getInputArray(1)))
			exit("Only Integers are valid");
		if($this->belowOneValidation($this->getInputArray(0)) || $this->belowOneValidation($this->getInputArray(0)))
			exit("Only Positive Integers are valid");
		$this->incrementalValidation();
	}
}