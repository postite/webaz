<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: src//views/Head.tt
 */

namespace views\__impl;

use \php\Boot;
use \tink\template\_Html\Html_Impl_;
use \tink\template\_Html\HtmlBuffer_Impl_;

class Head {
	/**
	 * @param \Array_hx $scripts
	 * @param string $actions
	 * 
	 * @return string
	 */
	static public function render ($scripts, $actions) {
		#src//views/Head.tt:1: characters 26-67
		$ret = Html_Impl_::buffer();
		$ret->arr[$ret->length] = "<!-- POSITION: {\"min\":25,\"max\":66,\"file\":\"src//views/Head.tt\"} -->";
		++$ret->length;

		$ret->arr[$ret->length] = "\x0A<head>\x0A    <meta charset=\"UTF-8\">\x0A    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\x0A    <script   src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"   integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"   crossorigin=\"anonymous\"></script>\x0A\x09<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css\">\x0A    <script src=\"https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js\"></script>\x0A\x09<link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\"> \x0A    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\x0A    ";
		++$ret->length;

		#src//views/Head.tt:1: characters 693-707
		$_g = 0;
		while ($_g < $scripts->length) {
			#src//views/Head.tt:1: characters 693-696
			$scr = ($scripts->arr[$_g] ?? null);
			#src//views/Head.tt:1: characters 693-707
			++$_g;
			#src//views/Head.tt:1: characters 693-709
			$ret->arr[$ret->length] = "\x0A    <script src=\"";
			++$ret->length;

			#src//views/Head.tt:1: characters 729-732
			$b = Html_Impl_::escape($scr);
			$ret->arr[$ret->length] = $b;
			++$ret->length;

			#src//views/Head.tt:1: characters 729-734
			$ret->arr[$ret->length] = "\"></script>\x0A    ";
			++$ret->length;


		}

		#src//views/Head.tt:1: characters 752-758
		$ret->arr[$ret->length] = "\x0A    <script>\x0A    \x0A    var actions=\x0A    \"";
		++$ret->length;

		#src//views/Head.tt:1: characters 802-809
		$b1 = Html_Impl_::escape($actions);
		$ret->arr[$ret->length] = $b1;
		++$ret->length;

		#src//views/Head.tt:1: characters 802-811
		$ret->arr[$ret->length] = "\";\x0A    \x0A    </script>\x0A    <link rel=\"stylesheet\" href=\"/style.css\">\x0A    <script src=\"/client.js\"></script>\x0A</head>\x0A";
		++$ret->length;



		#/Users/ut/haxe/haxe_libraries/tink_template/0.3.3/github/dcf3c80c34ba368d9b8d06f42c6c25640ec9d7f5/src/tink/template/Generator.hx:121: characters 19-30
		return HtmlBuffer_Impl_::collapse($ret);
	}
}

Boot::registerClass(Head::class, 'views.__impl.Head');
