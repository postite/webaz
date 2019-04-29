<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx
 */

namespace tink\http;

use \php\Boot;

class RequestHeader extends Header {
	/**
	 * @var string
	 */
	public $method;
	/**
	 * @var string
	 */
	public $protocol;
	/**
	 * @var object
	 */
	public $url;

	/**
	 * @param string $method
	 * @param object $url
	 * @param string $protocol
	 * @param \Array_hx $fields
	 * 
	 * @return void
	 */
	public function __construct ($method, $url, $protocol = "HTTP/1.1", $fields) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:20: lines 20-25
		if ($protocol === null) {
			$protocol = "HTTP/1.1";
		}
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:21: characters 5-25
		$this->method = $method;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:22: characters 5-19
		$this->url = $url;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:23: characters 5-29
		$this->protocol = $protocol;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:24: characters 5-18
		parent::__construct($fields);
	}

	/**
	 * @param \Array_hx $fields
	 * 
	 * @return RequestHeader
	 */
	public function concat ($fields) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:28: characters 30-36
		$tmp = $this->method;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:28: characters 38-41
		$tmp1 = $this->url;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:28: characters 43-51
		$tmp2 = $this->protocol;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:28: characters 5-80
		return new RequestHeader($tmp, $tmp1, $tmp2, $this->fields->concat($fields));
	}

	/**
	 * @return string
	 */
	public function toString () {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:31: characters 23-40
		$this1 = $this->url;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Request.hx:31: characters 5-79
		return "" . ($this->method??'null') . " " . ((($this1->query === null ? $this1->path : ($this1->path??'null') . "?" . ($this1->query??'null')))??'null') . " " . ($this->protocol??'null') . "\x0D\x0A" . (parent::toString()??'null');
	}

	public function __toString() {
		return $this->toString();
	}
}

Boot::registerClass(RequestHeader::class, 'tink.http.RequestHeader');
