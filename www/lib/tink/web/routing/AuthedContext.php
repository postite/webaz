<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx
 */

namespace tink\web\routing;

use \tink\http\IncomingRequest;
use \tink\core\_Lazy\LazyObject;
use \php\Boot;
use \haxe\ds\StringMap;

class AuthedContext extends Context {
	/**
	 * @var LazyObject
	 */
	public $session;
	/**
	 * @var LazyObject
	 */
	public $user;

	/**
	 * @param Context $parent
	 * @param \Closure $accepts
	 * @param IncomingRequest $request
	 * @param int $depth
	 * @param \Array_hx $parts
	 * @param StringMap $params
	 * @param LazyObject $session
	 * @param LazyObject $user
	 * 
	 * @return void
	 */
	public function __construct ($parent, $accepts, $request, $depth, $parts, $params, $session, $user = null) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx:179: characters 5-27
		$this->session = $session;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx:180: lines 180-184
		$this->user = ($user === null ? $session->map(function ($s) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx:182: characters 34-52
			return $s->getUser();
		}) : $user);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx:186: characters 5-58
		parent::__construct($parent, $accepts, $request, $depth, $parts, $params);
	}

	/**
	 * @param int $descend
	 * 
	 * @return AuthedContext
	 */
	public function sub ($descend) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/routing/Context.hx:190: characters 5-100
		return new AuthedContext($this, $this->accepts, $this->request, $this->depth + $descend, $this->parts, $this->params, $this->session, $this->user);
	}
}

Boot::registerClass(AuthedContext::class, 'tink.web.routing.AuthedContext');