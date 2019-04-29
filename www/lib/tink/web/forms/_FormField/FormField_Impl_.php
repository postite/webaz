<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx
 */

namespace tink\web\forms\_FormField;

use \php\Boot;
use \tink\_Stringly\Stringly_Impl_;
use \php\_Boot\HxException;
use \tink\http\BodyPart;

final class FormField_Impl_ {
	/**
	 * @param BodyPart $this
	 * 
	 * @return object
	 */
	static public function getFile ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:24: lines 24-27
		$__hx__switch = ($this1->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:25: characters 22-27
			throw new HxException("expected file but got plain value");
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:26: characters 17-18
			$u = $this1->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:26: characters 37-52
			return $u;
		}
	}

	/**
	 * @param BodyPart $this
	 * 
	 * @return string
	 */
	static public function getValue ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:9: lines 9-12
		$__hx__switch = ($this1->index);
		if ($__hx__switch === 0) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:10: characters 18-19
			$v = $this1->params[0];
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:10: characters 22-23
			return $v;
		} else if ($__hx__switch === 1) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:11: characters 21-26
			throw new HxException("expected plain value but received file");
		}
	}

	/**
	 * @param BodyPart $this
	 * 
	 * @return float
	 */
	static public function toFloat ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:15: characters 5-22
		return Stringly_Impl_::toFloat(FormField_Impl_::getValue($this1));
	}

	/**
	 * @param BodyPart $this
	 * 
	 * @return int
	 */
	static public function toInt ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:18: characters 5-22
		return Stringly_Impl_::toInt(FormField_Impl_::getValue($this1));
	}

	/**
	 * @param BodyPart $this
	 * 
	 * @return string
	 */
	static public function toString ($this1) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/forms/FormField.hx:21: characters 5-22
		return FormField_Impl_::getValue($this1);
	}
}

Boot::registerClass(FormField_Impl_::class, 'tink.web.forms._FormField.FormField_Impl_');