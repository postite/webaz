<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx
 */

namespace tink\core;

use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \tink\core\_Future\SimpleFuture;
use \tink\core\_Callback\LinkObject;
use \tink\core\_Callback\Callback_Impl_;
use \tink\core\_Callback\CallbackList_Impl_;
use \tink\core\_Lazy\LazyConst;
use \tink\core\_Future\FutureObject;

class FutureTrigger implements FutureObject {
	/**
	 * @var \Array_hx
	 */
	public $list;
	/**
	 * @var mixed
	 */
	public $result;

	/**
	 * @param FutureObject $f
	 * 
	 * @return FutureObject
	 */
	static public function gatherFuture ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:362: characters 5-19
		$op = null;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:363: lines 363-370
		$this1 = new SimpleFuture(function ($cb)  use (&$op, &$f) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:364: lines 364-368
			if ($op === null) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:365: characters 9-33
				$op = new FutureTrigger();
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:366: characters 9-29
				$f->handle(Boot::getInstanceClosure($op, 'trigger'));
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:367: characters 9-17
				$f = null;
			}
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:369: characters 7-27
			return $op->handle($cb);
		});
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:363: lines 363-370
		return $this1;
	}

	/**
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:323: characters 17-35
		$this1 = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:323: characters 5-35
		$this->list = $this1;
	}

	/**
	 * @return FutureObject
	 */
	public function asFuture () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:359: characters 5-16
		return $this;
	}

	/**
	 * @return FutureTrigger
	 */
	public function eager () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:356: characters 5-16
		return $this;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function flatMap ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:345: lines 345-349
		if ($this->list === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:345: characters 18-27
			return $f($this->result);
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:347: characters 9-39
			$ret = new FutureTrigger();
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:348: characters 9-56
			CallbackList_Impl_::add($this->list, function ($v)  use (&$f, &$ret) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:348: characters 31-55
				$f($v)->handle(Boot::getInstanceClosure($ret, 'trigger'));
			});
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:349: characters 9-12
			return $ret;
		}
	}

	/**
	 * @return FutureTrigger
	 */
	public function gather () {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:353: characters 5-16
		return $this;
	}

	/**
	 * @param \Closure $callback
	 * 
	 * @return LinkObject
	 */
	public function handle ($callback) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:326: characters 19-23
		$_g = $this->list;
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:327: lines 327-331
		if ($_g === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:328: characters 9-32
			Callback_Impl_::invoke($callback, $this->result);
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:329: characters 9-13
			return null;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:331: characters 9-24
			return CallbackList_Impl_::add($_g, $callback);
		}
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return FutureObject
	 */
	public function map ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:336: lines 336-340
		if ($this->list === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:336: characters 18-40
			return new SyncFuture(new LazyConst($f($this->result)));
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:338: characters 9-39
			$ret = new FutureTrigger();
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:339: characters 9-49
			CallbackList_Impl_::add($this->list, function ($v)  use (&$f, &$ret) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:339: characters 43-47
				$tmp = $f($v);
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:339: characters 31-48
				$ret->trigger($tmp);
			});
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:340: characters 9-12
			return $ret;
		}
	}

	/**
	 *  Triggers a value for this future
	 * 
	 * @param mixed $result
	 * 
	 * @return bool
	 */
	public function trigger ($result) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:378: lines 378-386
		if ($this->list === null) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:378: characters 25-30
			return false;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:380: characters 9-30
			$list = $this->list;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:381: characters 9-25
			$this->list = null;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:382: characters 9-29
			$this->result = $result;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:383: characters 9-28
			CallbackList_Impl_::invoke($list, $result);
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:384: characters 9-21
			CallbackList_Impl_::clear($list);
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Future.hx:385: characters 9-13
			return true;
		}
	}
}

Boot::registerClass(FutureTrigger::class, 'tink.core.FutureTrigger');
