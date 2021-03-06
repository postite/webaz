<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Expr.hx
 */

namespace tink\sql;

use \php\Boot;
use \php\_Boot\HxEnum;

class ValueType extends HxEnum {
	/**
	 * @param ValueType $type
	 * 
	 * @return ValueType
	 */
	static public function VArray ($type) {
		return new ValueType('VArray', 4, [$type]);
	}

	/**
	 * @return ValueType
	 */
	static public function VBool () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VBool', 1, []);
		return $inst;
	}

	/**
	 * @return ValueType
	 */
	static public function VBytes () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VBytes', 5, []);
		return $inst;
	}

	/**
	 * @return ValueType
	 */
	static public function VDate () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VDate', 6, []);
		return $inst;
	}

	/**
	 * @return ValueType
	 */
	static public function VFloat () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VFloat', 2, []);
		return $inst;
	}

	/**
	 * @param string $type
	 * 
	 * @return ValueType
	 */
	static public function VGeometry ($type) {
		return new ValueType('VGeometry', 7, [$type]);
	}

	/**
	 * @return ValueType
	 */
	static public function VInt () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VInt', 3, []);
		return $inst;
	}

	/**
	 * @return ValueType
	 */
	static public function VString () {
		static $inst = null;
		if (!$inst) $inst = new ValueType('VString', 0, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			4 => 'VArray',
			1 => 'VBool',
			5 => 'VBytes',
			6 => 'VDate',
			2 => 'VFloat',
			7 => 'VGeometry',
			3 => 'VInt',
			0 => 'VString',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'VArray' => 1,
			'VBool' => 0,
			'VBytes' => 0,
			'VDate' => 0,
			'VFloat' => 0,
			'VGeometry' => 1,
			'VInt' => 0,
			'VString' => 0,
		];
	}
}

Boot::registerClass(ValueType::class, 'tink.sql.ValueType');
