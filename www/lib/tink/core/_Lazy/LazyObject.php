<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Lazy.hx
 */

namespace tink\core\_Lazy;

use \php\Boot;

interface LazyObject {
	/**
	 * @param \Closure $f
	 * 
	 * @return LazyObject
	 */
	public function flatMap ($f) ;

	/**
	 * @return mixed
	 */
	public function get () ;

	/**
	 * @param \Closure $f
	 * 
	 * @return LazyObject
	 */
	public function map ($f) ;
}

Boot::registerClass(LazyObject::class, 'tink.core._Lazy.LazyObject');
