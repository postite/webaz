<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx
 */

namespace tink\json;

use \tink\json\_Representation\Representation_Impl_;
use \php\Boot;

class Writer98 extends BasicWriter {
	/**
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:106: characters 29-36
		parent::__construct();
	}


	/**
	 * @param int $value
	 * 
	 * @return string
	 */
	public function write ($value) {
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:118: characters 9-20
		$this->init();
		#src/app/TinkLiteRoute.hx:31: lines 31-35
		$this1 = $value;
		#src/app/TinkLiteRoute.hx:31: lines 31-35
		$value1 = Representation_Impl_::get($this1);
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:29: characters 18-38
		$s = \Std::string($value1);
		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/GenWriter.hx:29: characters 18-38
		$this->buf->add($s);


		#/Users/ut/haxe/haxe_libraries/tink_json/0.9.0/haxelib/src/tink/json/macros/Macro.hx:120: characters 9-40
		return $this->buf->b;
	}
}


Boot::registerClass(Writer98::class, 'tink.json.Writer98');
