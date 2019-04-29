<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx
 */

namespace tink\core;

use \php\Boot;
use \haxe\ds\Option as DsOption;

class OptionIter {
	/**
	 * @var bool
	 */
	public $alive;
	/**
	 * @var mixed
	 */
	public $value;

	/**
	 * @param DsOption $o
	 * 
	 * @return void
	 */
	public function __construct ($o) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:101: characters 15-19
		$this->alive = true;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:104: lines 104-107
		if ($o->index === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:105: characters 17-18
			$v = $o->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:105: characters 21-30
			$this->value = $v;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:106: characters 16-29
			$this->alive = false;
		}
	}

	/**
	 * @return bool
	 */
	public function hasNext () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:110: characters 5-17
		return $this->alive;
	}

	/**
	 * @return mixed
	 */
	public function next () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:113: characters 5-18
		$this->alive = false;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Option.hx:115: characters 5-17
		return $this->value;
	}
}

Boot::registerClass(OptionIter::class, 'tink.core.OptionIter');
