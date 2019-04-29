<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx
 */

namespace tink\io;

use \tink\chunk\ChunkObject;
use \php\Boot;
use \tink\streams\Single;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;
use \tink\streams\Conclusion;

class PipeResultTools {
	/**
	 * Transform PipeResult to an Outcome of Bool, indicating the source is completely written or not
	 * 
	 * @param PipeResult $result
	 * 
	 * @return Outcome
	 */
	static public function toOutcome ($result) {
		#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:20: lines 20-24
		$__hx__switch = ($result->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:21: characters 24-37
			return Outcome::Success(true);
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:22: characters 26-40
			return Outcome::Success(false);
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:23: characters 23-24
			$e = $result->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:23: characters 48-58
			return Outcome::Failure($e);
		} else if ($__hx__switch === 3) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:23: characters 44-45
			$e1 = $result->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:23: characters 48-58
			return Outcome::Failure($e1);
		}
	}

	/**
	 * @param Conclusion $c
	 * @param mixed $result
	 * @param ChunkObject $buffered
	 * 
	 * @return PipeResult
	 */
	static public function toResult ($c, $result, $buffered = null) {
		#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:30: lines 30-34
		$mk = function ($s)  use (&$buffered) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:31: lines 31-34
			if ($buffered === null) {
				#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:32: characters 20-21
				return $s;
			} else {
				#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:33: characters 14-15
				$v = $buffered;
				#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:33: characters 17-29
				return $s->prepend(new Single(new LazyConst($v)));
			}
		};
		#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:36: lines 36-41
		$__hx__switch = ($c->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:40: characters 19-23
			$rest = $c->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:40: characters 26-53
			return PipeResult::SinkEnded($result, $mk($rest));
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:38: characters 23-27
			$rest1 = $c->params[1];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:38: characters 20-21
			$e = $c->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:38: characters 30-53
			return PipeResult::SinkFailed($e, $mk($rest1));
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:37: characters 19-20
			$e1 = $c->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:37: characters 23-38
			return PipeResult::SourceFailed($e1);
		} else if ($__hx__switch === 3) {
			#/Users/ut/haxe/haxe_libraries/tink_io/0.6.2/haxelib/src/tink/io/PipeResult.hx:39: characters 22-32
			return PipeResult::AllWritten();
		}
	}
}

Boot::registerClass(PipeResultTools::class, 'tink.io.PipeResultTools');