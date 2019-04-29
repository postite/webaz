<?php
/**
 * Generated by Haxe 4.0.0 (git build development @ 3018ab1)
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx
 */

namespace tink\web\routing;

use \tink\core\_Promise\Promise_Impl_;
use \tink\core\Outcome;
use \php\Boot;
use \tink\core\TypedError;
use \tink\core\_Future\FutureObject;
use \tink\core\_Promise\Next_Impl_;
use \app\Root;
use \tink\web\routing\_Response\Response_Impl_;
use \php\_Boot\HxAnon;

class Router256 {
	/**
	 * @var Root
	 */
	public $target;


	/**
	 * @param Root $target
	 * 
	 * @return void
	 */
	public function __construct ($target) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:218: characters 11-31
		$this->target = $target;
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function hello ($ctx) {
		#src/app/Server.hx:62: lines 62-65
		return Promise_Impl_::next(Promise_Impl_::ofOutcome(Outcome::Success($this->target->hello())), Next_Impl_::ofSafeSync(function ($v) {
			#src/app/Server.hx:62: lines 62-65
			return Response_Impl_::ofHtml($v);
		}));
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function route ($ctx) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:222: characters 11-34
		$l = $ctx->parts->length - $ctx->depth;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
		$_g = $l > 1;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
		$_g1 = $l > 0;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
		$_g2 = $ctx->part(0);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
		$_g3 = $ctx->request->header->method;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
		switch ($_g2) {
			case "rss":
				#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
				if ($_g3 === "GET") {
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					switch ($_g1) {
						case false:
							#src/app/Server.hx:61: characters 8-11
							return Promise_Impl_::ofSpecific($this->hello($ctx));
							break;
						case true:
							#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
							if ($_g === false) {
								#src/app/Server.hx:66: characters 8-14
								return Promise_Impl_::ofSpecific($this->rss($ctx));
							} else {
								#src/app/Server.hx:31: characters 16-44
								$this1 = $ctx->request->header->url;
								#src/app/Server.hx:31: characters 16-44
								return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this1->query === null ? $this1->path : ($this1->path??'null') . "?" . ($this1->query??'null')))??'null'), new HxAnon([
									"fileName" => "Server.hx",
									"lineNumber" => 31,
									"className" => "tink.web.routing.Router256",
									"methodName" => "route",
								]))));
							}
							break;
					}
				} else {
					#src/app/Server.hx:31: characters 16-44
					$this11 = $ctx->request->header->url;
					#src/app/Server.hx:31: characters 16-44
					return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this11->query === null ? $this11->path : ($this11->path??'null') . "?" . ($this11->query??'null')))??'null'), new HxAnon([
						"fileName" => "Server.hx",
						"lineNumber" => 31,
						"className" => "tink.web.routing.Router256",
						"methodName" => "route",
					]))));
				}
				break;
			case "sqlit":
				#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
				switch ($_g1) {
					case false:
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
						if ($_g3 === "GET") {
							#src/app/Server.hx:61: characters 8-11
							return Promise_Impl_::ofSpecific($this->hello($ctx));
						} else {
							#src/app/Server.hx:31: characters 16-44
							$this12 = $ctx->request->header->url;
							#src/app/Server.hx:31: characters 16-44
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this12->query === null ? $this12->path : ($this12->path??'null') . "?" . ($this12->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 31,
								"className" => "tink.web.routing.Router256",
								"methodName" => "route",
							]))));
						}
						break;
					case true:
						#src/app/Server.hx:54: characters 8-17
						return $this->whatever($ctx, 1);
						break;
				}
				break;
			default:
				#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
				if ($_g3 === "GET") {
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g1 === false) {
						#src/app/Server.hx:61: characters 8-11
						return Promise_Impl_::ofSpecific($this->hello($ctx));
					} else {
						#src/app/Server.hx:31: characters 16-44
						$this13 = $ctx->request->header->url;
						#src/app/Server.hx:31: characters 16-44
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this13->query === null ? $this13->path : ($this13->path??'null') . "?" . ($this13->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 31,
							"className" => "tink.web.routing.Router256",
							"methodName" => "route",
						]))));
					}
				} else {
					#src/app/Server.hx:31: characters 16-44
					$this14 = $ctx->request->header->url;
					#src/app/Server.hx:31: characters 16-44
					return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this14->query === null ? $this14->path : ($this14->path??'null') . "?" . ($this14->query??'null')))??'null'), new HxAnon([
						"fileName" => "Server.hx",
						"lineNumber" => 31,
						"className" => "tink.web.routing.Router256",
						"methodName" => "route",
					]))));
				}
				break;
		}
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function rss ($ctx) {
		#src/app/Server.hx:67: lines 67-71
		return Promise_Impl_::next(Promise_Impl_::ofOutcome(Outcome::Success($this->target->rss())), Next_Impl_::ofSafeSync(function ($v) {
			#src/app/Server.hx:67: lines 67-71
			return Response_Impl_::ofHtml($v);
		}));
	}


	/**
	 * @param Context $ctx
	 * @param int $__depth__
	 * 
	 * @return FutureObject
	 */
	public function whatever ($ctx, $__depth__) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:368: characters 13-42
		$ctx1 = $ctx->sub($__depth__);
		#src/app/Server.hx:57: characters 12-47
		return Promise_Impl_::next(Promise_Impl_::ofOutcome(Outcome::Success($this->target->whatever)), function ($__target__)  use (&$ctx1) {
			#src/app/Server.hx:57: characters 12-47
			return (new Router257($__target__))->route($ctx1);
		});
	}
}


Boot::registerClass(Router256::class, 'tink.web.routing.Router256');
