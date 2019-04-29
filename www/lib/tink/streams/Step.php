<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx
 */

namespace tink\streams;

use \php\Boot;
use \tink\core\TypedError;
use \php\_Boot\HxEnum;

class Step extends HxEnum {
	/**
	 * @return Step
	 */
	static public function End () {
		static $inst = null;
		if (!$inst) $inst = new Step('End', 2, []);
		return $inst;
	}

	/**
	 * @param TypedError $e
	 * 
	 * @return Step
	 */
	static public function Fail ($e) {
		return new Step('Fail', 1, [$e]);
	}

	/**
	 * @param mixed $value
	 * @param StreamObject $next
	 * 
	 * @return Step
	 */
	static public function Link ($value, $next) {
		return new Step('Link', 0, [$value, $next]);
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			2 => 'End',
			1 => 'Fail',
			0 => 'Link',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'End' => 0,
			'Fail' => 1,
			'Link' => 2,
		];
	}
}

Boot::registerClass(Step::class, 'tink.streams.Step');
