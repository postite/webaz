<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_querystring/0.6.0/haxelib/src/tink/querystring/Pairs.hx
 */

namespace tink\querystring\_Pairs;

use \php\Boot;
use \tink\url\_Query\QueryStringParser;

final class Pairs_Impl_ {
	/**
	 * @param object $i
	 * 
	 * @return object
	 */
	static public function ofIterable ($i) {
		#/Users/ut/haxe/haxe_libraries/tink_querystring/0.6.0/haxelib/src/tink/querystring/Pairs.hx:15: characters 5-24
		return $i->iterator();
	}

	/**
	 * @param string $s
	 * 
	 * @return object
	 */
	static public function portions ($s) {
		#/Users/ut/haxe/haxe_libraries/tink_querystring/0.6.0/haxelib/src/tink/querystring/Pairs.hx:9: characters 5-61
		return new QueryStringParser($s, "&", "=", 0);
	}

	/**
	 * @param object $u
	 * 
	 * @return object
	 */
	static public function portionsOfUrl ($u) {
		#/Users/ut/haxe/haxe_libraries/tink_querystring/0.6.0/haxelib/src/tink/querystring/Pairs.hx:12: characters 5-29
		return Pairs_Impl_::portions($u->query);
	}
}

Boot::registerClass(Pairs_Impl_::class, 'tink.querystring._Pairs.Pairs_Impl_');
