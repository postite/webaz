<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: src/apis/tinklite/RecLiteApi.hx
 */

namespace apis\tinklite;

use \php\Boot;
use \haxe\ds\StringMap;
use \tink\sql\Database;
use \tink\sql\Driver;
use \tink\sql\Table0;

class Db extends Database {
	/**
	 * @var Table0
	 */
	public $Rec;

	/**
	 * @param string $name
	 * @param Driver $driver
	 * 
	 * @return void
	 */
	public function __construct ($name, $driver) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/macros/DatabaseBuilder.hx:61: characters 7-41
		$cnx = $driver->open($name, $this);
		#src/apis/tinklite/RecLiteApi.hx:8: characters 10-13
		$this->Rec = new Table0($cnx, "Rec");
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/macros/DatabaseBuilder.hx:63: characters 29-37
		$_g = new StringMap();
		$_g->data["Rec"] = $this->Rec;
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/macros/DatabaseBuilder.hx:63: characters 7-38
		parent::__construct($name, $driver, $_g);
	}
}

Boot::registerClass(Db::class, 'apis.tinklite.Db');
