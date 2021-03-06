<?php
/**
 * Generated by Haxe 4.0.0-rc.1+1fdd3d5
 * Haxe source file: /Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx
 */

namespace geojson\_LineString;

use \tink\json\_Representation\Representation_Impl_;
use \php\_Boot\HxAnon;
use \php\Boot;
use \php\_Boot\HxException;

final class LineString_Impl_ {
	/**
	 * @var float
	 */
	const TO_DEGREES = 57.2957795130785499;
	/**
	 * @var float
	 */
	const TO_RADIANS = 0.0174532925199444439;


	/**
	 * @param \Array_hx $line
	 * 
	 * @return object
	 */
	static public function _new ($line) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:20: character 2
		$this1 = new HxAnon([
			"type" => "LineString",
			"coordinates" => $line,
		]);
		return $this1;
	}

	/**
	 * @param \Array_hx $v
	 * 
	 * @return object
	 */
	static public function fromLine ($v) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:30: characters 56-73
		$this1 = new HxAnon([
			"type" => "LineString",
			"coordinates" => $v,
		]);
		return $this1;
	}

	/**
	 * @param object $rep
	 * 
	 * @return object
	 */
	static public function fromRepresentation ($rep) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:63: characters 10-19
		$_g = Representation_Impl_::get($rep);
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:64: lines 64-65
		if ($_g->type === "LineString") {
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:64: characters 39-52
			return $_g;
		} else {
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:65: characters 13-18
			throw new HxException("Invalid LineString");
		}
	}

	/**
	 * @param object $this
	 * 
	 * @return float
	 */
	static public function get_length ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:33: lines 33-42
		$dist = function ($c1, $c2) {
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:34: characters 4-40
			$lat1 = ($c1->arr[1] ?? null) * 0.0174532925199444439;
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:35: characters 4-40
			$lat2 = ($c2->arr[1] ?? null) * 0.0174532925199444439;
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:36: characters 4-27
			$dlat = $lat2 - $lat1;
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:37: characters 4-59
			$dlong = (($c2->arr[0] ?? null) - ($c1->arr[0] ?? null)) * 0.0174532925199444439;
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:38: lines 38-40
			$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlong / 2) * sin($dlong / 2);
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:41: characters 4-55
			return 2 * atan2(sqrt($a), sqrt(1 - $a));
		};
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:44: characters 3-18
		$total = 0.;
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:45: lines 45-46
		$_g = 0;
		$_g1 = $this1->coordinates->length - 1;
		while ($_g < $_g1) {
			$i = $_g++;
			#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:46: characters 4-41
			$total += $dist(($this1->coordinates->arr[$i] ?? null), ($this1->coordinates->arr[$i + 1] ?? null));
		}

		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:47: characters 3-15
		return $total;
	}

	/**
	 * @param object $this
	 * 
	 * @return \Array_hx
	 */
	static public function get_points ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:50: characters 31-54
		return $this1->coordinates;
	}

	/**
	 * @param object $this
	 * 
	 * @return string
	 */
	static public function get_type ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:52: characters 29-45
		return $this1->type;
	}

	/**
	 * @param object $this
	 * @param \Array_hx $v
	 * 
	 * @return \Array_hx
	 */
	static public function set_points ($this1, $v) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:51: characters 32-59
		return $this1->coordinates = $v;
	}

	/**
	 * @param object $this
	 * 
	 * @return object
	 */
	static public function toGeoJson ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:53: characters 44-60
		return $this1;
	}

	/**
	 * @param object $this
	 * 
	 * @return \Array_hx
	 */
	static public function toLine ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:28: characters 39-62
		return $this1->coordinates;
	}

	/**
	 * @param object $this
	 * 
	 * @return object
	 */
	static public function toRepresentation ($this1) {
		#/Users/ut/haxe/haxe_libraries/geojson/0.9.7/haxelib/src/geojson/LineString.hx:58: characters 10-49
		$this2 = $this1;
		return $this2;
	}
}

Boot::registerClass(LineString_Impl_::class, 'geojson._LineString.LineString_Impl_');
Boot::registerGetters('geojson\\_LineString\\LineString_Impl_', [
	'length' => true,
	'type' => true,
	'points' => true
]);
Boot::registerSetters('geojson\\_LineString\\LineString_Impl_', [
	'points' => true
]);
