<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_chunk/0.2.0/haxelib/src/tink/chunk/ChunkBase.hx
 */

namespace tink\chunk;

use \php\Boot;

class ChunkBase {
	/**
	 * @var \Array_hx
	 */
	public $flattened;

	/**
	 * @param \Array_hx $into
	 * 
	 * @return void
	 */
	public function flatten ($into) {
	}

	/**
	 * @return ChunkCursor
	 */
	public function getCursor () {
		#/Users/ut/haxe/haxe_libraries/tink_chunk/0.2.0/haxelib/src/tink/chunk/ChunkBase.hx:6: lines 6-7
		if ($this->flattened === null) {
			#/Users/ut/haxe/haxe_libraries/tink_chunk/0.2.0/haxelib/src/tink/chunk/ChunkBase.hx:7: characters 7-35
			$this->flatten($this->flattened = new \Array_hx());
		}
		#/Users/ut/haxe/haxe_libraries/tink_chunk/0.2.0/haxelib/src/tink/chunk/ChunkBase.hx:8: characters 5-48
		return ChunkCursor::create((clone $this->flattened));
	}
}

Boot::registerClass(ChunkBase::class, 'tink.chunk.ChunkBase');
