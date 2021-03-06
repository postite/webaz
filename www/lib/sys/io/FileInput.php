<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx
 */

namespace sys\io;

use \haxe\io\_BytesData\Container;
use \php\Boot;
use \haxe\io\Eof;
use \haxe\io\Error;
use \haxe\io\Input;
use \php\_Boot\HxException;
use \haxe\io\Bytes;

/**
 * Use `sys.io.File.read` to create a `FileInput`.
 */
class FileInput extends Input {
	/**
	 * @var mixed
	 */
	public $__f;

	/**
	 * @param mixed $f
	 * 
	 * @return void
	 */
	public function __construct ($f) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:37: characters 3-10
		$this->__f = $f;
	}

	/**
	 * @return void
	 */
	public function close () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:58: characters 3-16
		parent::close();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:59: characters 3-30
		if ($this->__f !== null) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:59: characters 19-30
			fclose($this->__f);
		}
	}

	/**
	 * @return int
	 */
	public function readByte () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:41: characters 3-25
		$r = fread($this->__f, 1);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:42: characters 3-22
		if (feof($this->__f)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:42: characters 17-22
			throw new HxException(new Eof());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:43: characters 3-23
		if ($r === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:43: characters 18-23
			throw new HxException(Error::Custom("An error occurred"));
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:44: characters 3-16
		return ord($r);
	}

	/**
	 * @param Bytes $s
	 * @param int $p
	 * @param int $l
	 * 
	 * @return int
	 */
	public function readBytes ($s, $p, $l) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:48: characters 3-22
		if (feof($this->__f)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:48: characters 17-22
			throw new HxException(new Eof());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:49: characters 3-25
		$r = fread($this->__f, $l);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:50: characters 3-23
		if ($r === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:50: characters 18-23
			throw new HxException(Error::Custom("An error occurred"));
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:51: characters 3-27
		if (strlen($r) === 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:51: characters 22-27
			throw new HxException(new Eof());
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:52: characters 11-28
		$b = strlen($r);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:52: characters 3-29
		$b1 = new Bytes($b, new Container($r));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:53: characters 3-29
		$len = strlen($r);
		if (($p < 0) || ($len < 0) || (($p + $len) > $s->length) || ($len > $b1->length)) {
			throw new HxException(Error::OutsideBounds());
		} else {
			$this1 = $s->b;
			$src = $b1->b;
			$this1->s = ((substr($this1->s, 0, $p) . substr($src->s, 0, $len)) . substr($this1->s, $p + $len));
		}

		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:54: characters 3-19
		return strlen($r);
	}

	/**
	 * @param int $p
	 * @param FileSeek $pos
	 * 
	 * @return void
	 */
	public function seek ($p, $pos) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:63: characters 3-9
		$w = null;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:64: lines 64-68
		$__hx__switch = ($pos->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:65: characters 20-32
			$w = SEEK_SET;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:66: characters 20-32
			$w = SEEK_CUR;
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:67: characters 20-32
			$w = SEEK_END;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:69: characters 3-28
		$r = fseek($this->__f, $p, $w);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:70: characters 3-23
		if ($r === false) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/sys/io/FileInput.hx:70: characters 18-23
			throw new HxException(Error::Custom("An error occurred"));
		}
	}
}

Boot::registerClass(FileInput::class, 'sys.io.FileInput');
