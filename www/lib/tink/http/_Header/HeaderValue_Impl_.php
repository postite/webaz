<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx
 */

namespace tink\http\_Header;

use \php\_Boot\HxAnon;
use \haxe\io\_BytesData\Container;
use \php\Boot;
use \tink\url\_Query\QueryStringParser;
use \php\_Boot\HxString;
use \haxe\ds\StringMap;
use \haxe\io\Bytes;
use \tink\url\_Portion\Portion_Impl_;

final class HeaderValue_Impl_ {
	/**
	 * @var \Array_hx
	 */
	static public $DAYS;
	/**
	 * @var \Array_hx
	 */
	static public $MONTHS;

	/**
	 * @param string $username
	 * @param string $password
	 * 
	 * @return string
	 */
	static public function basicAuth ($username, $password) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:187: characters 37-74
		$s = "" . ($username??'null') . ":" . ($password??'null');
		$bytes = strlen($s);
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:187: characters 23-75
		$result = base64_encode((new Bytes($bytes, new Container($s)))->toString());
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:187: characters 5-86
		return "Basic " . ($result??'null');
	}

	/**
	 * @param string $this
	 * 
	 * @return StringMap
	 */
	static public function getExtension ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:157: characters 5-33
		return (HeaderValue_Impl_::parse($this1)->arr[0] ?? null)->extensions;
	}

	/**
	 * @param \Date $d
	 * 
	 * @return string
	 */
	static public function ofDate ($d) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:192: characters 5-103
		return \DateTools::format($d, ((HeaderValue_Impl_::$DAYS->arr[$d->getDay()] ?? null)??'null') . ", %d " . ((HeaderValue_Impl_::$MONTHS->arr[$d->getMonth()] ?? null)??'null') . " %Y %H:%M:%S GMT");
	}

	/**
	 * @param int $i
	 * 
	 * @return string
	 */
	static public function ofInt ($i) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:195: characters 5-25
		return \Std::string($i);
	}

	/**
	 *  Parse the value of this header in to `{value:String, extensions:Map<String, String>}` form
	 * 
	 * @param string $this
	 * 
	 * @return \Array_hx
	 */
	static public function parse ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:163: lines 163-166
		return HeaderValue_Impl_::parseWith($this1, function ($_, $params) {
			$_g = new StringMap();
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:163: characters 59-65
			while ($params->hasNext()) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:163: lines 163-166
				$p = $params->next();
				$key = $p->name;
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:163: characters 84-102
				$_g1 = Portion_Impl_::toString($p->value);
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:163: lines 163-166
				$value = (HxString::charCodeAt($_g1, 0) === 34 ? mb_substr($_g1, 1, mb_strlen($_g1) - 2) : $_g1);
				$_g->data[$key] = $value;
			}
			return $_g;
		});
	}

	/**
	 *  Parse the value of this header, using the given function to parse the extensions
	 *  @param parseExtension - function to parse the extension
	 * 
	 * @param string $this
	 * @param \Closure $parseExtension
	 * 
	 * @return \Array_hx
	 */
	static public function parseWith ($this1, $parseExtension) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:173: lines 173-184
		$_g = new \Array_hx();
		$_g1 = 0;
		$_g2 = HxString::split($this1, ",");
		while ($_g1 < $_g2->length) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:173: characters 17-18
			$v = ($_g2->arr[$_g1] ?? null);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:173: lines 173-184
			++$_g1;
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:174: characters 7-19
			$v = trim($v);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:175: characters 22-36
			$_g11 = HxString::indexOf($v, ";");
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:175: lines 175-178
			$i = ($_g11 === -1 ? mb_strlen($v) : $_g11);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:179: characters 7-34
			$value = mb_substr($v, 0, $i);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:180: lines 180-183
			$x = new HxAnon([
				"value" => $value,
				"extensions" => $parseExtension($value, new QueryStringParser($v, ";", "=", $i + 1)),
			]);
			$_g->arr[$_g->length] = $x;
			++$_g->length;

		}

		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/Header.hx:173: lines 173-184
		return $_g;
	}

	/**
	 * @internal
	 * @access private
	 */
	static public function __hx__init ()
	{
		static $called = false;
		if ($called) return;
		$called = true;


		self::$DAYS = HxString::split("Sun,Mon,Tue,Wen,Thu,Fri,Sat", ",");
		self::$MONTHS = HxString::split("Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec", ",");
	}
}

Boot::registerClass(HeaderValue_Impl_::class, 'tink.http._Header.HeaderValue_Impl_');
HeaderValue_Impl_::__hx__init();