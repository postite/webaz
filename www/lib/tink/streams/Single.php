<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx
 */

namespace tink\streams;

use \tink\core\_Future\SyncFuture;
use \tink\core\_Lazy\LazyObject;
use \php\Boot;
use \tink\core\_Lazy\LazyConst;
use \tink\core\_Future\FutureObject;

class Single extends StreamBase {
	/**
	 * @var LazyObject
	 */
	public $value;

	/**
	 * @param LazyObject $value
	 * 
	 * @return void
	 */
	public function __construct ($value) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:457: characters 5-23
		parent::__construct();
		$this->value = $value;
	}

	/**
	 * @param \Closure $handle
	 * 
	 * @return FutureObject
	 */
	public function forEach ($handle) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:462: lines 462-472
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:463: lines 463-472
		$ret = $handle($this->value->get())->map(function ($step)  use (&$_gthis) {
			$__hx__switch = ($step->index);
			if ($__hx__switch === 0) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:465: characters 9-21
				return Conclusion::Halted($_gthis);
			} else if ($__hx__switch === 1) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:467: characters 9-29
				return Conclusion::Halted(Empty_hx::$inst);
			} else if ($__hx__switch === 2) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:469: characters 9-17
				return Conclusion::Depleted();
			} else if ($__hx__switch === 3) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:470: characters 17-18
				$e = $step->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:471: characters 9-25
				return Conclusion::Clogged($e, $_gthis);
			}
		});
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:463: lines 463-472
		return $ret->gather();
	}

	/**
	 * @return FutureObject
	 */
	public function next () {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:460: characters 29-40
		$v = $this->value->get();
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:460: characters 12-56
		return new SyncFuture(new LazyConst(Step::Link($v, Empty_hx::$inst)));
	}
}

Boot::registerClass(Single::class, 'tink.streams.Single');
