<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx
 */

namespace haxe\io;

use \php\Boot;
use \php\_Boot\HxException;

/**
 * An Input is an abstract reader. See other classes in the `haxe.io` package
 * for several possible implementations.
 * All functions which read data throw `Eof` when the end of the stream
 * is reached.
 */
class Input {
	/**
	 * @var bool
	 * Endianness (word byte order) used when reading numbers.
	 * If `true`, big-endian is used, otherwise `little-endian` is used.
	 */
	public $bigEndian;

	/**
	 * Close the input source.
	 * Behaviour while reading after calling this method is unspecified.
	 * 
	 * @return void
	 */
	public function close () {
	}

	/**
	 * Read and return one byte.
	 * 
	 * @return int
	 */
	public function readByte () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:53: characters 10-15
		throw new HxException("Not implemented");
	}

	/**
	 * Read `len` bytes and write them into `s` to the position specified by `pos`.
	 * Returns the actual length of read data that can be smaller than `len`.
	 * See `readFullBytes` that tries to read the exact amount of specified bytes.
	 * 
	 * @param Bytes $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return int
	 */
	public function readBytes ($s, $pos, $len) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:65: characters 3-15
		$k = $len;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:66: characters 3-69
		$b = $s->b;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:67: lines 67-68
		if (($pos < 0) || ($len < 0) || (($pos + $len) > $s->length)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:68: characters 4-9
			throw new HxException(Error::OutsideBounds());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:69: lines 69-83
		try {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:70: lines 70-82
			while ($k > 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:74: characters 6-28
				$val = $this->readByte();
				$b->s = substr_replace($b->s, chr($val), $pos, 1);

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:80: characters 5-10
				++$pos;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:81: characters 5-8
				--$k;
			}
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			if ($__hx__real_e instanceof Eof) {
				$eof = $__hx__real_e;
							} else  throw $__hx__caught_e;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:84: characters 3-15
		return $len - $k;
	}

	/**
	 * Read `len` bytes and write them into `s` to the position specified by `pos`.
	 * Unlike `readBytes`, this method tries to read the exact `len` amount of bytes.
	 * 
	 * @param Bytes $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return void
	 */
	public function readFullBytes ($s, $pos, $len) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:135: lines 135-141
		while ($len > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:136: characters 4-33
			$k = $this->readBytes($s, $pos, $len);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:137: lines 137-138
			if ($k === 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:138: characters 5-10
				throw new HxException(Error::Blocked());
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:139: characters 4-12
			$pos += $k;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:140: characters 4-12
			$len -= $k;
		}
	}

	/**
	 * Read a 32-bit signed integer.
	 * Endianness is specified by the `bigEndian` property.
	 * 
	 * @return int
	 */
	public function readInt32 () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:282: characters 3-24
		$ch1 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:283: characters 3-24
		$ch2 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:284: characters 3-24
		$ch3 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:285: characters 3-24
		$ch4 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:288: characters 3-115
		$n = ($this->bigEndian ? $ch4 | ($ch3 << 8) | ($ch2 << 16) | ($ch1 << 24) : $ch1 | ($ch2 << 8) | ($ch3 << 16) | ($ch4 << 24));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:289: lines 289-291
		if (($n & ((int)-2147483648)) !== 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:290: characters 4-28
			return $n | ((int)-2147483648);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:291: characters 8-16
			return $n;
		}
	}

	/**
	 * Read and `len` bytes as a string.
	 * 
	 * @param int $len
	 * @param Encoding $encoding
	 * 
	 * @return string
	 */
	public function readString ($len, $encoding = null) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:304: characters 3-28
		$b = Bytes::alloc($len);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:305: characters 3-25
		$this->readFullBytes($b, 0, $len);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:309: characters 10-39
		$tmp = null;
		if (($len < 0) || ($len > $b->length)) {
			throw new HxException(Error::OutsideBounds());
		} else {
			$tmp = substr($b->b->s, 0, $len);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:309: characters 3-39
		return $tmp;
	}

	/**
	 * Read a 16-bit unsigned integer.
	 * Endianness is specified by the `bigEndian` property.
	 * 
	 * @return int
	 */
	public function readUInt16 () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:244: characters 3-24
		$ch1 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:245: characters 3-24
		$ch2 = $this->readByte();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:246: characters 10-57
		if ($this->bigEndian) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:246: characters 22-38
			return $ch2 | ($ch1 << 8);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:246: characters 41-57
			return $ch1 | ($ch2 << 8);
		}
	}

	/**
	 * @param bool $b
	 * 
	 * @return bool
	 */
	public function set_bigEndian ($b) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:96: characters 3-16
		$this->bigEndian = $b;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/io/Input.hx:97: characters 3-11
		return $b;
	}
}

Boot::registerClass(Input::class, 'haxe.io.Input');
Boot::registerSetters('haxe\\io\\Input', [
	'bigEndian' => true
]);