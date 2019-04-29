<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx
 */

namespace tink\json;

use \php\Boot;
use \haxe\format\JsonPrinter;

class Writer0 extends BasicWriter {
	/**
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:106: characters 29-36
		parent::__construct();
	}

	/**
	 * @param object $value
	 * 
	 * @return void
	 */
	public function parse0 ($value) {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:120: characters 9-28
		$_this = $this->buf;
		$_this->b = ($_this->b??'null') . (mb_chr(123)??'null');

		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:151: characters 19-59
		$value1 = $value->name;
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:129: characters 13-35
		$this->buf->add("\"name\":");
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:26: characters 18-41
		$s = JsonPrinter::print($value1);
		$this->buf->add($s);



		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:156: characters 9-28
		$_this1 = $this->buf;
		$_this1->b = ($_this1->b??'null') . (mb_chr(125)??'null');

	}

	/**
	 * @param object $value
	 * 
	 * @return string
	 */
	public function write ($value) {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:118: characters 9-20
		$this->init();
		#(unknown)
		$this->parse0($value);
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:120: characters 9-40
		return $this->buf->b;
	}
}

Boot::registerClass(Writer0::class, 'tink.json.Writer0');