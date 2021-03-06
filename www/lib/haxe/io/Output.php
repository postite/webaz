<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx
 */

namespace haxe\io;

use \php\Boot;
use \php\_Boot\HxException;

/**
 * An Output is an abstract write. A specific output implementation will only
 * have to override the `writeByte` and maybe the `write`, `flush` and `close`
 * methods. See `File.write` and `String.write` for two ways of creating an
 * Output.
 */
class Output {
	/**
	 * Close the output.
	 * Behaviour while writing after calling this method is unspecified.
	 * 
	 * @return void
	 */
	public function close () {
	}

	/**
	 * Write all bytes stored in `s`.
	 * 
	 * @param Bytes $s
	 * 
	 * @return void
	 */
	public function write ($s) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:107: characters 3-20
		$l = $s->length;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:108: characters 3-13
		$p = 0;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:109: lines 109-114
		while ($l > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:110: characters 4-30
			$k = $this->writeBytes($s, $p, $l);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:111: characters 4-22
			if ($k === 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:111: characters 17-22
				throw new HxException(Error::Blocked());
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:112: characters 4-10
			$p += $k;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:113: characters 4-10
			$l -= $k;
		}
	}

	/**
	 * Write one byte.
	 * 
	 * @param int $c
	 * 
	 * @return void
	 */
	public function writeByte ($c) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:47: characters 3-8
		throw new HxException("Not implemented");
	}

	/**
	 * Write `len` bytes from `s` starting by position specified by `pos`.
	 * Returns the actual length of written data that can differ from `len`.
	 * See `writeFullBytes` that tries to write the exact amount of specified bytes.
	 * 
	 * @param Bytes $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return int
	 */
	public function writeBytes ($s, $pos, $len) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:59: lines 59-60
		if (($pos < 0) || ($len < 0) || (($pos + $len) > $s->length)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:60: characters 4-9
			throw new HxException(Error::OutsideBounds());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:62: characters 3-61
		$b = $s->b;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:63: characters 3-15
		$k = $len;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:64: lines 64-78
		while ($k > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:68: characters 5-26
			$this->writeByte(ord($b->s[$pos]));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:76: characters 4-9
			++$pos;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:77: characters 4-7
			--$k;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Output.hx:79: characters 3-13
		return $len;
	}
}

Boot::registerClass(Output::class, 'haxe.io.Output');
