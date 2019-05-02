<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx
 */

namespace tink\json;

use \haxe\io\_BytesData\Container;
use \php\_Boot\HxAnon;
use \php\Boot;
use \tink\web\forms\_FormFile\FormFile_Impl_;
use \tink\core\TypedError;
use \tink\core\Outcome;
use \php\_Boot\HxString;
use \tink\json\_Parser\JsonString_Impl_;
use \php\_Boot\HxException;
use \haxe\io\Bytes;

class Parser0 extends BasicParser {
	/**
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:75: characters 29-36
		parent::__construct();
	}

	/**
	 * @param string $source
	 * 
	 * @return object
	 */
	public function parse ($source) {
		#(unknown)
		$this->init($source);
		return $this->parse0();
	}

	/**
	 * @return object
	 */
	public function parse0 () {
		$_gthis = $this;
		$v_file = null;
		$hasv_file = false;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:175: characters 7-32
		$__start__ = $this->pos;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
		while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
			$this->pos++;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
		$tmp = null;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
		if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 123)) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
			$this->pos += 1;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp = true;
		} else {
			$tmp = false;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
		if (!$tmp) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
			$this->die("Expected {");
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
		while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
			$this->pos++;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
		$tmp1 = null;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
		if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 125)) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
			$this->pos += 1;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp1 = true;
		} else {
			$tmp1 = false;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:177: lines 177-184
		if (!$tmp1) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:178: lines 178-182
			while (true) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:179: characters 11-45
				$__name__ = $this->parseString();
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp2 = null;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
				if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 58)) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
					$this->pos += 1;
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
					while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
						$this->pos++;
					}
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
					$tmp2 = true;
				} else {
					$tmp2 = false;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
				if (!$tmp2) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
					$this->die("Expected :");
				}
				#src/app/Server.hx:79: characters 36-64
				if ((mb_strlen("file") === ($__name__->max - $__name__->min)) && (HxString::substring($__name__->source, $__name__->min, $__name__->max) === "file")) {
					$__start__1 = $this->pos;
					$rep = $this->parse1();
					try {
						$v_file = FormFile_Impl_::ofJson($rep);
					} catch (\Throwable $__hx__caught_e) {
						$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
						$e = $__hx__real_e;
						$v_file = $this->die(\Std::string($e), $__start__1);
					}
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:105: characters 26-42
					$hasv_file = true;
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:67: characters 22-38
					$this->skipValue();
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp3 = null;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
				if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 44)) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
					$this->pos += 1;
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
					while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
						$this->pos++;
					}
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
					$tmp3 = true;
				} else {
					$tmp3 = false;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:178: lines 178-182
				if (!$tmp3) {
					break;
				}
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp4 = null;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
			if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 125)) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
				$this->pos += 1;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp4 = true;
			} else {
				$tmp4 = false;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
			if (!$tmp4) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
				$this->die("Expected }");
			}
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:186: lines 186-188
		$__missing__ = function ($field)  use (&$__start__, &$_gthis) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:187: characters 9-68
			return $_gthis->die("missing field \"" . ($field??'null') . "\"", $__start__);
		};
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:190: characters 7-39
		return new HxAnon(["file" => ($hasv_file ? $v_file : $__missing__("file"))]);
	}

	/**
	 * @return object
	 */
	public function parse1 () {
		#src/app/Server.hx:79: characters 36-64
		$_gthis = $this;
		#(unknown)
		$v_content = null;
		$hasv_content = false;
		$v_fileName = null;
		$hasv_fileName = false;
		$v_mimeType = null;
		$hasv_mimeType = false;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:175: characters 7-32
		$__start__ = $this->pos;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
		while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
			$this->pos++;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
		$tmp = null;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
		if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 123)) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
			$this->pos += 1;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp = true;
		} else {
			$tmp = false;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
		if (!$tmp) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
			$this->die("Expected {");
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
		while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
			$this->pos++;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
		$tmp1 = null;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
		if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 125)) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
			$this->pos += 1;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp1 = true;
		} else {
			$tmp1 = false;
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:177: lines 177-184
		if (!$tmp1) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:178: lines 178-182
			while (true) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:179: characters 11-45
				$__name__ = $this->parseString();
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp2 = null;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
				if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 58)) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
					$this->pos += 1;
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
					while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
						$this->pos++;
					}
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
					$tmp2 = true;
				} else {
					$tmp2 = false;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
				if (!$tmp2) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
					$this->die("Expected :");
				}
				#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormFile.hx:12: characters 3-18
				if ((mb_strlen("mimeType") === ($__name__->max - $__name__->min)) && (HxString::substring($__name__->source, $__name__->min, $__name__->max) === "mimeType")) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:100: characters 25-43
					$v_mimeType = JsonString_Impl_::toString($this->parseString());
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:105: characters 26-42
					$hasv_mimeType = true;
				} else if ((mb_strlen("fileName") === ($__name__->max - $__name__->min)) && (HxString::substring($__name__->source, $__name__->min, $__name__->max) === "fileName")) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:100: characters 25-43
					$v_fileName = JsonString_Impl_::toString($this->parseString());
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:105: characters 26-42
					$hasv_fileName = true;
				} else if ((mb_strlen("content") === ($__name__->max - $__name__->min)) && (HxString::substring($__name__->source, $__name__->min, $__name__->max) === "content")) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:48: characters 18-74
					$str = JsonString_Impl_::toString($this->parseString());
					$s = base64_decode($str, true);
					$v_content1 = strlen($s);
					$v_content = new Bytes($v_content1, new Container($s));
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:105: characters 26-42
					$hasv_content = true;
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:67: characters 22-38
					$this->skipValue();
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp3 = null;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
				if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 44)) {
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
					$this->pos += 1;
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
					while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
						$this->pos++;
					}
					#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
					$tmp3 = true;
				} else {
					$tmp3 = false;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:178: lines 178-182
				if (!$tmp3) {
					break;
				}
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:382: characters 9-29
			while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
				$this->pos++;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
			$tmp4 = null;
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:383: lines 383-389
			if (($this->max > $this->pos) && (\StringTools::fastCodeAt($this->source, $this->pos) === 125)) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:384: characters 9-35
				$this->pos += 1;
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:386: characters 11-31
				while (($this->pos < $this->max) && (\StringTools::fastCodeAt($this->source, $this->pos) < 33)) {
					$this->pos++;
				}
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:380: lines 380-390
				$tmp4 = true;
			} else {
				$tmp4 = false;
			}
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 18-154
			if (!$tmp4) {
				#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Parser.hx:367: characters 76-108
				$this->die("Expected }");
			}
		}
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:186: lines 186-188
		$__missing__ = function ($field)  use (&$__start__, &$_gthis) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:187: characters 9-68
			return $_gthis->die("missing field \"" . ($field??'null') . "\"", $__start__);
		};
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:123: characters 26-82
		$tmp5 = ($hasv_content ? $v_content : $__missing__("content"));
		$tmp6 = ($hasv_fileName ? $v_fileName : $__missing__("fileName"));
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenReader.hx:190: characters 7-39
		return new HxAnon([
			"content" => $tmp5,
			"fileName" => $tmp6,
			"mimeType" => ($hasv_mimeType ? $v_mimeType : $__missing__("mimeType")),
		]);
	}

	/**
	 * @param string $source
	 * 
	 * @return Outcome
	 */
	public function tryParse ($source) {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:90: lines 90-91
		$_gthis = $this;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:91: characters 9-81
		return TypedError::catchExceptions(function ()  use (&$source, &$_gthis) {
			#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:91: characters 60-80
			return $_gthis->parse($source);
		}, null, new HxAnon([
			"fileName" => "tink/json/macros/Macro.hx",
			"lineNumber" => 91,
			"className" => "tink.json.Parser0",
			"methodName" => "tryParse",
		]));
	}
}

Boot::registerClass(Parser0::class, 'tink.json.Parser0');
