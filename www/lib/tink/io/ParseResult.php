<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/StreamParser.hx
 */

namespace tink\io;

use \php\Boot;
use \tink\core\TypedError;
use \tink\streams\StreamObject;
use \php\_Boot\HxEnum;

class ParseResult extends HxEnum {
	/**
	 * @param TypedError $e
	 * 
	 * @return ParseResult
	 */
	static public function Broke ($e) {
		return new ParseResult('Broke', 2, [$e]);
	}

	/**
	 * @param TypedError $e
	 * @param StreamObject $rest
	 * 
	 * @return ParseResult
	 */
	static public function Invalid ($e, $rest) {
		return new ParseResult('Invalid', 1, [$e, $rest]);
	}

	/**
	 * @param mixed $data
	 * @param StreamObject $rest
	 * 
	 * @return ParseResult
	 */
	static public function Parsed ($data, $rest) {
		return new ParseResult('Parsed', 0, [$data, $rest]);
	}

	/**
	 * Returns array of (constructorIndex => constructorName)
	 *
	 * @return string[]
	 */
	static public function __hx__list () {
		return [
			2 => 'Broke',
			1 => 'Invalid',
			0 => 'Parsed',
		];
	}

	/**
	 * Returns array of (constructorName => parametersCount)
	 *
	 * @return int[]
	 */
	static public function __hx__paramsCount () {
		return [
			'Broke' => 1,
			'Invalid' => 2,
			'Parsed' => 2,
		];
	}
}

Boot::registerClass(ParseResult::class, 'tink.io.ParseResult');
