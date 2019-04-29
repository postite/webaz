<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx
 */

namespace tink\core\_Promise;

use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;

final class Combiner_Impl_ {
	/**
	 * @param \Closure $f
	 * 
	 * @return \Closure
	 */
	static public function ofSafe ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:267: characters 5-46
		return function ($x1, $x2)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:267: characters 30-46
			return new SyncFuture(new LazyConst($f($x1, $x2)));
		};
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return \Closure
	 */
	static public function ofSafeSync ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:273: characters 5-46
		return function ($x1, $x2)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:273: characters 30-46
			return new SyncFuture(new LazyConst(Outcome::Success($f($x1, $x2))));
		};
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return \Closure
	 */
	static public function ofSync ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:270: characters 5-46
		return function ($x1, $x2)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:270: characters 30-46
			$ret = $f($x1, $x2)->map(Boot::getStaticClosure(Outcome::class, 'Success'));
			return $ret->gather();
		};
	}
}

Boot::registerClass(Combiner_Impl_::class, 'tink.core._Promise.Combiner_Impl_');
