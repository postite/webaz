<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx
 */

namespace tink\streams\_Stream;

use \php\_Boot\HxAnon;
use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \tink\streams\RegroupResult;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;
use \tink\core\_Promise\Recover_Impl_;
use \tink\streams\Empty_hx;
use \tink\core\_Promise\Promise_Impl_;

final class Filter_Impl_ {
	/**
	 * @param object $o
	 * 
	 * @return object
	 */
	static public function _new ($o) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:302: character 3
		return $o;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return object
	 */
	static public function ofAsync ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:311: lines 311-313
		$this1 = new HxAnon(["apply" => function ($i, $_)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:312: characters 46-146
			$ret = $f(($i->arr[0] ?? null))->map(function ($matched)  use (&$i) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:312: characters 77-145
				return RegroupResult::Converted(($matched ? Stream_Impl_::single(($i->arr[0] ?? null)) : Empty_hx::$inst));
			});
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:312: characters 46-146
			return $ret->gather();
		}]);
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:311: lines 311-313
		return $this1;
	}

	/**
	 * @param \Closure $n
	 * 
	 * @return object
	 */
	static public function ofNext ($n) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:306: lines 306-308
		$this1 = new HxAnon(["apply" => function ($i, $_)  use (&$n) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:307: characters 46-164
			$this2 = Promise_Impl_::next($n(($i->arr[0] ?? null)), function ($matched)  use (&$i) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:307: characters 78-146
				return new SyncFuture(new LazyConst(Outcome::Success(RegroupResult::Converted(($matched ? Stream_Impl_::single(($i->arr[0] ?? null)) : Empty_hx::$inst)))));
			});
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:307: characters 46-164
			$f = Recover_Impl_::ofSync(Boot::getStaticClosure(RegroupResult::class, 'Errored'));
			$ret = $this2->flatMap(function ($o)  use (&$f) {
				$__hx__switch = ($o->index);
				if ($__hx__switch === 0) {
					$d = $o->params[0];
					return new SyncFuture(new LazyConst($d));
				} else if ($__hx__switch === 1) {
					$e = $o->params[0];
					return $f($e);
				}
			});
			return $ret->gather();
		}]);
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:306: lines 306-308
		return $this1;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return object
	 */
	static public function ofPlain ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:324: lines 324-326
		$this1 = new HxAnon(["apply" => function ($i, $_)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:325: characters 46-120
			return new SyncFuture(new LazyConst(RegroupResult::Converted(($f(($i->arr[0] ?? null)) ? Stream_Impl_::single(($i->arr[0] ?? null)) : Empty_hx::$inst))));
		}]);
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:324: lines 324-326
		return $this1;
	}

	/**
	 * @param \Closure $f
	 * 
	 * @return object
	 */
	static public function ofSync ($f) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:316: lines 316-321
		$this1 = new HxAnon(["apply" => function ($i, $_)  use (&$f) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:317: lines 317-320
			$v = null;
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:317: characters 65-72
			$_g = $f(($i->arr[0] ?? null));
			$__hx__switch = ($_g->index);
			if ($__hx__switch === 0) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:318: characters 22-23
				$v1 = $_g->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:317: lines 317-320
				$v = RegroupResult::Converted(($v1 ? Stream_Impl_::single(($i->arr[0] ?? null)) : Empty_hx::$inst));
			} else if ($__hx__switch === 1) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:319: characters 22-23
				$e = $_g->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:317: lines 317-320
				$v = RegroupResult::Errored($e);
			}
			return new SyncFuture(new LazyConst($v));
		}]);
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:316: lines 316-321
		return $this1;
	}
}

Boot::registerClass(Filter_Impl_::class, 'tink.streams._Stream.Filter_Impl_');
