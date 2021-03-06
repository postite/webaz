<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx
 */

namespace tink\streams;

use \php\Boot;
use \tink\core\_Future\Future_Impl_;
use \tink\core\_Future\FutureObject;

class FutureStream extends StreamBase {
	/**
	 * @var FutureObject
	 */
	public $f;

	/**
	 * @param FutureObject $f
	 * 
	 * @return void
	 */
	public function __construct ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:634: characters 5-15
		parent::__construct();
		$this->f = $f;
	}

	/**
	 * @param \Closure $handler
	 * 
	 * @return FutureObject
	 */
	public function forEach ($handler) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:639: lines 639-643
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:640: lines 640-642
		return Future_Impl_::async(function ($cb)  use (&$_gthis, &$handler) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:641: characters 7-59
			$_gthis->f->handle(function ($s)  use (&$handler, &$cb) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:641: characters 29-58
				$s->forEach($handler)->handle($cb);
			});
		});
	}

	/**
	 * @return FutureObject
	 */
	public function next () {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:637: characters 12-50
		$ret = $this->f->flatMap(function ($s) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:637: characters 34-49
			return $s->next();
		});
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:637: characters 12-50
		return $ret->gather();
	}
}

Boot::registerClass(FutureStream::class, 'tink.streams.FutureStream');
