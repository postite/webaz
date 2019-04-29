<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx
 */

namespace tink\http\containers;

use \tink\http\IncomingRequest;
use \php\_Boot\HxAnon;
use \tink\http\Container;
use \tink\http\HeaderField;
use \tink\core\_Future\SyncFuture;
use \tink\http\ContainerResult;
use \tink\core\NamedWith;
use \php\Boot;
use \tink\io\std\InputSource;
use \tink\core\Noise;
use \haxe\io\_BytesData\Container as _BytesDataContainer;
use \php\Lib;
use \tink\io\_Source\Source_Impl_;
use \tink\streams\Single;
use \tink\core\TypedError;
use \tink\io\_Worker\Worker_Impl_;
use \sys\io\File;
use \tink\chunk\ByteChunk;
use \tink\core\Outcome;
use \sys\io\FileOutput;
use \tink\core\_Lazy\LazyConst;
use \tink\http\IncomingRequestHeader;
use \tink\http\_Method\Method_Impl_;
use \tink\core\_Future\Future_Impl_;
use \tink\_Url\Url_Impl_;
use \tink\io\_Sink\SinkYielding_Impl_;
use \tink\http\IncomingRequestBody;
use \haxe\io\Bytes;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;
use \tink\core\_Future\FutureObject;
use \tink\http\HandlerObject;
use \tink\http\BodyPart;

class PhpContainer implements Container {
	/**
	 * @var PhpContainer
	 */
	static public $inst;

	/**
	 * @param mixed $a
	 * @param \Closure $process
	 * 
	 * @return \Array_hx
	 */
	static public function getParts ($a, $process) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:35: characters 5-49
		$map = Lib::hashOfAssociativeArray($a);
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:36: characters 5-18
		$ret = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:37: characters 18-28
		$name = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($map->data))));
		while ($name->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:37: lines 37-44
			$name1 = $name->next();
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:39: lines 39-43
			if ($process(($map->data[$name1] ?? null)) !== null) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:40: lines 40-43
				$x = new NamedWith($name1, $process(($map->data[$name1] ?? null)));
				$ret->arr[$ret->length] = $x;
				++$ret->length;
			}
		}

		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:45: characters 5-15
		return $ret;
	}

	/**
	 * @param string $key
	 * 
	 * @return string
	 */
	static public function getServerVar ($key) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:24: lines 24-25
		return $_SERVER[$key];
	}

	/**
	 * @return void
	 */
	public function __construct () {
	}

	/**
	 * @return IncomingRequest
	 */
	public function getRequest () {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:50: characters 7-79
		$header = Method_Impl_::ofString($_SERVER["REQUEST_METHOD"], function ($_) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:50: characters 68-78
			return "GET";
		});
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:51: characters 7-34
		$header1 = Url_Impl_::fromString($_SERVER["REQUEST_URI"]);
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:54: lines 54-86
		$header2 = null;
		if (function_exists("getallheaders")) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:56: characters 9-136
			$raw = Lib::hashOfAssociativeArray(getallheaders());
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:58: characters 11-70
			$_g = new \Array_hx();
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:58: characters 25-35
			$name = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($raw->data))));
			while ($name->hasNext()) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:58: characters 12-69
				$name1 = $name->next();
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:58: characters 53-57
				$this1 = mb_strtolower($name1);
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:58: characters 37-69
				$x = new HeaderField($this1, ($raw->data[$name1] ?? null));
				$_g->arr[$_g->length] = $x;
				++$_g->length;
			}

			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:54: lines 54-86
			$header2 = $_g;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:61: characters 11-120
			$h = Lib::hashOfAssociativeArray($_SERVER);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:63: characters 11-28
			$headers = new \Array_hx();
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:65: characters 20-28
			$k = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($h->data))));
			while ($k->hasNext()) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:65: lines 65-74
				$k1 = $k->next();
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:66: lines 66-72
				$key = null;
				if ($k1 === "CONTENT_LENGTH") {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:68: lines 68-71
					if (!array_key_exists("HTTP_CONTENT_LENGTH", $h->data)) {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:66: lines 66-72
						$key = "Content-Length";
					} else if (mb_substr($k1, 0, 5) === "HTTP_") {
						$key = \StringTools::replace(mb_substr($k1, 5, null), "_", "-");
					} else {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:71: characters 23-31
						continue;
					}
				} else if ($k1 === "CONTENT_MD5") {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:69: lines 69-71
					if (!array_key_exists("HTTP_CONTENT_MD5", $h->data)) {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:66: lines 66-72
						$key = "Content-Md5";
					} else if (mb_substr($k1, 0, 5) === "HTTP_") {
						$key = \StringTools::replace(mb_substr($k1, 5, null), "_", "-");
					} else {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:71: characters 23-31
						continue;
					}
				} else if ($k1 === "CONTENT_TYPE") {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:67: lines 67-71
					if (!array_key_exists("HTTP_CONTENT_TYPE", $h->data)) {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:66: lines 66-72
						$key = "Content-Type";
					} else if (mb_substr($k1, 0, 5) === "HTTP_") {
						$key = \StringTools::replace(mb_substr($k1, 5, null), "_", "-");
					} else {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:71: characters 23-31
						continue;
					}
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:70: lines 70-71
					if (mb_substr($k1, 0, 5) === "HTTP_") {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:66: lines 66-72
						$key = \StringTools::replace(mb_substr($k1, 5, null), "_", "-");
					} else {
						#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:71: characters 23-31
						continue;
					}
				}
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:73: characters 17-20
				$this2 = mb_strtolower($key);
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:73: characters 13-31
				$x1 = new HeaderField($this2, ($h->data[$k1] ?? null));
				$headers->arr[$headers->length] = $x1;
				++$headers->length;

			}

			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:75: lines 75-84
			if (!array_key_exists("HTTP_AUTHORIZATION", $h->data)) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:76: lines 76-83
				if (array_key_exists("REDIRECT_HTTP_AUTHORIZATION", $h->data)) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:77: characters 22-35
					$this3 = mb_strtolower("Authorization");
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:77: characters 17-75
					$x2 = new HeaderField($this3, ($h->data["REDIRECT_HTTP_AUTHORIZATION"] ?? null));
					$headers->arr[$headers->length] = $x2;
					++$headers->length;
				} else if (array_key_exists("PHP_AUTH_USER", $h->data)) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:79: characters 17-81
					$basic = (array_key_exists("PHP_AUTH_PW", $h->data) ? ($h->data["PHP_AUTH_PW"] ?? null) : "");
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:80: characters 22-35
					$this4 = mb_strtolower("Authorization");
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:80: characters 75-121
					$s = ($h->data["PHP_AUTH_USER"] ?? null);
					$bytes = strlen($s);
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:80: characters 49-122
					$result = base64_encode((new Bytes($bytes, new _BytesDataContainer($s)))->toString());
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:80: characters 17-146
					$headers->arr[$headers->length] = new HeaderField($this4, "Basic " . ($result??'null') . ((":" . ($basic??'null'))??'null'));
					++$headers->length;

				} else if (array_key_exists("PHP_AUTH_DIGEST", $h->data)) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:82: characters 22-35
					$this5 = mb_strtolower("Authorization");
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:82: characters 17-63
					$x3 = new HeaderField($this5, ($h->data["PHP_AUTH_DIGEST"] ?? null));
					$headers->arr[$headers->length] = $x3;
					++$headers->length;
				}
			}
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:54: lines 54-86
			$header2 = $headers;
		}
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:49: lines 49-88
		$header3 = new IncomingRequestHeader($header, $header1, "1.1", $header2);
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:91: characters 7-34
		$tmp = $_SERVER["REMOTE_ADDR"];
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:93: characters 14-34
		$_g1 = $header3->contentType();
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:93: lines 93-136
		$tmp1 = null;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:93: characters 14-34
		if (($_g1->index === 0) && (($_g1->params[0]->type === "multipart") && (($_g1->params[0]->subtype === "form-data") && ($header3->method === "POST")))) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:93: lines 93-136
			$tmp1 = IncomingRequestBody::Parsed(PhpContainer::getParts($_POST, Boot::getStaticClosure(BodyPart::class, 'Value'))->concat(PhpContainer::getParts($_FILES, function ($v) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:103: characters 15-46
				$tmpName = $v["tmp_name"];
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:104: characters 15-39
				$name2 = $v["name"];
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:107: characters 24-45
				if ($v["error"] === 0) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:109: characters 21-95
					$streamName = "uploaded file \"" . ($name2??'null') . "\" in temporary location \"" . ($tmpName??'null') . "\"";
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:110: lines 110-126
					return BodyPart::File(new HxAnon([
						"fileName" => $name2,
						"size" => $v["size"],
						"mimeType" => $v["type"],
						"read" => function ()  use (&$name2, &$tmpName) {
							#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:114: lines 114-117
							$input = File::read($tmpName, true);
							$options = null;
							if ($options === null) {
								$options = new HxAnon();
							}
							$tmp2 = Worker_Impl_::ensure($options->worker);
							$_g2 = $options->chunkSize;
							$tmp3 = null;
							if ($_g2 === null) {
								$tmp3 = 65536;
							} else {
								$v1 = $_g2;
								$tmp3 = $v1;
							}
							$tmp4 = Bytes::alloc($tmp3);
							return new InputSource($name2, $input, $tmp2, $tmp4, 0);
						},
						"saveTo" => function ($path)  use (&$streamName, &$tmpName) {
							#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:118: lines 118-125
							return new SyncFuture(new LazyConst((rename($tmpName, $path) ? Outcome::Success(Noise::Noise()) : Outcome::Failure(new TypedError(null, "Failed to save " . ($streamName??'null') . " to " . ($path??'null'), new HxAnon([
								"fileName" => "tink/http/containers/PhpContainer.hx",
								"lineNumber" => 124,
								"className" => "tink.http.containers.PhpContainer",
								"methodName" => "getRequest",
							]))))));
						},
					]));
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:127: characters 28-32
					return null;
				}
			})));
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:133: characters 18-127
			$s1 = file_get_contents("php://input");
			$b = strlen($s1);
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:93: lines 93-136
			$tmp1 = IncomingRequestBody::Plain(new Single(new LazyConst(ByteChunk::of(new Bytes($b, new _BytesDataContainer($s1))))));
		}
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:90: lines 90-137
		return new IncomingRequest($tmp, $header3, $tmp1);
	}

	/**
	 * @param HandlerObject $handler
	 * 
	 * @return FutureObject
	 */
	public function run ($handler) {
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:140: lines 140-162
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:141: lines 141-162
		return Future_Impl_::async(function ($cb)  use (&$_gthis, &$handler) {
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:143: characters 9-21
			$tmp = $_gthis->getRequest();
			#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:142: lines 142-161
			$handler->process($tmp)->handle(function ($res)  use (&$cb) {
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:146: characters 9-69
				http_response_code($res->header->statusCode);
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:150: characters 19-29
				$h = $res->header->fields->iterator();
				while ($h->hasNext()) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:150: lines 150-152
					$h1 = $h->next();
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:152: characters 11-49
					header(($h1->name??'null') . ": " . ($h1->value??'null'));
				}

				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:156: characters 9-178
				$out = SinkYielding_Impl_::ofOutput("output buffer", new FileOutput(fopen("php://output", "w")));
				#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:158: lines 158-160
				Source_Impl_::pipeTo($res->body, $out, new HxAnon(["end" => true]))->handle(function ($o)  use (&$cb) {
					#/Users/ut/haxe/haxe_libraries/tink_http/0.8.2/github/c95e2dc46654779b496e5f99d01241b1d572e33c/src/tink/http/containers/PhpContainer.hx:159: characters 11-23
					$cb(ContainerResult::Shutdown());
				});
			});
		});
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


		self::$inst = new PhpContainer();
	}
}

Boot::registerClass(PhpContainer::class, 'tink.http.containers.PhpContainer');
PhpContainer::__hx__init();
