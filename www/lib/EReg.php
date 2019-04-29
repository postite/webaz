<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx
 */

use \php\_Boot\HxAnon;
use \php\Boot;
use \php\_Boot\HxException;

/**
 * The EReg class represents regular expressions.
 * While basic usage and patterns consistently work across platforms, some more
 * complex operations may yield different results. This is a necessary trade-
 * off to retain a certain level of performance.
 * EReg instances can be created by calling the constructor, or with the
 * special syntax `~/pattern/modifier`
 * EReg instances maintain an internal state, which is affected by several of
 * its methods.
 * A detailed explanation of the supported operations is available at
 * <https://haxe.org/manual/std-regex.html>
 */
final class EReg {
	/**
	 * @var bool
	 */
	public $global;
	/**
	 * @var string
	 */
	public $last;
	/**
	 * @var mixed
	 */
	public $matches;
	/**
	 * @var string
	 */
	public $options;
	/**
	 * @var string
	 */
	public $pattern;
	/**
	 * @var string
	 */
	public $re;

	/**
	 * Creates a new regular expression with pattern `r` and modifiers `opt`.
	 * This is equivalent to the shorthand syntax `~/r/opt`
	 * If `r` or `opt` are null, the result is unspecified.
	 * 
	 * @param string $r
	 * @param string $opt
	 * 
	 * @return void
	 */
	public function __construct ($r, $opt) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:37: characters 3-19
		$this->pattern = $r;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:38: characters 3-45
		$this->options = str_replace("g", "", $opt);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:39: characters 3-26
		$this->global = $this->options !== $opt;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:40: characters 3-69
		$this->re = "\"" . (str_replace("\"", "\\\"", $r)??'null') . "\"u" . ($this->options??'null');
	}

	/**
	 * Calls the function `f` for the substring of `s` which `this` EReg matches
	 * and replaces that substring with the result of `f` call.
	 * The `f` function takes `this` EReg object as its first argument and should
	 * return a replacement string for the substring matched.
	 * If `this` EReg does not match any substring, the result is `s`.
	 * By default, this method replaces only the first matched substring. If
	 * the global g modifier is in place, all matched substrings are replaced.
	 * If `s` or `f` are null, the result is unspecified.
	 * 
	 * @param string $s
	 * @param \Closure $f
	 * 
	 * @return string
	 */
	public function map ($s, $f) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:108: characters 3-18
		$offset = 0;
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:109: characters 3-29
		$buf = new \StringBuf();
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:110: characters 3-25
		$length = mb_strlen($s);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:111: lines 111-128
		while (true) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:112: lines 112-117
			if ($offset >= $length) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:113: characters 5-10
				break;
			} else if (!$this->matchSub($s, $offset)) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:115: characters 5-30
				$buf->add(mb_substr($s, $offset, null));
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:116: characters 5-10
				break;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:118: characters 4-25
			$p = $this->matchedPos();
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:119: characters 4-45
			$buf->add(mb_substr($s, $offset, $p->pos - $offset));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:120: characters 4-20
			$buf->add($f($this));
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:121: lines 121-127
			if ($p->len === 0) {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:122: characters 5-32
				$buf->add(mb_substr($s, $p->pos, 1));
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:123: characters 5-23
				$offset = $p->pos + 1;
			} else {
				#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:126: characters 5-27
				$offset = $p->pos + $p->len;
			}
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:111: lines 111-128
			if (!$this->global) {
				break;
			}
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:129: lines 129-131
		if (!$this->global && ($offset > 0) && ($offset < $length)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:130: characters 4-29
			$buf->add(mb_substr($s, $offset, null));
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:132: characters 3-24
		return $buf->b;
	}

	/**
	 * Tells if `this` regular expression matches String `s`.
	 * This method modifies the internal state.
	 * If `s` is `null`, the result is unspecified.
	 * 
	 * @param string $s
	 * 
	 * @return bool
	 */
	public function match ($s) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:44: characters 3-78
		$p = preg_match($this->re, $s, $this->matches, PREG_OFFSET_CAPTURE);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:46: lines 46-50
		if ($p > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:47: characters 4-12
			$this->last = $s;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:49: characters 4-15
			$this->last = null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:51: characters 3-15
		return $p > 0;
	}

	/**
	 * Tells if `this` regular expression matches a substring of String `s`.
	 * This function expects `pos` and `len` to describe a valid substring of
	 * `s`, or else the result is unspecified. To get more robust behavior,
	 * `this.match(s.substr(pos,len))` can be used instead.
	 * This method modifies the internal state.
	 * If `s` is null, the result is unspecified.
	 * 
	 * @param string $s
	 * @param int $pos
	 * @param int $len
	 * 
	 * @return bool
	 */
	public function matchSub ($s, $pos, $len = -1) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:81: lines 81-91
		if ($len === null) {
			$len = -1;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:82: characters 3-54
		$subject = ($len < 0 ? $s : mb_substr($s, 0, $pos + $len));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:83: characters 3-89
		$p = preg_match($this->re, $subject, $this->matches, PREG_OFFSET_CAPTURE, $pos);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:84: lines 84-89
		if ($p > 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:85: characters 4-12
			$this->last = $s;
		} else {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:88: characters 4-15
			$this->last = null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:90: characters 3-15
		return $p > 0;
	}

	/**
	 * Returns the matched sub-group `n` of `this` EReg.
	 * This method should only be called after `this.match` or
	 * `this.matchSub`, and then operates on the String of that operation.
	 * The index `n` corresponds to the n-th set of parentheses in the pattern
	 * of `this` EReg. If no such sub-group exists, the result is unspecified.
	 * If `n` equals 0, the whole matched substring is returned.
	 * 
	 * @param int $n
	 * 
	 * @return string
	 */
	public function matched ($n) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:55: characters 3-39
		if (($this->matches === null) || ($n < 0)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:55: characters 34-39
			throw new HxException("EReg::matched");
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:58: characters 3-46
		if ($n >= count($this->matches)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:58: characters 35-46
			return null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:59: characters 3-43
		if ($this->matches[$n][1] < 0) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:59: characters 32-43
			return null;
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:60: characters 3-23
		return $this->matches[$n][0];
	}

	/**
	 * Returns the position and length of the last matched substring, within
	 * the String which was last used as argument to `this.match` or
	 * `this.matchSub`.
	 * If the most recent call to `this.match` or `this.matchSub` did not
	 * match anything, the result is unspecified.
	 * If the global g modifier was in place for the matching, the position and
	 * length of the leftmost substring is returned.
	 * 
	 * @return object
	 */
	public function matchedPos () {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:76: characters 10-65
		$tmp = mb_strlen(substr($this->last, 0, $this->matches[0][1]));
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:75: lines 75-78
		return new HxAnon([
			"pos" => $tmp,
			"len" => mb_strlen($this->matches[0][0]),
		]);
	}

	/**
	 * Replaces the first substring of `s` which `this` EReg matches with `by`.
	 * If `this` EReg does not match any substring, the result is `s`.
	 * By default, this method replaces only the first matched substring. If
	 * the global g modifier is in place, all matched substrings are replaced.
	 * If `by` contains `$1` to `$9`, the digit corresponds to number of a
	 * matched sub-group and its value is used instead. If no such sub-group
	 * exists, the replacement is unspecified. The string `$$` becomes `$`.
	 * If `s` or `by` are null, the result is unspecified.
	 * 
	 * @param string $s
	 * @param string $by
	 * 
	 * @return string
	 */
	public function replace ($s, $by) {
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:99: characters 3-46
		$by = str_replace("\\\$", "\\\\\$", $by);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:100: characters 3-43
		$by = str_replace("\$\$", "\\\$", $by);
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:101: lines 101-103
		if (!preg_match("/\\\\([^?].*?\\\\)/", $this->re)) {
			#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:102: characters 4-57
			$by = preg_replace("/\\\$(\\d+)/", "\\\$\\1", $by);
		}
		#/Users/ut/haxe/versions/4.0.0-rc.2/std/php/_std/EReg.hx:104: characters 3-57
		return preg_replace($this->re, $by, $s, ($this->global ? -1 : 1));
	}
}

Boot::registerClass(EReg::class, 'EReg');