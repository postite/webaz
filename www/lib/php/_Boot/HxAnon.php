<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx
 */

namespace php\_Boot;

use \php\Boot;

/**
 * Anonymous objects implementation
 */
class HxAnon extends \StdClass {
	/**
	 * @param mixed $fields
	 * 
	 * @return void
	 */
	public function __construct ($fields = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:907: lines 907-912
		$_gthis = $this;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:908: characters 3-10
		;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:909: lines 909-911
		if ($fields !== null) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:910: characters 4-84
			foreach ($fields as $key => $value) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:910: characters 65-69
				$tmp = $_gthis;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:910: characters 49-83
				$tmp->{$key} = $value;
			}
		}
	}

	/**
	 * @param string $name
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function __call ($name, $args) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:921: characters 3-57
		return ($this->$name)(...$args);
	}

	/**
	 * @param string $name
	 * 
	 * @return mixed
	 */
	public function __get ($name) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:916: characters 3-14
		return null;
	}
}

Boot::registerClass(HxAnon::class, 'php._Boot.HxAnon');
