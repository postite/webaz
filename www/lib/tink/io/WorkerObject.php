<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/Worker.hx
 */

namespace tink\io;

use \tink\core\_Lazy\LazyObject;
use \php\Boot;
use \tink\core\_Future\FutureObject;

interface WorkerObject {
	/**
	 * @param LazyObject $task
	 * 
	 * @return FutureObject
	 */
	public function work ($task) ;
}

Boot::registerClass(WorkerObject::class, 'tink.io.WorkerObject');
