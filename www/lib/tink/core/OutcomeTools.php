<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx
 */

namespace tink\core;

use \php\_Boot\HxAnon;
use \tink\core\_Lazy\LazyObject;
use \php\Boot;
use \haxe\ds\Option as DsOption;
use \php\_Boot\HxException;
use \tink\core\_Outcome\OutcomeMapper_Impl_;

class OutcomeTools {
	/**
	 *  Try to run `f` and wraps the result in `Success`,
	 *  thrown exceptions are transformed by `report` then wrapped into a `Failure`
	 * 
	 * @param \Closure $f
	 * @param \Closure $report
	 * 
	 * @return Outcome
	 */
	static public function attempt ($f, $report) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:138: lines 138-140
		try {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:138: characters 11-23
			return Outcome::Success($f());
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:140: characters 9-27
			return Outcome::Failure($report($e));
		}
	}

	/**
	 *   Returns `true` if the outcome is `Some` and the value is equal to `v`, otherwise `false`
	 * 
	 * @param Outcome $outcome
	 * @param mixed $to
	 * 
	 * @return bool
	 */
	static public function equals ($outcome, $to) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:84: lines 84-87
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:85: characters 22-26
			$data = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:85: characters 29-39
			return Boot::equal($data, $to);
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:86: characters 26-31
			return false;
		}
	}

	/**
	 *  Transforms the outcome with a transform function
	 *  Different from `map`, the transform function of `flatMap` returns an `Outcome`
	 * 
	 * @param Outcome $o
	 * @param object $mapper
	 * 
	 * @return Outcome
	 */
	static public function flatMap ($o, $mapper) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:117: characters 5-27
		return OutcomeMapper_Impl_::apply($mapper, $o);
	}

	/**
	 * @param Outcome $o
	 * 
	 * @return Outcome
	 */
	static public function flatten ($o) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:143: lines 143-146
		$__hx__switch = ($o->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:143: characters 19-20
			$__hx__switch = ($o->params[0]->index);
			if ($__hx__switch === 0) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:144: characters 28-29
				$d = $o->params[0]->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:144: characters 33-43
				return Outcome::Success($d);
			} else if ($__hx__switch === 1) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:145: characters 28-29
				$f = $o->params[0]->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:145: characters 46-56
				return Outcome::Failure($f);
			}
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:145: characters 42-43
			$f1 = $o->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:145: characters 46-56
			return Outcome::Failure($f1);
		}
	}

	/**
	 *  Returns `true` if the outcome is `Success`
	 * 
	 * @param Outcome $outcome
	 * 
	 * @return bool
	 */
	static public function isSuccess ($outcome) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:106: lines 106-109
		if ($outcome->index === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:107: characters 26-30
			return true;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:108: characters 18-23
			return false;
		}
	}

	/**
	 *  Transforms the outcome with a transform function
	 *  Different from `flatMap`, the transform function of `map` returns a plain value
	 * 
	 * @param Outcome $outcome
	 * @param \Closure $transform
	 * 
	 * @return Outcome
	 */
	static public function map ($outcome, $transform) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:94: lines 94-99
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:95: characters 22-23
			$a = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:96: characters 11-32
			return Outcome::Success($transform($a));
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:97: characters 22-23
			$f = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:98: characters 11-21
			return Outcome::Failure($f);
		}
	}

	/**
	 *  Extracts the value if the option is `Success`, otherwise `null`
	 * 
	 * @param Outcome $outcome
	 * 
	 * @return mixed
	 */
	static public function orNull ($outcome) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:55: lines 55-58
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:56: characters 22-26
			$data = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:56: characters 29-33
			return $data;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:57: characters 26-30
			return null;
		}
	}

	/**
	 *  Extracts the value if the option is `Success`, uses the fallback `Outcome` otherwise
	 * 
	 * @param Outcome $outcome
	 * @param LazyObject $fallback
	 * 
	 * @return Outcome
	 */
	static public function orTry ($outcome, $fallback) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:75: lines 75-78
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:76: characters 26-33
			return $outcome;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:77: characters 26-40
			return $fallback->get();
		}
	}

	/**
	 *  Extracts the value if the option is `Success`, uses the fallback value otherwise
	 * 
	 * @param Outcome $outcome
	 * @param LazyObject $fallback
	 * 
	 * @return mixed
	 */
	static public function orUse ($outcome, $fallback) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:65: lines 65-68
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:66: characters 22-26
			$data = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:66: characters 29-33
			return $data;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:67: characters 26-40
			return $fallback->get();
		}
	}

	/**
	 *  Extracts the value if the outcome is `Success`, throws the `Failure` contents otherwise
	 * 
	 * @param Outcome $outcome
	 * 
	 * @return mixed
	 */
	static public function sure ($outcome) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:18: lines 18-26
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:19: characters 22-26
			$data = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:20: characters 11-15
			return $data;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:21: characters 22-29
			$failure = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:22: characters 18-40
			$_g = TypedError::asError($failure);
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:23: lines 23-24
			if ($_g === null) {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:23: characters 24-29
				throw new HxException($failure);
			} else {
				#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:24: characters 21-34
				return $_g->throwSelf();
			}
		}
	}

	/**
	 *  Like `map` but with a plain value instead of a transform function, thus discarding the orginal result
	 * 
	 * @param Outcome $outcome
	 * @param mixed $v
	 * 
	 * @return Outcome
	 */
	static public function swap ($outcome, $v) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:125: lines 125-130
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:127: characters 11-21
			return Outcome::Success($v);
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:128: characters 22-23
			$f = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:129: characters 11-21
			return Outcome::Failure($f);
		}
	}

	/**
	 *  Creates an `Option` from this `Outcome`, discarding the `Failure` information
	 * 
	 * @param Outcome $outcome
	 * 
	 * @return DsOption
	 */
	static public function toOption ($outcome) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:33: lines 33-36
		$__hx__switch = ($outcome->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:34: characters 22-26
			$data = $outcome->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:34: characters 29-46
			return DsOption::Some($data);
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:35: characters 26-37
			return DsOption::None();
		}
	}

	/**
	 *  Creates an `Outcome` from an `Option`, with made-up `Failure` information
	 * 
	 * @param DsOption $option
	 * @param object $pos
	 * 
	 * @return Outcome
	 */
	static public function toOutcome ($option, $pos = null) {
		#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:43: lines 43-48
		$__hx__switch = ($option->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:44: characters 19-24
			$value = $option->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:45: characters 11-25
			return Outcome::Success($value);
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_core/1.20.0/haxelib/src/tink/core/Outcome.hx:47: characters 11-124
			return Outcome::Failure(new TypedError(404, "Some value expected but none found in " . ($pos->fileName??'null') . "@line " . ($pos->lineNumber??'null'), new HxAnon([
				"fileName" => "tink/core/Outcome.hx",
				"lineNumber" => 47,
				"className" => "tink.core.OutcomeTools",
				"methodName" => "toOutcome",
			])));
		}
	}
}

Boot::registerClass(OutcomeTools::class, 'tink.core.OutcomeTools');