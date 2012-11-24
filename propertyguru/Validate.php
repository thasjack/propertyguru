<?php
Class Validate
{
	protected $validateVariable = null;
	
	/**
	 * Set Validate Variable.
	 * This Will Trimmed the variable
	 * @param string $var
	 */
	public function setValidateVariable($var)
	{
		$this->validateVariable = trim($var);
	}
	
	/**
	 * Get Trim Variable.
	 * @return trimmed string
	 */
	public function getValidateVariable()
	{
		return $this->validateVariable;
	}
	
	
	//Non Negative Integer Validation
	public function integerValidation($var)
	{
		$this->setValidateVariable($var);
		if((preg_match('@^[0-9]+$@',$this->getValidateVariable()) !== 1))
			return false;
		else 
			return true;
	}
	
	//Null Validation
	public function nullValidation($var)
	{
		$this->setValidateVariable($var);
		if($this->getValidateVariable() == null)
			return false;
		else 
			return true;
	}
	
	//Below one Validation
	public function belowOneValidation($var)
	{
		$this->setValidateVariable($var);
		if($this->getValidateVariable() < 1)
			return false;
		else 
			return true;
	}
}