<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx
 */

namespace tink\sql;

use \php\Boot;
use \tink\sql\_Expr\Expr_Impl_;
use \php\_Boot\HxAnon;

class Table25 extends TableSource {
	/**
	 * @var \Array_hx
	 */
	static public $COLUMNS;
	/**
	 * @var \Array_hx
	 */
	static public $COLUMN_NAMES;
	/**
	 * @var \Array_hx
	 */
	static public $KEYS;


	/**
	 * @param Connection $cnx
	 * @param string $tableName
	 * @param string $alias
	 * 
	 * @return void
	 */
	public function __construct ($cnx, $tableName, $alias = null) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this1 = Expr_Impl_::ofData(ExprData::EField($tableName, "desc"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this2 = Expr_Impl_::ofData(ExprData::EField($tableName, "imageUrl"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this3 = Expr_Impl_::ofData(ExprData::EField($tableName, "length"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this4 = Expr_Impl_::ofData(ExprData::EField($tableName, "soundUrl"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this5 = Expr_Impl_::ofData(ExprData::EField($tableName, "title"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:183: characters 17-121
		parent::__construct($cnx, $tableName, $alias, new HxAnon([
			"desc" => $this1,
			"imageUrl" => $this2,
			"length" => $this3,
			"soundUrl" => $this4,
			"title" => $this5,
		]));
	}


	/**
	 * @return \Array_hx
	 */
	public function columnNames () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:192: characters 17-36
		return Table25::$COLUMN_NAMES;
	}


	/**
	 * @return \Array_hx
	 */
	public function getColumns () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:190: characters 17-31
		return Table25::$COLUMNS;
	}


	/**
	 * @return \Array_hx
	 */
	public function getKeys () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:194: characters 17-28
		return Table25::$KEYS;
	}


	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


self::$COLUMN_NAMES = \Array_hx::wrap([
	"desc",
	"imageUrl",
	"length",
	"soundUrl",
	"title",
]);
self::$COLUMNS = \Array_hx::wrap([
	new HxAnon([
		"name" => "desc",
		"nullable" => true,
		"type" => DataType::DText(TextSize::Default(), null),
	]),
	new HxAnon([
		"name" => "imageUrl",
		"nullable" => true,
		"type" => DataType::DString(255, null),
	]),
	new HxAnon([
		"name" => "length",
		"nullable" => false,
		"type" => DataType::DInt(IntSize::Small(), true, false, null),
	]),
	new HxAnon([
		"name" => "soundUrl",
		"nullable" => false,
		"type" => DataType::DString(255, null),
	]),
	new HxAnon([
		"name" => "title",
		"nullable" => false,
		"type" => DataType::DString(255, null),
	]),
]);
self::$KEYS = new \Array_hx();
	}
}


Boot::registerClass(Table25::class, 'tink.sql.Table25');
Table25::__hx__init();