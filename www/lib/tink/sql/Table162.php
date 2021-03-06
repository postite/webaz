<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx
 */

namespace tink\sql;

use \php\Boot;
use \tink\sql\_Expr\Expr_Impl_;
use \php\_Boot\HxAnon;

class Table162 extends TableSource {
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
		$this11 = Expr_Impl_::ofData(ExprData::EField($tableName, "id"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this12 = Expr_Impl_::ofData(ExprData::EField($tableName, "imageUrl"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this13 = Expr_Impl_::ofData(ExprData::EField($tableName, "length"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this14 = Expr_Impl_::ofData(ExprData::EField($tableName, "soundUrl"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:54: characters 29-75
		$this15 = Expr_Impl_::ofData(ExprData::EField($tableName, "title"));
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:183: characters 17-121
		parent::__construct($cnx, $tableName, $alias, new HxAnon([
			"desc" => $this1,
			"id" => $this11,
			"imageUrl" => $this12,
			"length" => $this13,
			"soundUrl" => $this14,
			"title" => $this15,
		]));
	}


	/**
	 * @return \Array_hx
	 */
	public function columnNames () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:192: characters 17-36
		return Table162::$COLUMN_NAMES;
	}


	/**
	 * @return \Array_hx
	 */
	public function getColumns () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:190: characters 17-31
		return Table162::$COLUMNS;
	}


	/**
	 * @return \Array_hx
	 */
	public function getKeys () {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/804d2a9f24a3df7369d109c7d68274f73ad726a8/src/tink/sql/macros/TableBuilder.hx:194: characters 17-28
		return Table162::$KEYS;
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
	"id",
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
		"name" => "id",
		"nullable" => false,
		"type" => DataType::DInt(IntSize::Default(), false, false, null),
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


Boot::registerClass(Table162::class, 'tink.sql.Table162');
Table162::__hx__init();
