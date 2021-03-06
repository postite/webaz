<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: src/apis/FileApi.hx
 */

namespace apis;

use \php\_Boot\HxAnon;
use \tink\core\_Future\SyncFuture;
use \tink\io\RealSourceTools;
use \php\Boot;
use \mimo\_Group\ExtGroup_Impl_;
use \mime\Mime;
use \tink\core\TypedError;
use \sys\io\File;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;
use \tink\core\_Promise\Promise_Impl_;
use \mimo\Group;
use \tink\core\_Future\FutureObject;

class FileApi {
	/**
	 * @param string $_mime
	 * @param Group $accept
	 * 
	 * @return bool
	 */
	static public function checkMime ($_mime, $accept = null) {
		#src/apis/FileApi.hx:60: characters 3-32
		if ($accept === null) {
			#src/apis/FileApi.hx:60: characters 21-32
			$accept = Group::IMGS();
		}
		#src/apis/FileApi.hx:61: characters 3-59
		$ext = Mime::extension($_mime);
		#src/apis/FileApi.hx:63: lines 63-64
		if (ExtGroup_Impl_::toGroup($ext) === $accept) {
			#src/apis/FileApi.hx:64: characters 3-14
			return true;
		}
		#src/apis/FileApi.hx:65: characters 3-15
		return false;
	}

	/**
	 * @param int $size
	 * @param int $max
	 * 
	 * @return bool
	 */
	static public function checkSize ($size, $max) {
		#src/apis/FileApi.hx:56: characters 3-30
		if ($size < $max) {
			#src/apis/FileApi.hx:56: characters 19-30
			return true;
		}
		#src/apis/FileApi.hx:57: characters 3-15
		return false;
	}

	/**
	 * @param object $img
	 * 
	 * @return FutureObject
	 */
	static public function saveFile ($img) {
		#src/apis/FileApi.hx:31: lines 31-37
		if ($img !== null) {
			#src/apis/FileApi.hx:32: characters 4-45
			$cleanName = \Mots::cleanFile($img->fileName);
			#src/apis/FileApi.hx:33: characters 3-47
			return $img->saveTo("./statics/" . ($cleanName??'null'));
		} else {
			#src/apis/FileApi.hx:36: characters 4-37
			return Promise_Impl_::noise(new SyncFuture(new LazyConst(Outcome::Success(new HxAnon(["name" => null])))));
		}
	}

	/**
	 * @param object $img
	 * @param Group $accept
	 * @param int $maxSize
	 * 
	 * @return FutureObject
	 */
	static public function saveImg ($img, $accept = null, $maxSize = 10000000) {
		#src/apis/FileApi.hx:17: lines 17-26
		if ($maxSize === null) {
			$maxSize = 10000000;
		}
		if ($img !== null) {
			#src/apis/FileApi.hx:18: characters 4-45
			$cleanName = \Mots::cleanFile($img->fileName);
			#src/apis/FileApi.hx:19: characters 4-131
			if (!FileApi::checkMime($img->mimeType, $accept)) {
				#src/apis/FileApi.hx:19: characters 70-129
				$e = "format not acceptid:" . (Mime::extension($img->mimeType)??'null') . "paf";
				#src/apis/FileApi.hx:19: characters 47-131
				return new SyncFuture(new LazyConst(Outcome::Failure(new TypedError(null, $e, new HxAnon([
					"fileName" => "src/apis/FileApi.hx",
					"lineNumber" => 19,
					"className" => "apis.FileApi",
					"methodName" => "saveImg",
				])))));
			}
			#src/apis/FileApi.hx:20: characters 4-92
			if (!FileApi::checkSize($img->size, $maxSize)) {
				#src/apis/FileApi.hx:20: characters 44-92
				return new SyncFuture(new LazyConst(Outcome::Failure(new TypedError(null, ($img->size??'null') . " is too big", new HxAnon([
					"fileName" => "src/apis/FileApi.hx",
					"lineNumber" => 20,
					"className" => "apis.FileApi",
					"methodName" => "saveImg",
				])))));
			}
			#src/apis/FileApi.hx:21: lines 21-23
			return Promise_Impl_::next(Promise_Impl_::next($img->saveTo("./statics/" . ($cleanName??'null')), function ($noise)  use (&$cleanName) {
				#src/apis/FileApi.hx:22: characters 17-65
				return ImageApi::getResizedImage("statics/" . ($cleanName??'null'));
			}), function ($path) {
				#src/apis/FileApi.hx:23: characters 16-27
				return new SyncFuture(new LazyConst(Outcome::Success(new HxAnon(["name" => $path]))));
			});
		} else {
			#src/apis/FileApi.hx:25: characters 11-37
			return new SyncFuture(new LazyConst(Outcome::Success(new HxAnon(["name" => null]))));
		}
	}

	/**
	 * @param object $sound
	 * 
	 * @return FutureObject
	 */
	static public function saveSound ($sound) {
		#src/apis/FileApi.hx:44: lines 44-51
		if ($sound !== null) {
			#src/apis/FileApi.hx:45: lines 45-49
			return Promise_Impl_::next(RealSourceTools::all($sound->read()), function ($chunk)  use (&$sound) {
				#src/apis/FileApi.hx:46: characters 5-53
				$cleanSoundName = \Mots::cleanFile($sound->fileName);
				#src/apis/FileApi.hx:47: characters 5-74
				File::saveBytes("./statics/" . ($cleanSoundName??'null'), $chunk->toBytes());
				#src/apis/FileApi.hx:48: characters 5-56
				return new SyncFuture(new LazyConst(Outcome::Success(new HxAnon([
					"name" => $cleanSoundName,
					"length" => $chunk->getLength(),
				]))));
			});
		} else {
			#src/apis/FileApi.hx:51: characters 11-51
			return new SyncFuture(new LazyConst(Outcome::Success(new HxAnon([
				"name" => null,
				"length" => null,
			]))));
		}
	}
}

Boot::registerClass(FileApi::class, 'apis.FileApi');
