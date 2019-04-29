<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx
 */

namespace tink\core\_Lazy;

use \php\Boot;

final class Lazy_Impl_ {
	/**
	 * @param LazyObject $this
	 * @param \Closure $f
	 * 
	 * @return LazyObject
	 */
	static public function flatMap ($this1, $f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx:15: characters 5-27
		return $this1->flatMap($f);
	}

	/**
	 * @param LazyObject $this
	 * 
	 * @return mixed
	 */
	static public function get ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx:6: characters 5-22
		return $this1->get();
	}

	/**
	 * @param LazyObject $this
	 * @param \Closure $f
	 * 
	 * @return LazyObject
	 */
	static public function map ($this1, $f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx:12: characters 5-23
		return $this1->map($f);
	}

	/**
	 * @param mixed $c
	 * 
	 * @return LazyObject
	 */
	static public function ofConst ($c) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx:18: characters 5-28
		return new LazyConst($c);
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return LazyObject
	 */
	static public function ofFunc ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx:9: characters 5-27
		return new LazyFunc($f);
	}
}

Boot::registerClass(Lazy_Impl_::class, 'tink.core._Lazy.Lazy_Impl_');
