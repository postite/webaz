<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx
 */

namespace php\_Boot;

use \php\Boot;

/**
 * Closures implementation
 */
class HxClosure {
	/**
	 * @var mixed
	 * A callable value, which can be invoked by PHP
	 */
	public $callable;
	/**
	 * @var string
	 * Method name for methods
	 */
	public $func;
	/**
	 * @var mixed
	 * `this` for instance methods; php class name for static methods
	 */
	public $target;

	/**
	 * @param mixed $target
	 * @param string $func
	 * 
	 * @return void
	 */
	public function __construct ($target, $func) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:939: characters 3-23
		$this->target = $target;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:940: characters 3-19
		$this->func = $func;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:942: lines 942-944
		if (is_null($target)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:943: characters 4-9
			throw new HxException("Unable to create closure on `null`");
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:945: characters 14-98
		$tmp = null;
		if (($target instanceof HxAnon)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:945: characters 52-58
			$tmp1 = $target;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:945: characters 14-98
			$tmp = $tmp1->{$func};
		} else {
			$tmp = [$target, $func];
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:945: characters 3-98
		$this->callable = $tmp;
	}

	/**
	 * @see http://php.net/manual/en/language.oop5.magic.php#object.invoke
	 * 
	 * @return mixed
	 */
	public function __invoke () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:953: characters 3-71
		return call_user_func_array($this->callable, func_get_args());
	}

	/**
	 * Invoke this closure with `newThis` instead of `this`
	 * 
	 * @param mixed $newThis
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function callWith ($newThis, $args) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:980: characters 3-65
		return call_user_func_array($this->getCallback($newThis), $args);
	}

	/**
	 * Check if this is the same closure
	 * 
	 * @param HxClosure $closure
	 * 
	 * @return bool
	 */
	public function equals ($closure) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:973: characters 10-60
		if (Boot::equal($this->target, $closure->target)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:973: characters 39-59
			return $this->func === $closure->func;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:973: characters 10-60
			return false;
		}
	}

	/**
	 * Generates callable value for PHP
	 * 
	 * @param mixed $eThis
	 * 
	 * @return mixed
	 */
	public function getCallback ($eThis = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:960: lines 960-962
		if ($eThis === null) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:961: characters 4-18
			$eThis = $this->target;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:963: lines 963-965
		if (($eThis instanceof HxAnon)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:964: characters 24-29
			$tmp = $eThis;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:964: characters 4-36
			return $tmp->{$this->func};
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/Boot.hx:966: characters 3-39
		return [$eThis, $this->func];
	}
}

Boot::registerClass(HxClosure::class, 'php._Boot.HxClosure');
