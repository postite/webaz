<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx
 */

use \php\Boot;

/**
 * The Date class provides a basic structure for date and time related
 * information. Date instances can be created by
 * - `new Date()` for a specific date,
 * - `Date.now()` to obtain information about the current time,
 * - `Date.fromTime()` with a given timestamp or
 * - `Date.fromString()` by parsing from a String.
 * There are some extra functions available in the `DateTools` class.
 * In the context of Haxe dates, a timestamp is defined as the number of
 * milliseconds elapsed since 1st January 1970.
 */
final class Date {
	/**
	 * @var float
	 */
	public $__t;

	/**
	 * @param float $t
	 * 
	 * @return Date
	 */
	static public function fromPhpTime ($t) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:80: characters 3-41
		$d = new Date(2000, 1, 1, 0, 0, 0);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:81: characters 3-12
		$d->__t = $t;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:82: characters 3-11
		return $d;
	}

	/**
	 * Returns a Date from timestamp (in milliseconds) `t`.
	 * 
	 * @param float $t
	 * 
	 * @return Date
	 */
	static public function fromTime ($t) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:86: characters 3-41
		$d = new Date(2000, 1, 1, 0, 0, 0);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:87: characters 3-19
		$d->__t = $t / 1000;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:88: characters 3-11
		return $d;
	}

	/**
	 * Returns a Date representing the current local time.
	 * 
	 * @return Date
	 */
	static public function now () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:76: characters 3-48
		return Date::fromPhpTime(round(microtime(true), 3));
	}

	/**
	 * Creates a new date object from the given arguments.
	 * The behaviour of a Date instance is only consistent across platforms if
	 * the the arguments describe a valid date.
	 * - month: 0 to 11
	 * - day: 1 to 31
	 * - hour: 0 to 23
	 * - min: 0 to 59
	 * - sec: 0 to 59
	 * 
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 * @param int $hour
	 * @param int $min
	 * @param int $sec
	 * 
	 * @return void
	 */
	public function __construct ($year, $month, $day, $hour, $min, $sec) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:31: characters 3-53
		$this->__t = mktime($hour, $min, $sec, $month + 1, $day, $year);
	}

	/**
	 * Returns the day of the week of `this` Date (0-6 range) where `0` is Sunday.
	 * 
	 * @return int
	 */
	public function getDay () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:68: characters 10-34
		return (int)(date("w", (int)($this->__t)));
	}

	/**
	 * Returns the month of `this` Date (0-11 range).
	 * 
	 * @return int
	 */
	public function getMonth () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:47: characters 3-42
		$m = (int)(date("n", (int)($this->__t)));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:48: characters 3-16
		return -1 + $m;
	}

	/**
	 * Returns the timestamp (in milliseconds) of the date. It might
	 * only have a per-second precision depending on the platforms.
	 * For measuring time differences with millisecond accuracy on
	 * all platforms, see `haxe.Timer.stamp`.
	 * 
	 * @return float
	 */
	public function getTime () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:35: characters 3-22
		return $this->__t * 1000.0;
	}

	/**
	 * Returns a string representation of `this` Date, by using the
	 * standard format [YYYY-MM-DD HH:MM:SS]. See `DateTools.format` for
	 * other formating rules.
	 * 
	 * @return string
	 */
	public function toString () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/Date.hx:72: characters 3-39
		return date("Y-m-d H:i:s", (int)($this->__t));
	}

	public function __toString() {
		return $this->toString();
	}
}

Boot::registerClass(Date::class, 'Date');
