<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: src//views/Menu.tt
 */

namespace views\__impl;

use \php\Boot;
use \tink\template\_Html\Html_Impl_;
use \tink\template\_Html\HtmlBuffer_Impl_;

class Menu {
	/**
	 * @param object $nav
	 * 
	 * @return string
	 */
	static public function render ($nav = null) {
		#src//views/Menu.tt:1: characters 29-56
		$ret = Html_Impl_::buffer();
		$ret->arr[$ret->length] = "<!-- POSITION: {\"min\":28,\"max\":55,\"file\":\"src//views/Menu.tt\"} -->";
		++$ret->length;

		$ret->arr[$ret->length] = "\x0A   <ul>\x0A    \x0A    ";
		++$ret->length;

		#src//views/Menu.tt:1: characters 87-90
		$it = $nav->iterator();
		while ($it->hasNext()) {
			#src//views/Menu.tt:1: characters 81-90
			$it1 = $it->next();
			#src//views/Menu.tt:1: characters 81-93
			$ret->arr[$ret->length] = "\x0A        <li><a href=\"";
			++$ret->length;

			#src//views/Menu.tt:1: characters 117-123
			$ret->arr[$ret->length] = $it1->url;
			++$ret->length;

			#src//views/Menu.tt:1: characters 117-125
			$ret->arr[$ret->length] = "\">";
			++$ret->length;

			#src//views/Menu.tt:1: characters 129-137
			$ret->arr[$ret->length] = $it1->title;
			++$ret->length;

			#src//views/Menu.tt:1: characters 129-139
			$ret->arr[$ret->length] = "</a></li>\x0A      ";
			++$ret->length;

		}

		#src//views/Menu.tt:1: characters 157-162
		$ret->arr[$ret->length] = "\x0A       \x0A     </ul>\x0A    ";
		++$ret->length;



		#/Users/ut/haxe/haxe_libraries/tink_template/0.3.3/github/dcf3c80c34ba368d9b8d06f42c6c25640ec9d7f5/src/tink/template/Generator.hx:121: characters 19-30
		return HtmlBuffer_Impl_::collapse($ret);
	}
}

Boot::registerClass(Menu::class, 'views.__impl.Menu');
