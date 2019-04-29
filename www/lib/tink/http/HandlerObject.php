<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Handler.hx
 */

namespace tink\http;

use \php\Boot;
use \tink\core\_Future\FutureObject;

interface HandlerObject {
	/**
	 * @param IncomingRequest $req
	 * 
	 * @return FutureObject
	 */
	public function process ($req) ;
}

Boot::registerClass(HandlerObject::class, 'tink.http.HandlerObject');
