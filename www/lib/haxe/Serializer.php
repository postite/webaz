<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx
 */

namespace haxe;

use \php\Boot;
use \haxe\ds\ObjectMap;
use \php\_Boot\HxString;
use \haxe\ds\IntMap;
use \haxe\ds\List_hx;
use \haxe\ds\StringMap;
use \php\_Boot\HxException;
use \haxe\ds\_Vector\PhpVectorData;
use \haxe\io\Bytes;
use \php\_NativeIndexedArray\NativeIndexedArrayIterator;

/**
 * The Serializer class can be used to encode values and objects into a `String`,
 * from which the `Unserializer` class can recreate the original representation.
 * This class can be used in two ways:
 * - create a `new Serializer()` instance, call its `serialize()` method with
 * any argument and finally retrieve the String representation from
 * `toString()`
 * - call `Serializer.run()` to obtain the serialized representation of a
 * single argument
 * Serialization is guaranteed to work for all haxe-defined classes, but may
 * or may not work for instances of external/native classes.
 * The specification of the serialization format can be found here:
 * <https://haxe.org/manual/std-serialization-format.html>
 */
class Serializer {
	/**
	 * @var string
	 */
	static public $BASE64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%:";
	/**
	 * @var PhpVectorData
	 */
	static public $BASE64_CODES = null;
	/**
	 * @var bool
	 * If the values you are serializing can contain circular references or
	 * objects repetitions, you should set `USE_CACHE` to true to prevent
	 * infinite loops.
	 * This may also reduce the size of serialization Strings at the expense of
	 * performance.
	 * This value can be changed for individual instances of Serializer by
	 * setting their useCache field.
	 */
	static public $USE_CACHE = false;
	/**
	 * @var bool
	 * Use constructor indexes for enums instead of names.
	 * This may reduce the size of serialization Strings, but makes them less
	 * suited for long-term storage: If constructors are removed or added from
	 * the enum, the indices may no longer match.
	 * This value can be changed for individual instances of Serializer by
	 * setting their useEnumIndex field.
	 */
	static public $USE_ENUM_INDEX = false;

	/**
	 * @var \StringBuf
	 */
	public $buf;
	/**
	 * @var \Array_hx
	 */
	public $cache;
	/**
	 * @var int
	 */
	public $scount;
	/**
	 * @var StringMap
	 */
	public $shash;
	/**
	 * @var bool
	 * The individual cache setting for `this` Serializer instance.
	 * See USE_CACHE for a complete description.
	 */
	public $useCache;
	/**
	 * @var bool
	 * The individual enum index setting for `this` Serializer instance.
	 * See USE_ENUM_INDEX for a complete description.
	 */
	public $useEnumIndex;

	/**
	 * Serializes `v` and returns the String representation.
	 * This is a convenience function for creating a new instance of
	 * Serializer, serialize `v` into it and obtain the result through a call
	 * to toString().
	 * 
	 * @param mixed $v
	 * 
	 * @return string
	 */
	static public function run ($v) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:566: characters 3-28
		$s = new Serializer();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:567: characters 3-17
		$s->serialize($v);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:568: characters 3-22
		return $s->toString();
	}

	/**
	 * Creates a new Serializer instance.
	 * Subsequent calls to `this.serialize` will append values to the
	 * internal buffer of this String. Once complete, the contents can be
	 * retrieved through a call to `this.toString`.
	 * Each Serializer instance maintains its own cache if this.useCache` is
	 * true.
	 * 
	 * @return void
	 */
	public function __construct () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:103: characters 3-24
		$this->buf = new \StringBuf();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:104: characters 3-22
		$this->cache = new \Array_hx();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:105: characters 3-23
		$this->useCache = Serializer::$USE_CACHE;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:106: characters 3-32
		$this->useEnumIndex = Serializer::$USE_ENUM_INDEX;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:107: characters 3-34
		$this->shash = new StringMap();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:108: characters 3-13
		$this->scount = 0;
	}

	/**
	 * Serializes `v`.
	 * All haxe-defined values and objects with the exception of functions can
	 * be serialized. Serialization of external/native objects is not
	 * guaranteed to work.
	 * The values of `this.useCache` and `this.useEnumIndex` may affect
	 * serialization output.
	 * 
	 * @param mixed $v
	 * 
	 * @return void
	 */
	public function serialize ($v) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:229: characters 11-25
		$_g = \Type::typeof($v);
		$__hx__switch = ($_g->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:231: characters 4-16
			$this->buf->add("n");
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:233: characters 4-20
			$v1 = $v;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:234: lines 234-237
			if ($v1 === 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:235: characters 5-17
				$this->buf->add("z");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:236: characters 5-11
				return;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:238: characters 4-16
			$this->buf->add("i");
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:239: characters 4-14
			$this->buf->add($v1);
		} else if ($__hx__switch === 2) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:241: characters 4-22
			$v2 = $v;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:242: lines 242-249
			if (is_nan($v2)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:243: characters 5-17
				$this->buf->add("k");
			} else if (!is_finite($v2)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:245: characters 5-38
				$this->buf->add(($v2 < 0 ? "m" : "p"));
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:247: characters 5-17
				$this->buf->add("d");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:248: characters 5-15
				$this->buf->add($v2);
			}
		} else if ($__hx__switch === 3) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:251: characters 4-33
			$this->buf->add(($v ? "t" : "f"));
		} else if ($__hx__switch === 4) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:399: lines 399-416
			if (Boot::is($v, Boot::getClass('Class'))) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:400: characters 5-42
				$className = \Type::getClassName($v);
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:406: characters 5-17
				$this->buf->add("A");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:407: characters 5-31
				$this->serializeString($className);
			} else if (Boot::is($v, Boot::getClass('Enum'))) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:409: characters 5-17
				$this->buf->add("B");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:410: characters 5-41
				$this->serializeString(\Type::getEnumName($v));
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:412: lines 412-413
				if ($this->useCache && $this->serializeRef($v)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:413: characters 6-12
					return;
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:414: characters 5-17
				$this->buf->add("o");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:415: characters 5-23
				$this->serializeFields($v);
			}
		} else if ($__hx__switch === 5) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:527: characters 4-9
			throw new HxException("Cannot serialize function");
		} else if ($__hx__switch === 6) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:252: characters 15-16
			$c = $_g->params[0];
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:253: lines 253-256
			if ($c === Boot::getClass('String')) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:254: characters 5-23
				$this->serializeString($v);
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:255: characters 5-11
				return;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:257: lines 257-258
			if ($this->useCache && $this->serializeRef($v)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:258: characters 5-11
				return;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:259: lines 259-397
			if ($c === Boot::getClass(\Array_hx::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:261: characters 5-20
				$ucount = 0;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:262: characters 5-17
				$this->buf->add("a");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:266: characters 5-154
				$l = Boot::dynamicField($v, 'length');
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:267: lines 267-282
				$_g1 = 0;
				while ($_g1 < $l) {
					$i = $_g1++;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:268: lines 268-281
					if ($v[$i] === null) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:269: characters 7-15
						++$ucount;
					} else {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:271: lines 271-279
						if ($ucount > 0) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:272: lines 272-277
							if ($ucount === 1) {
								#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:273: characters 9-21
								$this->buf->add("n");
							} else {
								#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:275: characters 9-21
								$this->buf->add("u");
								#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:276: characters 9-24
								$this->buf->add($ucount);
							}
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:278: characters 8-14
							$ucount = 0;
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:280: characters 7-22
						$this->serialize($v[$i]);
					}
				}

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:283: lines 283-290
				if ($ucount > 0) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:284: lines 284-289
					if ($ucount === 1) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:285: characters 7-19
						$this->buf->add("n");
					} else {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:287: characters 7-19
						$this->buf->add("u");
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:288: characters 7-22
						$this->buf->add($ucount);
					}
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:291: characters 5-17
				$this->buf->add("h");
			} else if ($c === Boot::getClass(\Date::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:299: characters 5-22
				$d = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:300: characters 5-17
				$this->buf->add("v");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:301: characters 5-25
				$this->buf->add($d->getTime());
			} else if ($c === Boot::getClass(IntMap::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:311: characters 5-17
				$this->buf->add("q");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:312: characters 5-41
				$v3 = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:313: characters 15-23
				$k = new NativeIndexedArrayIterator(array_keys($v3->data));
				while ($k->hasNext()) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:313: lines 313-317
					$k1 = $k->next();
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:314: characters 6-18
					$this->buf->add(":");
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:315: characters 6-16
					$this->buf->add($k1);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:316: characters 6-25
					$this->serialize(($v3->data[$k1] ?? null));
				}

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:318: characters 5-17
				$this->buf->add("h");
			} else if ($c === Boot::getClass(List_hx::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:293: characters 5-17
				$this->buf->add("l");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:294: characters 5-31
				$v4 = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:295: characters 15-16
				$_g_head = $v4->h;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:295: lines 295-296
				while ($_g_head !== null) {
					$val = $_g_head->item;
					$_g_head = $_g_head->next;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:296: characters 6-18
					$this->serialize($val);
				}

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:297: characters 5-17
				$this->buf->add("h");
			} else if ($c === Boot::getClass(ObjectMap::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:320: characters 5-17
				$this->buf->add("M");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:321: characters 5-52
				$v5 = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:322: characters 16-24
				$k2 = new NativeIndexedArrayIterator(array_values($v5->_keys));
				while ($k2->hasNext()) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:322: lines 322-332
					$k3 = $k2->next();
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:329: characters 6-18
					$this->serialize($k3);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:331: characters 6-25
					$this->serialize($v5->get($k3));
				}

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:333: characters 5-17
				$this->buf->add("h");
			} else if ($c === Boot::getClass(StringMap::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:303: characters 5-17
				$this->buf->add("b");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:304: characters 5-44
				$v6 = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:305: characters 15-23
				$k4 = new NativeIndexedArrayIterator(array_values(array_map("strval", array_keys($v6->data))));
				while ($k4->hasNext()) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:305: lines 305-308
					$k5 = $k4->next();
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:306: characters 6-24
					$this->serializeString($k5);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:307: characters 6-25
					$this->serialize(($v6->data[$k5] ?? null));
				}

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:309: characters 5-17
				$this->buf->add("h");
			} else if ($c === Boot::getClass(Bytes::class)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:335: characters 5-31
				$v7 = $v;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:344: characters 5-17
				$this->buf->add("s");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:345: characters 5-43
				$this->buf->add((int)(ceil($v7->length * 8 / 6)));
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:346: characters 5-17
				$this->buf->add(":");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:348: characters 5-15
				$i1 = 0;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:349: characters 5-28
				$max = $v7->length - 2;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:350: characters 5-28
				$b64 = Serializer::$BASE64_CODES;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:351: lines 351-356
				if ($b64 === null) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:352: characters 12-45
					$this1 = new PhpVectorData(mb_strlen(Serializer::$BASE64));
					$b64 = $this1;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:353: lines 353-354
					$_g2 = 0;
					$_g11 = mb_strlen(Serializer::$BASE64);
					while ($_g2 < $_g11) {
						$i2 = $_g2++;
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:354: characters 7-36
						$b64->data[$i2] = HxString::charCodeAt(Serializer::$BASE64, $i2);
					}

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:355: characters 6-18
					Serializer::$BASE64_CODES = $b64;
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:357: lines 357-366
				while ($i1 < $max) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:358: characters 6-26
					$b1 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:359: characters 6-26
					$b2 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:360: characters 6-26
					$b3 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:362: characters 6-31
					$_this = $this->buf;
					$c1 = ($b64->data[$b1 >> 2] ?? null);
					$_this->b = ($_this->b??'null') . (mb_chr($c1)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:363: characters 6-52
					$_this1 = $this->buf;
					$c2 = ($b64->data[(($b1 << 4) | ($b2 >> 4)) & 63] ?? null);
					$_this1->b = ($_this1->b??'null') . (mb_chr($c2)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:364: characters 6-52
					$_this2 = $this->buf;
					$c3 = ($b64->data[(($b2 << 2) | ($b3 >> 6)) & 63] ?? null);
					$_this2->b = ($_this2->b??'null') . (mb_chr($c3)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:365: characters 6-31
					$_this3 = $this->buf;
					$c4 = ($b64->data[$b3 & 63] ?? null);
					$_this3->b = ($_this3->b??'null') . (mb_chr($c4)??'null');

				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:367: lines 367-377
				if ($i1 === $max) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:368: characters 6-26
					$b11 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:369: characters 6-26
					$b21 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:370: characters 6-31
					$_this4 = $this->buf;
					$c5 = ($b64->data[$b11 >> 2] ?? null);
					$_this4->b = ($_this4->b??'null') . (mb_chr($c5)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:371: characters 6-52
					$_this5 = $this->buf;
					$c6 = ($b64->data[(($b11 << 4) | ($b21 >> 4)) & 63] ?? null);
					$_this5->b = ($_this5->b??'null') . (mb_chr($c6)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:372: characters 6-38
					$_this6 = $this->buf;
					$c7 = ($b64->data[($b21 << 2) & 63] ?? null);
					$_this6->b = ($_this6->b??'null') . (mb_chr($c7)??'null');

				} else if ($i1 === ($max + 1)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:374: characters 6-26
					$b12 = ord($v7->b->s[$i1++]);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:375: characters 6-31
					$_this7 = $this->buf;
					$c8 = ($b64->data[$b12 >> 2] ?? null);
					$_this7->b = ($_this7->b??'null') . (mb_chr($c8)??'null');

					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:376: characters 6-38
					$_this8 = $this->buf;
					$c9 = ($b64->data[($b12 << 4) & 63] ?? null);
					$_this8->b = ($_this8->b??'null') . (mb_chr($c9)??'null');

				}
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:380: characters 5-31
				if ($this->useCache) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:380: characters 20-31
					$_this9 = $this->cache;
					if ($_this9->length > 0) {
						$_this9->length--;
					}
					array_pop($_this9->arr);
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:381: lines 381-396
				if (method_exists($v, "hxSerialize")) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:382: characters 6-18
					$this->buf->add("C");
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:383: characters 6-43
					$this->serializeString(\Type::getClassName($c));
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:384: characters 6-34
					if ($this->useCache) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:384: characters 21-34
						$_this10 = $this->cache;
						$_this10->arr[$_this10->length] = $v;
						++$_this10->length;
					}
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:385: characters 6-25
					$v->hxSerialize($this);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:386: characters 6-18
					$this->buf->add("g");
				} else {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:388: characters 6-18
					$this->buf->add("c");
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:389: characters 6-43
					$this->serializeString(\Type::getClassName($c));
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:390: characters 6-34
					if ($this->useCache) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:390: characters 21-34
						$_this11 = $this->cache;
						$_this11->arr[$_this11->length] = $v;
						++$_this11->length;
					}
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:394: characters 6-24
					$this->serializeFields($v);
				}
			}

		} else if ($__hx__switch === 7) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:417: characters 14-15
			$e = $_g->params[0];
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:418: lines 418-422
			if ($this->useCache) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:419: lines 419-420
				if ($this->serializeRef($v)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:420: characters 6-12
					return;
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:421: characters 5-16
				$_this12 = $this->cache;
				if ($_this12->length > 0) {
					$_this12->length--;
				}
				array_pop($_this12->arr);

			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:423: characters 4-33
			$this->buf->add(($this->useEnumIndex ? "j" : "w"));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:424: characters 4-40
			$this->serializeString(\Type::getEnumName($e));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:469: lines 469-473
			if ($this->useEnumIndex) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:470: characters 5-17
				$this->buf->add(":");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:471: characters 5-21
				$this->buf->add(Boot::dynamicField($v, 'index'));
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:473: characters 5-27
				$this->serializeString(Boot::dynamicField($v, 'tag'));
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:474: characters 4-16
			$this->buf->add(":");
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:475: characters 4-58
			$l1 = count(Boot::dynamicField($v, 'params'));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:476: lines 476-485
			if (($l1 === 0) || (Boot::dynamicField($v, 'params') === null)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:477: characters 5-15
				$this->buf->add(0);
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:479: characters 5-15
				$this->buf->add($l1);
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:480: lines 480-484
				$_g3 = 0;
				while ($_g3 < $l1) {
					$i3 = $_g3++;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:482: characters 6-28
					$this->serialize(Boot::dynamicField($v, 'params')[$i3]);
				}

			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:525: characters 4-32
			if ($this->useCache) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:525: characters 19-32
				$_this13 = $this->cache;
				$_this13->arr[$_this13->length] = $v;
				++$_this13->length;
			}

		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:536: characters 4-9
			throw new HxException("Cannot serialize " . (\Std::string($v)??'null'));
		}
	}

	/**
	 * @param object $v
	 * 
	 * @return void
	 */
	public function serializeFields ($v) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:211: lines 211-214
		$_g = 0;
		$_g1 = \Reflect::fields($v);
		while ($_g < $_g1->length) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:211: characters 8-9
			$f = ($_g1->arr[$_g] ?? null);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:211: lines 211-214
			++$_g;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:212: characters 4-22
			$this->serializeString($f);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:213: characters 4-33
			$this->serialize(\Reflect::field($v, $f));
		}

		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:215: characters 3-15
		$this->buf->add("g");
	}

	/**
	 * @param mixed $v
	 * 
	 * @return bool
	 */
	public function serializeRef ($v) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:177: lines 177-188
		$_g = 0;
		$_g1 = $this->cache->length;
		while ($_g < $_g1) {
			$i = $_g++;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:182: lines 182-187
			if (Boot::equal(($this->cache->arr[$i] ?? null), $v)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:184: characters 5-17
				$this->buf->add("r");
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:185: characters 5-15
				$this->buf->add($i);
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:186: characters 5-16
				return true;
			}
		}

		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:189: characters 3-16
		$_this = $this->cache;
		$_this->arr[$_this->length] = $v;
		++$_this->length;

		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:190: characters 3-15
		return false;
	}

	/**
	 * @param string $s
	 * 
	 * @return void
	 */
	public function serializeString ($s) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:155: characters 3-24
		$x = ($this->shash->data[$s] ?? null);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:156: lines 156-160
		if ($x !== null) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:157: characters 4-16
			$this->buf->add("R");
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:158: characters 4-14
			$this->buf->add($x);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:159: characters 4-10
			return;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:161: characters 3-24
		$this->shash->data[$s] = $this->scount++;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:166: characters 3-15
		$this->buf->add("y");
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:167: characters 3-31
		$s = rawurlencode($s);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:168: characters 3-20
		$this->buf->add(mb_strlen($s));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:169: characters 3-15
		$this->buf->add(":");
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:170: characters 3-13
		$this->buf->add($s);
	}

	/**
	 * Return the String representation of `this` Serializer.
	 * The exact format specification can be found here:
	 * https://haxe.org/manual/serialization/format
	 * 
	 * @return string
	 */
	public function toString () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/Serializer.hx:118: characters 3-24
		return $this->buf->b;
	}

	public function __toString() {
		return $this->toString();
	}
}

Boot::registerClass(Serializer::class, 'haxe.Serializer');
