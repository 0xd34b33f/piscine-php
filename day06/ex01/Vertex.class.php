<?php
require_once "Color.class.php";

class Vertex
{
	static $verbose;
	private $_x;
	private $_y;
	private $_z;
	private $w = 1;
	private $_color;

	public function __construct($xyz)
	{
		if (isset($xyz['x']) and isset($xyz['y']) and isset($xyz['z'])) {
			$this->_x = $xyz['x'];
			$this->_y = $xyz['y'];
			$this->_z = $xyz['z'];
		}
		if (isset($xyzc['w']) and !empty($xyzc['w']))
			$this->_w = $xyzc['w'];
		if (isset($xyzc['color']) and !empty($xyzc['color']) and $xyzc['color'] instanceof Color)
			$this->_color = $xyzc['color'];
		else
			$this->_color = new Color(array("rgb" => 65535));

		if (self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n",
				$this->_x,
				$this->_y,
				$this->_z,
				$this->_w,
				$this->_color->getRed(),
				$this->_color->getGreen(),
				$this->_color->getBlue());
	}

	public static function doc()
	{
		$read = fopen("Vertex.doc.txt", 'r');
		echo "\n";
		while ($read && !feof($read))
			echo fgets($read);
		echo "\n";
	}

	function __destruct()
	{
		if (self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->getRed(), $this->_color->getGreen(), $this->_color->getBlue());
	}

	function __toString()
	{
		if (self::$verbose)
			return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->getRed(), $this->_color->getGreen(), $this->_color->getBlue())));
		return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
	}

	/**
	 * @return mixed
	 */
	public function getW()
	{
		return $this->_w;
	}

	/**
	 * @param mixed $w
	 */
	public function setW($w)
	{
		$this->_w = $w;
	}

	/**
	 * @return mixed
	 */
	public function getX()
	{
		return $this->_x;
	}

	/**
	 * @param mixed $x
	 */
	public function setX($x)
	{
		$this->_x = $x;
	}

	/**
	 * @return mixed
	 */
	public function getY()
	{
		return $this->_y;
	}

	/**
	 * @param mixed $y
	 */
	public function setY($y)
	{
		$this->_y = $y;
	}

	/**
	 * @return mixed
	 */
	public function getZ()
	{
		return $this->_z;
	}

	/**
	 * @param mixed $z
	 */
	public function setZ($z)
	{
		$this->_z = $z;
	}

	/**
	 * @return Color
	 */
	public function getColor()
	{
		return $this->_color;
	}

	/**
	 * @param Color $color
	 */
	public function setColor($color)
	{
		$this->_color = $color;
	}
}