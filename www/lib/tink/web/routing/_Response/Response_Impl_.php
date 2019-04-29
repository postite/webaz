<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx
 */

namespace tink\web\routing\_Response;

use \haxe\io\_BytesData\Container;
use \tink\http\HeaderField;
use \php\Boot;
use \tink\streams\Single;
use \tink\chunk\ByteChunk;
use \tink\http\ResponseHeaderBase;
use \tink\core\_Lazy\LazyConst;
use \httpstatus\_HttpStatusMessage\HttpStatusMessage_Impl_;
use \tink\_Url\Url_Impl_;
use \tink\http\_Response\OutgoingResponseData;
use \tink\http\_Response\OutgoingResponse_Impl_;
use \tink\_Chunk\Chunk_Impl_;
use \haxe\io\Bytes;

final class Response_Impl_ {
	/**
	 * @param int $code
	 * @param string $contentType
	 * @param Bytes $bytes
	 * 
	 * @return OutgoingResponseData
	 */
	static public function binary ($code = null, $contentType, $bytes) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:28: characters 5-59
		return OutgoingResponse_Impl_::blob($code, ByteChunk::of($bytes), $contentType);
	}

	/**
	 * @param int $code
	 * 
	 * @return OutgoingResponseData
	 */
	static public function empty ($code = 200) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:32: characters 5-117
		if ($code === null) {
			$code = 200;
		}
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:32: characters 58-62
		$this1 = HttpStatusMessage_Impl_::fromCode($code);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:32: characters 33-103
		$this2 = new ResponseHeaderBase($code, $this1, \Array_hx::wrap([new HeaderField("content-length", "0")]), "HTTP/1.1");
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:32: characters 12-117
		$this3 = new OutgoingResponseData($this2, new Single(new LazyConst(Chunk_Impl_::$EMPTY)));
		return $this3;
	}

	/**
	 * @param Bytes $b
	 * 
	 * @return OutgoingResponseData
	 */
	static public function ofBytes ($b) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:15: characters 5-49
		return Response_Impl_::binary(null, "application/octet-stream", $b);
	}

	/**
	 * @param string $h
	 * 
	 * @return OutgoingResponseData
	 */
	static public function ofHtml ($h) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:19: characters 5-35
		return Response_Impl_::textual(null, "text/html", $h);
	}

	/**
	 * @param string $s
	 * 
	 * @return OutgoingResponseData
	 */
	static public function ofString ($s) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:12: characters 5-36
		return Response_Impl_::textual(null, "text/plain", $s);
	}

	/**
	 * @param object $u
	 * 
	 * @return OutgoingResponseData
	 */
	static public function ofUrl ($u) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:23: characters 59-64
		$this1 = HttpStatusMessage_Impl_::fromCode(302);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:23: characters 84-92
		$fields = mb_strtolower("location");
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:23: characters 33-99
		$this2 = new ResponseHeaderBase(302, $this1, \Array_hx::wrap([new HeaderField($fields, Url_Impl_::toString($u))]), "HTTP/1.1");
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:23: characters 12-113
		$this3 = new OutgoingResponseData($this2, new Single(new LazyConst(Chunk_Impl_::$EMPTY)));
		return $this3;
	}

	/**
	 * @param int $code
	 * @param string $contentType
	 * @param string $string
	 * 
	 * @return OutgoingResponseData
	 */
	static public function textual ($code = null, $contentType, $string) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:36: characters 38-60
		$tmp = strlen($string);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Response.hx:36: characters 5-61
		return Response_Impl_::binary($code, $contentType, new Bytes($tmp, new Container($string)));
	}
}

Boot::registerClass(Response_Impl_::class, 'tink.web.routing._Response.Response_Impl_');