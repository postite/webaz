<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx
 */

namespace tink\http\_Header;

use \php\Boot;
use \haxe\IMap;

final class ReadonlyMap_Impl_ {
	/**
	 * @param IMap $this
	 * @param mixed $key
	 * 
	 * @return bool
	 */
	static public function exists ($this1, $key) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:17: characters 5-28
		return $this1->exists($key);
	}

	/**
	 * @param IMap $this
	 * @param mixed $key
	 * 
	 * @return mixed
	 */
	static public function get ($this1, $key) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:14: characters 5-25
		return $this1->get($key);
	}

	/**
	 * @param IMap $this
	 * 
	 * @return object
	 */
	static public function iterator ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:20: characters 5-27
		return $this1->iterator();
	}

	/**
	 * @param IMap $this
	 * 
	 * @return object
	 */
	static public function keys ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:23: characters 5-23
		return $this1->keys();
	}
}

Boot::registerClass(ReadonlyMap_Impl_::class, 'tink.http._Header.ReadonlyMap_Impl_');
