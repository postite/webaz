<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: src//views/Home.tt
 */

namespace views\__impl;

use \php\Boot;
use \tink\template\_Html\Html_Impl_;
use \tink\template\_Html\HtmlBuffer_Impl_;

class Home {
	/**
	 * @return string
	 */
	static public function render () {
		#src//views/Home.tt:1: characters 25-29
		$ret = Html_Impl_::buffer();
		$ret->arr[$ret->length] = "<!-- POSITION: {\"min\":24,\"max\":28,\"file\":\"src//views/Home.tt\"} -->";
		++$ret->length;

		$ret->arr[$ret->length] = "\x0A<div class=\"ui sticky\">\x0A      <h1>HOME</h1>\x0A    </div>\x0A";
		++$ret->length;


		#/Users/ut/haxe/haxe_libraries/tink_template/0.3.3/github/dcf3c80c34ba368d9b8d06f42c6c25640ec9d7f5/src/tink/template/Generator.hx:121: characters 19-30
		return HtmlBuffer_Impl_::collapse($ret);
	}
}

Boot::registerClass(Home::class, 'views.__impl.Home');
