<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Signal.hx
 */

namespace tink\core\_Signal;

use \php\Boot;
use \tink\core\_Callback\LinkObject;
use \tink\core\SignalObject;

class SimpleSignal implements SignalObject {
	/**
	 * @var \Closure
	 */
	public $f;

	/**
	 * @param \Closure $f
	 * 
	 * @return void
	 */
	public function __construct ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Signal.hx:150: characters 33-43
		$this->f = $f;
	}

	/**
	 * @param \Closure $cb
	 * 
	 * @return LinkObject
	 */
	public function handle ($cb) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Signal.hx:151: characters 37-54
		return ($this->f)($cb);
	}
}

Boot::registerClass(SimpleSignal::class, 'tink.core._Signal.SimpleSignal');
