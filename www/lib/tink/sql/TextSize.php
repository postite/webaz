<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Info.hx
 */

namespace tink\sql;

use \php\Boot;
use \php\_Boot\HxEnum;

class TextSize extends HxEnum {
	/**
	 * @return TextSize
	 */
	static public function Default () {
		static $inst = null;
		if (!$inst) $inst = new TextSize('Default', 1, []);
		return $inst;
	}

	/**
	 * @return TextSize
	 */
	static public function Long () {
		static $inst = null;
		if (!$inst) $inst = new TextSize('Long', 3, []);
		return $inst;
	}

	/**
	 * @return TextSize
	 */
	static public function Medium () {
		static $inst = null;
		if (!$inst) $inst = new TextSize('Medium', 2, []);
		return $inst;
	}

	/**
	 * @return TextSize
	 */
	static public function Tiny () {
		static $inst = null;
		if (!$inst) $inst = new TextSize('Tiny', 0, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			1 => 'Default',
			3 => 'Long',
			2 => 'Medium',
			0 => 'Tiny',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'Default' => 0,
			'Long' => 0,
			'Medium' => 0,
			'Tiny' => 0,
		];
	}
}

Boot::registerClass(TextSize::class, 'tink.sql.TextSize');