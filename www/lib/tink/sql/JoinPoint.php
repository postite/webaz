<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Dataset.hx
 */

namespace tink\sql;

use \php\Boot;

class JoinPoint {
	/**
	 * @var \Closure
	 */
	public $_where;

	/**
	 * @param \Closure $applyFilter
	 * 
	 * @return void
	 */
	public function __construct ($applyFilter) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/Dataset.hx:204: characters 5-30
		$this->_where = $applyFilter;
	}
}

Boot::registerClass(JoinPoint::class, 'tink.sql.JoinPoint');