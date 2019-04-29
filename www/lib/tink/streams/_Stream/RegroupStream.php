<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx
 */

namespace tink\streams\_Stream;

use \tink\core\_Lazy\LazyFunc;
use \tink\streams\RegroupStatus;
use \php\Boot;
use \tink\streams\StreamObject;
use \tink\streams\Handled;
use \tink\streams\Empty_hx;

class RegroupStream extends CompoundStream {
	/**
	 * @param StreamObject $source
	 * @param object $f
	 * @param StreamObject $prev
	 * 
	 * @return void
	 */
	public function __construct ($source, $f, $prev = null) {
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:98: characters 5-41
		if ($prev === null) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:98: characters 22-41
			$prev = Empty_hx::$inst;
		}
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:100: characters 5-20
		$ret = null;
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:101: characters 5-28
		$terminated = false;
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:102: characters 5-18
		$buf = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:103: lines 103-131
		$ret1 = $source->forEach(Handler_Impl_::ofUnknown(function ($item)  use (&$terminated, &$f, &$buf, &$ret) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:104: characters 7-21
			$buf->arr[$buf->length] = $item;
			++$buf->length;

			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:105: lines 105-117
			$ret2 = $f->apply($buf, RegroupStatus::Flowing())->map(function ($o)  use (&$terminated, &$ret) {
				$__hx__switch = ($o->index);
				if ($__hx__switch === 0) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:106: characters 24-25
					$v = $o->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:107: characters 11-18
					$ret = $v;
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:108: characters 11-17
					return Handled::Finish();
				} else if ($__hx__switch === 1) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:109: characters 25-26
					$v1 = $o->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:110: characters 17-33
					if ($v1->index === 0) {
						$v2 = $v1->params[0];
						$ret = $v2;
					} else {
						$ret = (new LazyFunc(Boot::getStaticClosure(Empty_hx::class, 'make')))->get();
					}
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:111: characters 11-28
					$terminated = true;
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:112: characters 11-17
					return Handled::Finish();
				} else if ($__hx__switch === 2) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:114: characters 11-17
					return Handled::Resume();
				} else if ($__hx__switch === 3) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:115: characters 22-23
					$e = $o->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:116: characters 11-18
					return Handled::Clog($e);
				}
			});
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:105: lines 105-117
			return $ret2->gather();
		}))->map(function ($o1)  use (&$terminated, &$f, &$buf, &$ret) {
			#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:118: lines 118-131
			$__hx__switch = ($o1->index);
			if ($__hx__switch === 0) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:128: lines 128-129
				if ($terminated) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:128: characters 38-41
					return $ret;
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:129: characters 19-23
					$rest = $o1->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:129: characters 26-57
					return new RegroupStream($rest, $f, $ret);
				}
			} else if ($__hx__switch === 1) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:130: characters 23-27
				$rest1 = $o1->params[1];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:130: characters 20-21
				$e1 = $o1->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:130: characters 30-66
				return new CloggedStream(Stream_Impl_::ofError($e1), $rest1);
			} else if ($__hx__switch === 2) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:119: characters 19-20
				$e2 = $o1->params[0];
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:119: characters 23-40
				return Stream_Impl_::ofError($e2);
			} else if ($__hx__switch === 3) {
				#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:120: lines 120-127
				if ($buf->length === 0) {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:120: characters 42-54
					return Empty_hx::$inst;
				} else {
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:122: lines 122-127
					$ret3 = $f->apply($buf, RegroupStatus::Ended())->map(function ($o2) {
						$__hx__switch = ($o2->index);
						if ($__hx__switch === 0) {
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:123: characters 26-27
							$v3 = $o2->params[0];
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:123: characters 30-31
							return $v3;
						} else if ($__hx__switch === 1) {
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:124: characters 27-28
							$v4 = $o2->params[0];
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:124: characters 31-47
							if ($v4->index === 0) {
								$v5 = $v4->params[0];
								return $v5;
							} else {
								return (new LazyFunc(Boot::getStaticClosure(Empty_hx::class, 'make')))->get();
							}
						} else if ($__hx__switch === 2) {
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:125: characters 27-39
							return Empty_hx::$inst;
						} else if ($__hx__switch === 3) {
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:126: characters 24-25
							$e3 = $o2->params[0];
							#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:126: characters 28-50
							return Stream_Impl_::ofError($e3);
						}
					});
					#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:122: lines 122-127
					return Stream_Impl_::flatten($ret3->gather());
				}
			}
		});
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:103: lines 103-131
		$next = Stream_Impl_::flatten($ret1->gather());
		#/Users/ut/haxe/haxe_libraries/tink_streams/0.3.2/haxelib/src/tink/streams/Stream.hx:134: characters 5-24
		parent::__construct(\Array_hx::wrap([
			$prev,
			$next,
		]));
	}
}

Boot::registerClass(RegroupStream::class, 'tink.streams._Stream.RegroupStream');
