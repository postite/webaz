<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx
 */

namespace mimo\_Group;

use \php\_Boot\HxAnon;
use \php\Boot;
use \mimo\Group;

final class ExtGroup_Impl_ {
	/**
	 * @var \Array_hx
	 */
	static public $docs;
	/**
	 * @var \Array_hx
	 */
	static public $images;
	/**
	 * @var \Array_hx
	 */
	static public $sons;
	/**
	 * @var \Array_hx
	 */
	static public $video;

	/**
	 * @param string $a
	 * 
	 * @return string
	 */
	static public function _new ($a) {
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:59: characters 9-20
		return $a;
	}

	/**
	 * @param string $this
	 * 
	 * @return Group
	 */
	static public function toGroup ($this1) {
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:63: characters 9-49
		if (ExtGroup_Impl_::$images->indexOf($this1) !== -1) {
			#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:63: characters 38-49
			return Group::IMGS();
		}
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:64: characters 9-48
		if (ExtGroup_Impl_::$video->indexOf($this1) !== -1) {
			#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:64: characters 37-48
			return Group::VIDS();
		}
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:65: characters 9-47
		if (ExtGroup_Impl_::$docs->indexOf($this1) !== -1) {
			#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:65: characters 36-47
			return Group::DOCS();
		}
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:66: characters 9-47
		if (ExtGroup_Impl_::$sons->indexOf($this1) !== -1) {
			#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:66: characters 36-47
			return Group::SONS();
		}
		#/Users/ut/Documents/LAB/postite_mimo/src/mimo/Group.hx:67: characters 9-22
		return Group::AUTRES();
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


		self::$images = \Array_hx::wrap([
			"gif",
			"jpeg",
			"jpg",
			"bmp",
			"png",
		]);
		self::$docs = \Array_hx::wrap([
			"pdf",
			"rtf",
			"txt",
			"doc",
			"zip",
			"odt",
		]);
		self::$video = \Array_hx::wrap([
			"moov",
			"avi",
		]);
		self::$sons = \Array_hx::wrap([
			"wav",
			"mp3",
			"ogg",
		]);
	}
}

Boot::registerClass(ExtGroup_Impl_::class, 'mimo._Group.ExtGroup_Impl_');
Boot::registerMeta(ExtGroup_Impl_::class, new HxAnon(["statics" => new HxAnon(["toGroup" => new HxAnon(["to" => null])])]));
ExtGroup_Impl_::__hx__init();
