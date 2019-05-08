<?php

class Color
{
	private $red;
	private $green;
	private $blue;
	static $verbose = false;


	/**
	 * Color constructor.
	 * @param $color array(3) or array(1)
	 */
	public function __construct($color)
	{
		if (isset($color['red']) && isset($color['green']) && isset($color['blue'])) {
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
		} else if (isset($color['rgb'])) {
			$rgb = intval($color["rgb"]);
			$this->red = $rgb / 65281 % 256;
			$this->green = $rgb / 256 % 256;
			$this->blue = $rgb % 256;
		}
		if (self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
	}

	public function __destruct()
	{
		if (self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}


	/**
	 * @param $Color
	 * @return Color
	 */
	public function add($Color)
	{
		return (new Color(array('red' => $this->red + $Color->red,
			'green' => $this->green + $Color->green,
			'blue' => $this->blue + $Color->blue)));
	}

	/**
	 * @param $Color
	 * @return Color
	 */
	public function sub($Color)
	{
		return (new Color(array('red' => $this->red - $Color->red,
			'green' => $this->green - $Color->green,
			'blue' => $this->blue - $Color->blue)));
	}

	/**
	 * @param $mul
	 * @return Color
	 */
	public function mult($mul)
	{
		return (new Color(array('red' => $this->red * $mul,
			'green' => $this->green * $mul,
			'blue' => $this->blue * $mul)));
	}

	/**
	 * returns string from rgb
	 * @return string
	 */
	public function __toString()
	{
		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
	}

	public static function doc()
	{
		$read = fopen("Color.doc.txt", "r");
		while ($res = fgets($read)) {
			print $res;
		}
		print "\n";
	}

	/**
	 * @return int
	 */
	public function getRed()
	{
		return $this->red;
	}

	/**
	 * @return int
	 */
	public function getGreen()
	{
		return $this->green;
	}

	/**
	 * @return int
	 */
	public function getBlue()
	{
		return $this->blue;
	}

}