<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Info.hx
 */

namespace tink\sql;

use \php\Boot;

interface TableInfo {
	/**
	 * @return object
	 */
	public function columnNames () ;

	/**
	 * @return object
	 */
	public function getColumns () ;

	/**
	 * @return object
	 */
	public function getKeys () ;

	/**
	 * @return string
	 */
	public function getName () ;
}

Boot::registerClass(TableInfo::class, 'tink.sql.TableInfo');
