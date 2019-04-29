<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx
 */

namespace tink\core\_Promise;

use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \tink\core\_Lazy\LazyConst;

final class Recover_Impl_ {
	/**
	 * @param \Closure $f
	 * 
	 * @return \Closure
	 */
	static public function ofSync ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:260: characters 5-49
		return function ($e)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:260: characters 32-49
			return new SyncFuture(new LazyConst($f($e)));
		};
	}
}

Boot::registerClass(Recover_Impl_::class, 'tink.core._Promise.Recover_Impl_');