<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx
 */

use \php\Boot;
use \php\_Boot\HxString;

/**
 * This class gives you access to many base functionalities of system platforms. Looks in `sys` sub packages for more system APIs.
 */
class Sys {
	/**
	 * @var string
	 */
	static public $_programPath;

	/**
	 * Get the current working directory (usually the one in which the program was started)
	 * 
	 * @return string
	 */
	static public function getCwd () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:66: characters 3-29
		$cwd = getcwd();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:67: characters 3-32
		if ($cwd === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:67: characters 21-32
			return null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:68: characters 3-35
		$l = mb_substr($cwd, -1, null);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:69: characters 3-59
		return ($cwd??'null') . (((($l === "/") || ($l === "\\") ? "" : "/"))??'null');
	}

	/**
	 * Returns the absolute path to the current program file that we are running.
	 * Concretely, for an executable binary, it returns the path to the binary.
	 * For a script (e.g. a PHP file), it returns the path to the script.
	 * 
	 * @return string
	 */
	static public function programPath () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:118: characters 3-22
		return Sys::$_programPath;
	}

	/**
	 * Returns the name of the system you are running on. For instance :
	 * "Windows", "Linux", "BSD" and "Mac" depending on your desktop OS.
	 * 
	 * @return string
	 */
	static public function systemName () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:77: characters 3-33
		$s = php_uname("s");
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:78: characters 3-26
		$p = HxString::indexOf($s, " ");
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:79: characters 10-39
		if ($p >= 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:79: characters 20-34
			return mb_substr($s, 0, $p);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Sys.hx:79: characters 37-38
			return $s;
		}
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


		self::$_programPath = (realpath($_SERVER["SCRIPT_FILENAME"]) ?: null);
	}
}

Boot::registerClass(Sys::class, 'Sys');
Sys::__hx__init();