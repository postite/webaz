<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx
 */

use \php\Boot;
use \php\_Boot\HxString;
use \haxe\io\Path;

class Mots {
	/**
	 * @var string
	 */
	static public $emojRange = "[🌀-🗿|🇦-🇿|✀-➿|🤀-🧿|😀-🙏|🚀-🛿|☀-⛿]";

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function camelize ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:43: characters 3-64
		$str = (new \EReg("\\s(.)", "g"))->map($str, function ($reg) {
			#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:43: characters 35-63
			return mb_strtoupper($reg->matched(0));
		});
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:44: characters 3-32
		$str = (new \EReg("\\s", "g"))->replace($str, "");
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:45: characters 3-13
		return $str;
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function capitalize ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:34: characters 3-53
		return (mb_strtoupper(mb_substr($str, 0, 1))??'null') . (mb_substr($str, 1, null)??'null');
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function cleanAccents ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:22: characters 3-30
		return \Diactrics::clean($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function cleanFile ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:12: characters 3-47
		$extension = Path::extension($str);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:13: characters 3-43
		$str = Path::withoutExtension($str);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:14: characters 5-23
		$str = Mots::stripEmoj($str);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:15: characters 3-43
		$str = (Mots::underclean($str, " ")??'null') . (("." . ($extension??'null'))??'null');
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:16: characters 5-25
		return Mots::camelize($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function cleanPath ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:38: characters 3-37
		return Path::normalize($str);
	}

	/**
	 * `contains` returns `true` if `s` contains one or more occurrences of `test`.
	 * 
	 * @param string $s
	 * @param string $test
	 * 
	 * @return bool
	 */
	static public function contains ($s, $test) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:61: characters 10-44
		if ($test !== "") {
			#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:61: characters 24-44
			return HxString::indexOf($s, $test) >= 0;
		} else {
			#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:61: characters 10-44
			return true;
		}
	}

	/**
	 * @param string $str
	 * @param string $ends
	 * 
	 * @return bool
	 */
	static public function endsWith ($str, $ends) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:51: characters 5-48
		$reg = new \EReg("(" . ($ends??'null') . "\$)", "m");
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:53: characters 3-24
		return $reg->match($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function firstWord ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:67: characters 3-21
		$r = new \EReg("\\S\\w*", "g");
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:68: characters 3-15
		$r->match($str);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:69: characters 3-22
		return $r->matched(0);
	}

	/**
	 * @param string $n
	 * 
	 * @return string
	 */
	static public function getExtension ($n) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:30: characters 3-35
		return Path::extension($n);
	}

	/**
	 * @param string $str
	 * 
	 * @return bool
	 */
	static public function matchEmoj ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:89: characters 3-45
		return (new \EReg(Mots::$emojRange, "g"))->match($str);
	}

	/**
	 * @param string $str
	 * 
	 * @return string
	 */
	static public function stripEmoj ($str) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:84: characters 3-51
		return (new \EReg(Mots::$emojRange, "g"))->replace($str, "");
	}

	/**
	 * @param string $n
	 * 
	 * @return string
	 */
	static public function stripExtension ($n) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:26: characters 3-42
		return Path::withoutExtension($n);
	}

	/**
	 * @param string $s
	 * 
	 * @return string
	 */
	static public function unCamel ($s) {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:94: characters 3-24
		$r1 = new \EReg("([A-Z])", "g");
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:95: characters 3-59
		$s = $r1->map($s, function ($reg) {
			#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:95: characters 24-58
			return " " . (mb_strtolower($reg->matched(0))??'null');
		});
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:96: characters 3-11
		return $s;
	}

	/**
	 * @param string $str
	 * @param string $separator
	 * 
	 * @return string
	 */
	static public function underclean ($str, $separator = "_") {
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:2: lines 2-9
		if ($separator === null) {
			$separator = "_";
		}
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:4: characters 5-43
		$nonWordChar = new \EReg("[\\xC0-\\xFF\\s\\W]", "g");
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:5: characters 5-26
		$str = Mots::cleanAccents($str);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:6: characters 3-44
		$str = $nonWordChar->replace($str, $separator);
		#/Users/ut/haxe/haxe_libraries/mots/0.0.4/github/b6b1bcc03b08e368981e61487db42f10e2901605/src/Mots.hx:8: characters 3-13
		return $str;
	}
}

Boot::registerClass(Mots::class, 'Mots');
