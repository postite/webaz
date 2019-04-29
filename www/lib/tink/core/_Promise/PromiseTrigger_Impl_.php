<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx
 */

namespace tink\core\_Promise;

use \php\Boot;
use \tink\core\TypedError;
use \tink\core\Outcome;
use \tink\core\FutureTrigger;
use \tink\core\_Future\FutureObject;

final class PromiseTrigger_Impl_ {
	/**
	 * @return FutureTrigger
	 */
	static public function _new () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:279: character 3
		$this1 = new FutureTrigger();
		return $this1;
	}

	/**
	 * @param FutureTrigger $this
	 * 
	 * @return FutureObject
	 */
	static public function asPromise ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:282: characters 54-76
		return $this1;
	}

	/**
	 * @param FutureTrigger $this
	 * @param TypedError $e
	 * 
	 * @return bool
	 */
	static public function reject ($this1, $e) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:281: characters 42-73
		return $this1->trigger(Outcome::Failure($e));
	}

	/**
	 * @param FutureTrigger $this
	 * @param mixed $v
	 * 
	 * @return bool
	 */
	static public function resolve ($this1, $v) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Promise.hx:280: characters 39-70
		return $this1->trigger(Outcome::Success($v));
	}
}

Boot::registerClass(PromiseTrigger_Impl_::class, 'tink.core._Promise.PromiseTrigger_Impl_');
