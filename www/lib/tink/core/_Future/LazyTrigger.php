<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx
 */

namespace tink\core\_Future;

use \php\Boot;
use \tink\core\_Callback\LinkObject;
use \tink\core\_Callback\Callback_Impl_;
use \tink\core\FutureTrigger;
use \php\_Boot\HxException;

class LazyTrigger extends FutureTrigger {
	/**
	 * @var \Closure
	 */
	public $op;

	/**
	 * @param \Closure $op
	 * 
	 * @return void
	 */
	public function __construct ($op) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:394: characters 7-28
		if ($op === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:394: characters 23-28
			throw new HxException("invalid argument");
		}
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:396: characters 5-17
		$this->op = $op;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:397: characters 5-12
		parent::__construct();
	}

	/**
	 * @return LazyTrigger
	 */
	public function eager () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:401: lines 401-405
		if ($this->op !== null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:402: characters 7-19
			$op = $this->op;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:403: characters 7-21
			$this->op = null;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:404: characters 7-25
			Callback_Impl_::invoke($op, Boot::getInstanceClosure($this, 'trigger'));
		}
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:406: characters 5-16
		return $this;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function flatMap ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:416: lines 416-421
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:418: lines 418-421
		if ($this->op === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:418: characters 23-39
			return parent::flatMap($f);
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:419: lines 419-421
			return Future_Impl_::async(function ($cb)  use (&$f, &$_gthis) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:420: characters 9-45
				$_gthis->handle(function ($v)  use (&$f, &$cb) {
					#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:420: characters 29-44
					$f($v)->handle($cb);
				});
			}, true);
		}
	}

	/**
	 * @param \Closure $cb
	 * 
	 * @return LinkObject
	 */
	public function handle ($cb) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:424: characters 5-12
		$this->eager();
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:425: characters 5-28
		return parent::handle($cb);
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function map ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:409: lines 409-414
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:411: lines 411-414
		if ($this->op === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:411: characters 23-35
			return parent::map($f);
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:412: lines 412-414
			return Future_Impl_::async(function ($cb)  use (&$f, &$_gthis) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:413: characters 9-38
				$_gthis->handle(function ($v)  use (&$f, &$cb) {
					#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:413: characters 32-36
					$tmp = $f($v);
					#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:413: characters 29-37
					$cb($tmp);
				});
			}, true);
		}
	}
}

Boot::registerClass(LazyTrigger::class, 'tink.core._Future.LazyTrigger');
