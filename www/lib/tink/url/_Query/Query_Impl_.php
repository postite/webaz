<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx
 */

namespace tink\url\_Query;

use \php\Boot;
use \haxe\IMap;
use \haxe\ds\StringMap;
use \tink\url\_Portion\Portion_Impl_;

final class Query_Impl_ {
	/**
	 * @return \Array_hx
	 */
	static public function build () {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:53: characters 12-36
		$this1 = new \Array_hx();
		return $this1;
	}

	/**
	 * @param string $this
	 * 
	 * @return QueryStringParser
	 */
	static public function iterator ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:34: characters 5-29
		return new QueryStringParser($this1, "&", "=", 0);
	}

	/**
	 * @param mixed $v
	 * 
	 * @return string
	 */
	static public function ofObj ($v) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:40: characters 15-39
		$this1 = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:40: lines 40-41
		$ret = $this1;
		$v1 = $v;
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:43: lines 43-44
		$_g = 0;
		$_g1 = \Reflect::fields($v1);
		while ($_g < $_g1->length) {
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:43: characters 10-11
			$k = ($_g1->arr[$_g] ?? null);
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:43: lines 43-44
			++$_g;
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:44: characters 7-23
			$name = Portion_Impl_::ofString($k);
			$value = Portion_Impl_::ofString(\Reflect::field($v1, $k));
			$ret->arr[$ret->length] = ($name??'null') . "=" . ($value??'null');
			++$ret->length;


		}

		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:46: characters 5-26
		return $ret->join("&");
	}

	/**
	 * @param string $this
	 * 
	 * @return QueryStringParser
	 */
	static public function parse ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:11: characters 5-22
		return new QueryStringParser($this1, "&", "=", 0);
	}

	/**
	 * @param string $s
	 * @param string $sep
	 * @param string $set
	 * @param int $pos
	 * 
	 * @return QueryStringParser
	 */
	static public function parseString ($s, $sep = "&", $set = "=", $pos = 0) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:56: characters 5-51
		if ($sep === null) {
			$sep = "&";
		}
		if ($set === null) {
			$set = "=";
		}
		if ($pos === null) {
			$pos = 0;
		}
		return new QueryStringParser($s, $sep, $set, $pos);
	}

	/**
	 * @param string $this
	 * 
	 * @return StringMap
	 */
	static public function toMap ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:37: characters 12-73
		$_g = new StringMap();
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:37: characters 23-33
		$p = new QueryStringParser($this1, "&", "=", 0);
		while ($p->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:37: characters 13-72
			$p1 = $p->next();
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:37: characters 35-72
			$_g->data[$p1->name] = $p1->value;
		}

		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:37: characters 12-73
		return $_g;
	}

	/**
	 * @param string $this
	 * 
	 * @return string
	 */
	static public function toString ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:50: characters 5-16
		return $this1;
	}

	/**
	 * @param string $this
	 * @param IMap $values
	 * 
	 * @return string
	 */
	static public function with ($this1, $values) {
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:14: characters 15-39
		$this2 = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:14: characters 5-40
		$ret = $this2;
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:16: characters 18-49
		$_g = new \Array_hx();
		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:16: characters 30-43
		$key = $values->keys();
		while ($key->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:16: characters 19-48
			$key1 = $key->next();
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:16: characters 45-48
			$_g->arr[$_g->length] = $key1;
			++$_g->length;
		}

		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:18: characters 14-24
		$p = new QueryStringParser($this1, "&", "=", 0);
		while ($p->hasNext()) {
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:18: lines 18-25
			$p1 = $p->next();
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:19: lines 19-24
			if ($values->exists(Portion_Impl_::ofString($p1->name))) {
				#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:20: characters 9-40
				$name = Portion_Impl_::ofString($p1->name);
				$value = $values->get(Portion_Impl_::ofString($p1->name));
				$ret->arr[$ret->length] = ($name??'null') . "=" . ($value??'null');
				++$ret->length;


				#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:21: characters 9-30
				$_g->remove(Portion_Impl_::ofString($p1->name));
			} else {
				#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:23: characters 9-33
				$name1 = Portion_Impl_::ofString($p1->name);
				$ret->arr[$ret->length] = ($name1??'null') . "=" . ($p1->value??'null');
				++$ret->length;

			}
		}

		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:27: characters 5-52
		$_g1 = 0;
		while ($_g1 < $_g->length) {
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:27: characters 9-13
			$name2 = ($_g->arr[$_g1] ?? null);
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:27: characters 5-52
			++$_g1;
			#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:27: characters 25-52
			$value1 = $values->get($name2);
			$ret->arr[$ret->length] = ($name2??'null') . "=" . ($value1??'null');
			++$ret->length;


		}

		#/Users/ut/haxe/haxe_libraries/tink_url/0.4.1/haxelib/src/tink/url/Query.hx:29: characters 5-26
		return $ret->join("&");
	}
}

Boot::registerClass(Query_Impl_::class, 'tink.url._Query.Query_Impl_');
