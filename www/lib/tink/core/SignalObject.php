<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Signal.hx
 */

namespace tink\core;

use \php\Boot;
use \tink\core\_Callback\LinkObject;

interface SignalObject {
	/**
	 *  Registers a callback to be invoked every time the signal is triggered
	 *  @return A `CallbackLink` instance that can be used to unregister the callback
	 * 
	 * @param \Closure $handler
	 * 
	 * @return LinkObject
	 */
	public function handle ($handler) ;
}

Boot::registerClass(SignalObject::class, 'tink.core.SignalObject');
