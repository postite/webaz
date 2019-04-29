<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx
 */

namespace haxe\format;

use \php\_Boot\HxAnon;
use \php\Boot;
use \php\_Boot\HxException;

/**
 * An implementation of JSON parser in Haxe.
 * This class is used by `haxe.Json` when native JSON implementation
 * is not available.
 * @see https://haxe.org/manual/std-Json-parsing.html
 */
class JsonParser {
	/**
	 * @var int
	 */
	public $pos;
	/**
	 * @var string
	 */
	public $str;

	/**
	 * @param string $str
	 * 
	 * @return void
	 */
	public function __construct ($str) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:52: characters 3-17
		$this->str = $str;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:53: characters 3-15
		$this->pos = 0;
	}

	/**
	 * @return mixed
	 */
	public function doParse () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:57: characters 3-27
		$result = $this->parseRec();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:58: characters 3-9
		$c = null;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:59: lines 59-66
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:59: characters 29-43
			$c = \StringTools::fastCodeAt($this->str, $this->pos++);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:59: lines 59-66
			if (!($c !== 0)) {
				break;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:60: lines 60-65
			if ($c === 9 || $c === 10 || $c === 13 || $c === 32) {
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:64: characters 6-19
				$this->invalidChar();
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:67: characters 3-16
		return $result;
	}

	/**
	 * @return void
	 */
	public function invalidChar () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:265: characters 3-8
		$this->pos--;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:266: characters 3-8
		throw new HxException("Invalid char " . (\StringTools::fastCodeAt($this->str, $this->pos)??'null') . " at position " . ($this->pos??'null'));
	}

	/**
	 * @param int $start
	 * 
	 * @return void
	 */
	public function invalidNumber ($start) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:270: characters 3-8
		throw new HxException("Invalid number at position " . ($start??'null') . ": " . (mb_substr($this->str, $start, $this->pos - $start)??'null'));
	}

	/**
	 * @return mixed
	 */
	public function parseRec () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:71: lines 71-149
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:72: characters 4-23
			$c = \StringTools::fastCodeAt($this->str, $this->pos++);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:73: lines 73-148
			if ($c === 9 || $c === 10 || $c === 13 || $c === 32) {
			} else if ($c === 34) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:143: characters 5-25
				return $this->parseString();
			} else if ($c === 45 || $c === 48 || $c === 49 || $c === 50 || $c === 51 || $c === 52 || $c === 53 || $c === 54 || $c === 55 || $c === 56 || $c === 57) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:145: characters 12-26
				$c1 = $c;
				$start = $this->pos - 1;
				$minus = $c === 45;
				$digit = !$minus;
				$zero = $c === 48;
				$point = false;
				$e = false;
				$pm = false;
				$end = false;
				while (true) {
					$c1 = \StringTools::fastCodeAt($this->str, $this->pos++);
					if ($c1 === 43 || $c1 === 45) {
						if (!$e || $pm) {
							$this->invalidNumber($start);
						}
						$digit = false;
						$pm = true;
					} else if ($c1 === 46) {
						if ($minus || $point || $e) {
							$this->invalidNumber($start);
						}
						$digit = false;
						$point = true;
					} else if ($c1 === 48) {
						if ($zero && !$point) {
							$this->invalidNumber($start);
						}
						if ($minus) {
							$minus = false;
							$zero = true;
						}
						$digit = true;
					} else if ($c1 === 49 || $c1 === 50 || $c1 === 51 || $c1 === 52 || $c1 === 53 || $c1 === 54 || $c1 === 55 || $c1 === 56 || $c1 === 57) {
						if ($zero && !$point) {
							$this->invalidNumber($start);
						}
						if ($minus) {
							$minus = false;
						}
						$digit = true;
						$zero = false;
					} else if ($c1 === 69 || $c1 === 101) {
						if ($minus || $zero || $e) {
							$this->invalidNumber($start);
						}
						$digit = false;
						$e = true;
					} else {
						if (!$digit) {
							$this->invalidNumber($start);
						}
						$this->pos--;
						$end = true;
					}
					if ($end) {
						break;
					}
				}
				$f = \Std::parseFloat(mb_substr($this->str, $start, $this->pos - $start));
				$i = (int)($f);
				if (Boot::equal($i, $f)) {
					return $i;
				} else {
					return $f;
				}
			} else if ($c === 91) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:103: characters 5-45
				$arr = new \Array_hx();
				$comma = null;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:104: lines 104-120
				while (true) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:105: characters 6-25
					$c2 = \StringTools::fastCodeAt($this->str, $this->pos++);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:106: lines 106-119
					if ($c2 === 9 || $c2 === 10 || $c2 === 13 || $c2 === 32) {
					} else if ($c2 === 44) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:113: characters 7-51
						if ($comma) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:113: characters 19-32
							$comma = false;
						} else {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:113: characters 38-51
							$this->invalidChar();
						}
					} else if ($c2 === 93) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:110: characters 7-41
						if ($comma === false) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:110: characters 28-41
							$this->invalidChar();
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:111: characters 7-17
						return $arr;
					} else {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:115: characters 7-32
						if ($comma) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:115: characters 19-32
							$this->invalidChar();
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:116: characters 7-12
						$this->pos--;
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:117: characters 7-27
						$x = $this->parseRec();
						$arr->arr[$arr->length] = $x;
						++$arr->length;

						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:118: characters 7-19
						$comma = true;
					}
				}
			} else if ($c === 102) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:129: characters 5-20
				$save = $this->pos;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:130: lines 130-133
				if ((\StringTools::fastCodeAt($this->str, $this->pos++) !== 97) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 108) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 115) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 101)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:131: characters 6-16
					$this->pos = $save;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:132: characters 6-19
					$this->invalidChar();
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:134: characters 5-17
				return false;
			} else if ($c === 110) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:136: characters 5-20
				$save1 = $this->pos;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:137: lines 137-140
				if ((\StringTools::fastCodeAt($this->str, $this->pos++) !== 117) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 108) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 108)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:138: characters 6-16
					$this->pos = $save1;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:139: characters 6-19
					$this->invalidChar();
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:141: characters 5-16
				return null;
			} else if ($c === 116) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:122: characters 5-20
				$save2 = $this->pos;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:123: lines 123-126
				if ((\StringTools::fastCodeAt($this->str, $this->pos++) !== 114) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 117) || (\StringTools::fastCodeAt($this->str, $this->pos++) !== 101)) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:124: characters 6-16
					$this->pos = $save2;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:125: characters 6-19
					$this->invalidChar();
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:127: characters 5-16
				return true;
			} else if ($c === 123) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:77: characters 5-59
				$obj = new HxAnon();
				$field = null;
				$comma1 = null;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:78: lines 78-101
				while (true) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:79: characters 6-25
					$c3 = \StringTools::fastCodeAt($this->str, $this->pos++);
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:80: lines 80-100
					if ($c3 === 9 || $c3 === 10 || $c3 === 13 || $c3 === 32) {
					} else if ($c3 === 34) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:96: characters 7-49
						if (($field !== null) || $comma1) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:96: characters 36-49
							$this->invalidChar();
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:97: characters 7-28
						$field = $this->parseString();
					} else if ($c3 === 44) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:94: characters 7-51
						if ($comma1) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:94: characters 19-32
							$comma1 = false;
						} else {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:94: characters 38-51
							$this->invalidChar();
						}
					} else if ($c3 === 58) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:88: lines 88-89
						if ($field === null) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:89: characters 8-21
							$this->invalidChar();
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:90: characters 7-45
						\Reflect::setField($obj, $field, $this->parseRec());
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:91: characters 7-19
						$field = null;
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:92: characters 7-19
						$comma1 = true;
					} else if ($c3 === 125) {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:84: lines 84-85
						if (($field !== null) || ($comma1 === false)) {
							#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:85: characters 8-21
							$this->invalidChar();
						}
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:86: characters 7-17
						return $obj;
					} else {
						#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:99: characters 7-20
						$this->invalidChar();
					}
				}
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:147: characters 5-18
				$this->invalidChar();
			}
		}
	}

	/**
	 * @return string
	 */
	public function parseString () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:153: characters 3-19
		$start = $this->pos;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:154: characters 3-18
		$buf = null;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:155: lines 155-211
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:156: characters 4-23
			$c = \StringTools::fastCodeAt($this->str, $this->pos++);
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:157: lines 157-158
			if ($c === 34) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:158: characters 5-10
				break;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:159: lines 159-210
			if ($c === 92) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:160: lines 160-162
				if ($buf === null) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:161: characters 6-27
					$buf = new \StringBuf();
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:163: characters 5-8
				$buf1 = $buf;
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:163: characters 5-43
				$buf1->b = ($buf1->b??'null') . (mb_substr($this->str, $start, $this->pos - $start - 1)??'null');

				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:164: characters 5-19
				$c = \StringTools::fastCodeAt($this->str, $this->pos++);
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:165: lines 165-196
				if ($c === 34 || $c === 47 || $c === 92) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:171: characters 41-44
					$buf2 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:171: characters 41-55
					$buf2->b = ($buf2->b??'null') . (mb_chr($c)??'null');
				} else if ($c === 98) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:169: characters 20-23
					$buf3 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:169: characters 20-34
					$buf3->b = ($buf3->b??'null') . (mb_chr(8)??'null');
				} else if ($c === 102) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:170: characters 20-23
					$buf4 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:170: characters 20-35
					$buf4->b = ($buf4->b??'null') . (mb_chr(12)??'null');
				} else if ($c === 110) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:167: characters 20-23
					$buf5 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:167: characters 20-42
					$buf5->b = ($buf5->b??'null') . (mb_chr(10)??'null');
				} else if ($c === 114) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:166: characters 20-23
					$buf6 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:166: characters 20-42
					$buf6->b = ($buf6->b??'null') . (mb_chr(13)??'null');
				} else if ($c === 116) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:168: characters 20-23
					$buf7 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:168: characters 20-42
					$buf7->b = ($buf7->b??'null') . (mb_chr(9)??'null');
				} else if ($c === 117) {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:173: characters 6-55
					$uc = \Std::parseInt("0x" . (mb_substr($this->str, $this->pos, 4)??'null'));
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:174: characters 6-14
					$this->pos += 4;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:192: characters 6-9
					$buf8 = $buf;
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:192: characters 6-21
					$buf8->b = ($buf8->b??'null') . (mb_chr($uc)??'null');
				} else {
					#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:195: characters 6-11
					throw new HxException("Invalid escape sequence \\" . (mb_chr($c)??'null') . " at position " . (($this->pos - 1)??'null'));
				}
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:197: characters 5-16
				$start = $this->pos;
			} else if ($c === 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:210: characters 5-10
				throw new HxException("Unclosed string");
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:212: lines 212-218
		if ($buf === null) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:213: characters 11-45
			return mb_substr($this->str, $start, $this->pos - $start - 1);
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:216: characters 4-7
			$buf9 = $buf;
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:216: characters 4-42
			$buf9->b = ($buf9->b??'null') . (mb_substr($this->str, $start, $this->pos - $start - 1)??'null');

			#/Users/ut/haxe/versions/4.0.0-rc.2/std/haxe/format/JsonParser.hx:217: characters 4-25
			return $buf->b;
		}
	}
}

Boot::registerClass(JsonParser::class, 'haxe.format.JsonParser');
