<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx
 */

namespace asys;

use \php\_Boot\HxAnon;
use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \tink\core\Noise;
use \tink\core\TypedError;
use \sys\FileSystem as SysFileSystem;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;
use \php\_Boot\HxException;
use \tink\core\_Future\FutureObject;

class FileSystem {
	/**
	 * @param string $relPath
	 * 
	 * @return string
	 */
	static public function absolutePath ($relPath) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:264: characters 3-46
		return SysFileSystem::absolutePath($relPath);
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function createDirectory ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:273: lines 273-279
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:274: lines 274-278
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:275: characters 5-41
			SysFileSystem::createDirectory($path);
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:273: lines 273-279
			$v = Outcome::Success(Noise::Noise());
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:278: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:273: lines 273-279
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 278,
				"className" => "asys.FileSystem",
				"methodName" => "createDirectory",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function deleteDirectory ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:291: lines 291-297
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:292: lines 292-296
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:293: characters 5-41
			rmdir($path);
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:291: lines 291-297
			$v = Outcome::Success(Noise::Noise());
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:296: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:291: lines 291-297
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 296,
				"className" => "asys.FileSystem",
				"methodName" => "deleteDirectory",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function deleteFile ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:282: lines 282-288
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:283: lines 283-287
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:284: characters 5-36
			unlink($path);
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:282: lines 282-288
			$v = Outcome::Success(Noise::Noise());
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:287: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:282: lines 282-288
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 287,
				"className" => "asys.FileSystem",
				"methodName" => "deleteFile",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function exists ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:240: characters 22-49
		clearstatcache(true, $path);
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:240: characters 10-50
		return new SyncFuture(new LazyConst(file_exists($path)));
	}

	/**
	 * @param string $relPath
	 * 
	 * @return FutureObject
	 */
	static public function fullPath ($relPath) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:258: lines 258-261
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:259: lines 259-260
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:258: lines 258-261
			$v = Outcome::Success((realpath($relPath) ?: null));
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:260: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:258: lines 258-261
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 260,
				"className" => "asys.FileSystem",
				"methodName" => "fullPath",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function isDirectory ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:267: lines 267-270
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:268: lines 268-269
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:267: lines 267-270
			$v = SysFileSystem::isDirectory($path);
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			$v = false;
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function readDirectory ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:300: lines 300-303
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:301: lines 301-302
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:300: lines 300-303
			$v = Outcome::Success(SysFileSystem::readDirectory($path));
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:302: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:300: lines 300-303
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 302,
				"className" => "asys.FileSystem",
				"methodName" => "readDirectory",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * @param string $newPath
	 * 
	 * @return FutureObject
	 */
	static public function rename ($path, $newPath) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:243: lines 243-249
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:244: lines 244-248
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:245: characters 5-41
			rename($path, $newPath);
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:243: lines 243-249
			$v = Outcome::Success(Noise::Noise());
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:248: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:243: lines 243-249
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 248,
				"className" => "asys.FileSystem",
				"methodName" => "rename",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}

	/**
	 * @param string $path
	 * 
	 * @return FutureObject
	 */
	static public function stat ($path) {
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:252: lines 252-255
		$v = null;
		#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:253: lines 253-254
		try {
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:252: lines 252-255
			$v = Outcome::Success(SysFileSystem::stat($path));
		} catch (\Throwable $__hx__caught_e) {
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			$e = $__hx__real_e;
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:254: characters 41-43
			$v1 = "" . (\Std::string($e)??'null');
			#/Users/ut/haxe/haxe_libraries/asys/0.3.0/github/9ce3b0cdbd8563363bffdd1fc78b5df4d2765e7f/asys/FileSystem.hx:252: lines 252-255
			$v = Outcome::Failure(new TypedError(null, $v1, new HxAnon([
				"fileName" => "asys/FileSystem.hx",
				"lineNumber" => 254,
				"className" => "asys.FileSystem",
				"methodName" => "stat",
			])));
		}
		return new SyncFuture(new LazyConst($v));
	}
}

Boot::registerClass(FileSystem::class, 'asys.FileSystem');
