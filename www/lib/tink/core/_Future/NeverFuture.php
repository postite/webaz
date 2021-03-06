<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx
 */

namespace tink\core\_Future;

use \php\Boot;
use \tink\core\_Callback\LinkObject;

class NeverFuture implements FutureObject {
	/**
	 * @var NeverFuture
	 */
	static public $inst;

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return FutureObject
	 */
	public function eager () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:223: characters 37-53
		return NeverFuture::$inst;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function flatMap ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:220: characters 56-72
		return NeverFuture::$inst;
	}

	/**
	 * @return FutureObject
	 */
	public function gather () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:222: characters 38-54
		return NeverFuture::$inst;
	}

	/**
	 * @param \Closure $callback
	 * 
	 * @return LinkObject
	 */
	public function handle ($callback) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:221: characters 61-72
		return null;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function map ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:219: characters 44-60
		return NeverFuture::$inst;
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


		self::$inst = new NeverFuture();
	}
}

Boot::registerClass(NeverFuture::class, 'tink.core._Future.NeverFuture');
NeverFuture::__hx__init();
