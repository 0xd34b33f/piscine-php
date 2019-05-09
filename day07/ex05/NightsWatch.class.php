<?php
class NightsWatch
{

	private $fighters = array();
	public function recruit($s)
	{
		$this->fighters[] = $s;
	}
	function fight()
	{
		foreach ($this->fighters as $s) {
			if (method_exists(get_class($s), 'fight'))
				$s->fight();
		}
	}

}