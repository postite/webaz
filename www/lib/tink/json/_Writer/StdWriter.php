<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Writer.hx
 */

namespace tink\json\_Writer;

use \php\Boot;
use \haxe\format\JsonPrinter;

class StdWriter {
	/**
	 * @param mixed $v
	 * 
	 * @return string
	 */
	static public function stringify ($v) {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/Writer.hx:104: characters 5-44
		return JsonPrinter::print($v);
	}
}

Boot::registerClass(StdWriter::class, 'tink.json._Writer.StdWriter');
