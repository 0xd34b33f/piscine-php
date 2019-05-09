<?php

class UnholyFactory
{
	private $army = array();

	function absorb($obj)
	{
		array_push($this->army, $obj);
	}

	function fabricate($name)
	{
		foreach ($this->army as $fighter) {
			if ($fighter->f_name == $name)
				return $fighter;
		}
		return null;
	}
}