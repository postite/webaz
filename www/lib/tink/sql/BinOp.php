<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Expr.hx
 */

namespace tink\sql;

use \php\Boot;
use \php\_Boot\HxEnum;

class BinOp extends HxEnum {
	/**
	 * @return BinOp
	 */
	static public function Add () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Add', 0, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function And () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('And', 7, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Div () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Div', 4, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Equals () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Equals', 6, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Greater () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Greater', 5, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function In () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('In', 10, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Like () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Like', 9, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Mod () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Mod', 3, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Mult () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Mult', 2, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Or () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Or', 8, []);
		return $inst;
	}

	/**
	 * @return BinOp
	 */
	static public function Subt () {
		static $inst = null;
		if (!$inst) $inst = new BinOp('Subt', 1, []);
		return $inst;
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			0 => 'Add',
			7 => 'And',
			4 => 'Div',
			6 => 'Equals',
			5 => 'Greater',
			10 => 'In',
			9 => 'Like',
			3 => 'Mod',
			2 => 'Mult',
			8 => 'Or',
			1 => 'Subt',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'Add' => 0,
			'And' => 0,
			'Div' => 0,
			'Equals' => 0,
			'Greater' => 0,
			'In' => 0,
			'Like' => 0,
			'Mod' => 0,
			'Mult' => 0,
			'Or' => 0,
			'Subt' => 0,
		];
	}
}

Boot::registerClass(BinOp::class, 'tink.sql.BinOp');
