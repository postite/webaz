<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: src/wire/Tools.hx
 */

namespace wire;

use \php\Boot;

class Tools {
	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function underclean ($str) {
		#src/wire/Tools.hx:4: characters 5-47
		$str = (new \EReg("[\\.]", ""))->replace($str, "alaplacedupoint");
		#src/wire/Tools.hx:5: characters 5-42
		$nonWordChar = new \EReg("[\\xC0-\\xFF\\s\\W]", "g");
		#src/wire/Tools.hx:6: characters 5-38
		$str = $nonWordChar->replace($str, "_");
		#src/wire/Tools.hx:7: characters 5-44
		$str = (new \EReg("alaplacedupoint", ""))->replace($str, ".");
		#src/wire/Tools.hx:8: characters 5-15
		return $str;
	}
}

Boot::registerClass(Tools::class, 'wire.Tools');
