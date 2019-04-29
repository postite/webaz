<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Constraints.hx
 */

namespace haxe;

use \php\Boot;

interface IMap {
	/**
	 * @param mixed $k
	 * 
	 * @return bool
	 */
	public function exists ($k) ;

	/**
	 * @param mixed $k
	 * 
	 * @return mixed
	 */
	public function get ($k) ;

	/**
	 * @return object
	 */
	public function iterator () ;

	/**
	 * @return object
	 */
	public function keys () ;
}

Boot::registerClass(IMap::class, 'haxe.IMap');