<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx
 */

namespace tink\sql\drivers\php\_MySQLi;

use \haxe\io\_BytesData\Container;
use \php\_Boot\HxAnon;
use \haxe\ds\Option;
use \php\Boot;
use \haxe\io\BytesInput;
use \php\_Boot\HxException;
use \haxe\io\Bytes;

final class ResultSet_Impl_ {
	/**
	 * @param NativeResultSet $this
	 * 
	 * @return object
	 */
	static public function fields ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:102: characters 11-89
		return \Array_hx::wrap($this1->fetch_fields());
	}

	/**
	 * @param NativeResultSet $this
	 * 
	 * @return object
	 */
	static public function iterator ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:105: characters 5-28
		return ResultSet_Impl_::nestedIterator($this1);
	}

	/**
	 * @param NativeResultSet $this
	 * @param bool $nest
	 * 
	 * @return object
	 */
	static public function nestedIterator ($this1, $nest = false) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:107: lines 107-133
		if ($nest === null) {
			$nest = false;
		}
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:108: characters 5-17
		$current = null;
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:109: characters 5-27
		$fields = ResultSet_Impl_::fields($this1);
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:110: lines 110-132
		return new HxAnon([
			"hasNext" => function ()  use (&$this1, &$current) {
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:112: characters 23-28
				$_g = ResultSet_Impl_::row($this1);
				$__hx__switch = ($_g->index);
				if ($__hx__switch === 0) {
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:114: characters 21-22
					$v = $_g->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:115: characters 13-24
					$current = $v;
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:116: characters 13-17
					return true;
				} else if ($__hx__switch === 1) {
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:113: characters 22-27
					return false;
				}
			},
			"next" => function ()  use (&$nest, &$fields, &$this1, &$current) {
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:120: characters 9-42
				$res = new HxAnon();
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:121: characters 9-26
				$target = $res;
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:122: characters 9-19
				$i = 0;
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:123: characters 23-29
				$field = $fields->iterator();
				while ($field->hasNext()) {
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:123: lines 123-129
					$field1 = $field->next();
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:124: lines 124-126
					if ($nest) {
						#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:125: lines 125-126
						if (!\Reflect::hasField($res, $field1->table)) {
							#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:125: characters 43-64
							$value = new HxAnon();
							\Reflect::setField($res, $field1->table, $value);
							$target = $value;
						} else {
							#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:126: characters 18-34
							$target = \Reflect::field($res, $field1->table);
						}
					}
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:127: characters 11-36
					$value1 = $current[$i++];
					#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:128: characters 11-58
					$key = $field1->name;
					$value2 = ResultSet_Impl_::processField($this1, $field1, $value1);
					\Reflect::setField($target, $key, $value2);

				}

				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:130: characters 9-24
				return $res;
			},
		]);
	}

	/**
	 * @param NativeResultSet $this
	 * @param BytesInput $buffer
	 * 
	 * @return object
	 */
	static public function parseGeo ($this1, $buffer) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:136: characters 5-46
		$buffer->set_bigEndian($buffer->readByte() === 0);
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:137: characters 19-37
		$_g = $buffer->readInt32();
		if ($_g === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:139: characters 9-62
			$y = $buffer->readDouble();
			$x = $buffer->readDouble();
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:140: characters 9-32
			$this2 = \Array_hx::wrap([
				$y,
				$x,
			]);
			$this3 = new HxAnon([
				"type" => "Point",
				"coordinates" => $this2,
			]);
			return $this3;
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:141: characters 15-20
			throw new HxException("GeoJson type " . ($_g??'null') . " not supported");
		}
	}

	/**
	 * @param NativeResultSet $this
	 * @param object $field
	 * @param mixed $value
	 * 
	 * @return mixed
	 */
	static public function processField ($this1, $field, $value) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:146: characters 5-35
		if ($value === null) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:146: characters 24-35
			return null;
		}
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:147: characters 19-29
		$__hx__switch = ($field->type);
		if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:148: lines 148-149
			return $value === "1";
		} else if ($__hx__switch === 4) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:152: lines 152-153
			return \Std::parseFloat($value);
		} else if ($__hx__switch === 2 || $__hx__switch === 3 || $__hx__switch === 8 || $__hx__switch === 9) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:150: lines 150-151
			return \Std::parseInt($value);
		} else if ($__hx__switch === 12) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:154: lines 154-155
			return \Date::fromString($value);
		} else if ($__hx__switch === 249 || $__hx__switch === 250 || $__hx__switch === 251 || $__hx__switch === 252 || $__hx__switch === 253 || $__hx__switch === 254) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:157: lines 157-158
			if (($field->flags & 128) > 0) {
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:157: characters 36-57
				$s = $value;
				$value1 = strlen($s);
				return new Bytes($value1, new Container($s));
			} else {
				#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:158: characters 14-19
				return $value;
			}
		} else if ($__hx__switch === 255) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:160: characters 33-54
			$s1 = $value;
			$value2 = strlen($s1);
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:159: lines 159-160
			return ResultSet_Impl_::parseGeo($this1, new BytesInput(new Bytes($value2, new Container($s1)), 4));
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:161: characters 16-21
			return $value;
		}
	}

	/**
	 * @param NativeResultSet $this
	 * 
	 * @return Option
	 */
	static public function row ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:95: characters 19-35
		$_g = $this1->fetch_row();
		#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:96: lines 96-97
		if ($_g === null) {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:96: characters 18-22
			return Option::None();
		} else {
			#/Users/ut/haxe/haxe_libraries/tink_sql/0.0.0-alpha.0/github/485516a0ac3307cf25ff126f4feafff93a01878a/src/tink/sql/drivers/php/MySQLi.hx:97: characters 15-70
			return Option::Some(\Array_hx::wrap($_g));
		}
	}
}

Boot::registerClass(ResultSet_Impl_::class, 'tink.sql.drivers.php._MySQLi.ResultSet_Impl_');
