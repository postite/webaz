<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx
 */

namespace haxe;

use \php\Boot;

/**
 * If haxe.MainLoop is kept from DCE, then we will insert an haxe.EntryPoint.run() call just at then end of main().
 * This class can be redefined by custom frameworks so they can handle their own main loop logic.
 */
class EntryPoint {
	/**
	 * @var \Array_hx
	 */
	static public $pending;
	/**
	 * @var int
	 */
	static public $threadCount = 0;

	/**
	 * @return float
	 */
	static public function processEvents () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:87: lines 87-98
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:90: characters 12-27
			$_this = EntryPoint::$pending;
			if ($_this->length > 0) {
				$_this->length--;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:90: characters 4-28
			$f = array_shift($_this->arr);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:95: lines 95-96
			if ($f === null) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:96: characters 5-10
				break;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:97: characters 4-7
			$f();
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:99: characters 3-46
		$time = MainLoop::tick();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:100: lines 100-101
		if (!MainLoop::hasEvents() && (EntryPoint::$threadCount === 0)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:101: characters 4-13
			return -1;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:102: characters 3-14
		return $time;
	}

	/**
	 * Start the main loop. Depending on the platform, this can return immediately or will only return when the application exits.
	 * 
	 * @return void
	 */
	static public function run () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:124: lines 124-130
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:125: characters 4-35
			$nextTick = EntryPoint::processEvents();
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:126: lines 126-127
			if ($nextTick < 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/EntryPoint.hx:127: characters 5-10
				break;
			}
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


		self::$pending = new \Array_hx();
	}
}

Boot::registerClass(EntryPoint::class, 'haxe.EntryPoint');
EntryPoint::__hx__init();
