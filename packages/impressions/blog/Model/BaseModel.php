<?php
namespace Impressions\Blog\Model;

class BaseModel {

	public function bind(array $data) {
		$class_vars = get_class_vars(get_class($this));
		foreach ($class_vars as $name => $value) {
			$prop = $this->CamelCaseToUnderscore($name);
			if (isset($data[$prop]))
				$this->$name = $data[$prop];
		}
	}
	
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}
	
	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	
		return $this;
	}

	/**
	* Convert strings with underscores into CamelCase
	*
	* @param    string    $string    The string to convert
	* @param    bool    $first_char_caps    camelCase or CamelCase
	* @return    string    The converted string
	*
	*/
	function underscoreToCamelCase($string)
	{
	    return preg_replace('/_(.?)/e',"strtoupper('$1')",$string);
	}
	
	public function camelCaseToUnderscore($string) {
		return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $string));
	}
	
	public function spaceToUnderscore($string) {
		return str_replace(' ', '_', $string);
	}
	
	public function toArray() {
		$array = array();
		$class_vars = get_class_vars(get_class($this));
		foreach ($class_vars as $name => $value) {
			$array[$name] = $value;
		}
		
		return $array;
	}
	
}