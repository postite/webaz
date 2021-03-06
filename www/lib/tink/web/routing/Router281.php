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
use \tink\_Stringly\Stringly_Impl_;
use \tink\json\Writer124;
use \tink\json\Writer122;
use \app\TinkLiteRoute;
use \tink\core\_Promise\Next_Impl_;
use \tink\json\Writer123;
use \tink\web\routing\_Response\Response_Impl_;
use \php\_Boot\HxAnon;

class Router281 {
	/**
	 * @var TinkLiteRoute
	 */
	public $target;


	/**
	 * @param TinkLiteRoute $target
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
	public function all ($ctx) {
		#src/app/TinkLiteRoute.hx:25: lines 25-28
		return Promise_Impl_::next($this->target->all(), function ($__data__)  use (&$ctx) {
			#src/app/TinkLiteRoute.hx:25: lines 25-28
			if (($ctx->accepts)("application/json")) {
				#src/app/TinkLiteRoute.hx:25: lines 25-28
				return Promise_Impl_::ofOutcome(Outcome::Success(Response_Impl_::textual(null, "application/json", (new Writer123())->write($__data__))));
			}
			#src/app/TinkLiteRoute.hx:25: lines 25-28
			return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(415, "Unsupported Media Type", new HxAnon([
				"fileName" => "TinkLiteRoute.hx",
				"lineNumber" => 25,
				"className" => "tink.web.routing.Router281",
				"methodName" => "all",
			]))));
		});
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function create ($ctx) {
		#src/app/TinkLiteRoute.hx:37: lines 37-41
		return Promise_Impl_::next($this->target->create(), function ($__data__) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:419: characters 36-76
			return Promise_Impl_::ofOutcome(Outcome::Success(Response_Impl_::empty()));
		});
	}


	/**
	 * @param Context $ctx
	 * @param string $id
	 * 
	 * @return FutureObject
	 */
	public function get ($ctx, $id = null) {
		#src/app/TinkLiteRoute.hx:17: lines 17-23
		$p = $this->target;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:338: lines 338-341
		$p1 = null;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:338: lines 338-341
		if ($id === null) {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:338: lines 338-341
			$p1 = null;
		} else {
			#src/app/TinkLiteRoute.hx:17: lines 17-23
			$_g = Stringly_Impl_::parse($id, function ($s) {
				#src/app/TinkLiteRoute.hx:17: lines 17-23
				return Stringly_Impl_::toInt($s);
			});
			#src/app/TinkLiteRoute.hx:17: lines 17-23
			switch ($_g->index) {
				case 0:
					#src/app/TinkLiteRoute.hx:17: lines 17-23
					$v = $_g->params[0];
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:338: lines 338-341
					$p1 = $v;
					break;
				case 1:
					#src/app/TinkLiteRoute.hx:17: lines 17-23
					$e = $_g->params[0];
					#src/app/TinkLiteRoute.hx:17: lines 17-23
					return Promise_Impl_::ofOutcome(Outcome::Failure($e));
					break;
			}
		}
		#src/app/TinkLiteRoute.hx:17: lines 17-23
		return Promise_Impl_::next($p->get($p1), function ($__data__)  use (&$ctx) {
			#src/app/TinkLiteRoute.hx:17: lines 17-23
			if (($ctx->accepts)("application/json")) {
				#src/app/TinkLiteRoute.hx:17: lines 17-23
				return Promise_Impl_::ofOutcome(Outcome::Success(Response_Impl_::textual(null, "application/json", (new Writer122())->write($__data__))));
			}
			#src/app/TinkLiteRoute.hx:17: lines 17-23
			return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(415, "Unsupported Media Type", new HxAnon([
				"fileName" => "TinkLiteRoute.hx",
				"lineNumber" => 17,
				"className" => "tink.web.routing.Router281",
				"methodName" => "get",
			]))));
		});
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function rec ($ctx) {
		#src/app/TinkLiteRoute.hx:31: lines 31-35
		return Promise_Impl_::next($this->target->rec(), function ($__data__)  use (&$ctx) {
			#src/app/TinkLiteRoute.hx:31: lines 31-35
			if (($ctx->accepts)("application/json")) {
				#src/app/TinkLiteRoute.hx:31: lines 31-35
				return Promise_Impl_::ofOutcome(Outcome::Success(Response_Impl_::textual(null, "application/json", (new Writer124())->write($__data__))));
			}
			#src/app/TinkLiteRoute.hx:31: lines 31-35
			return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(415, "Unsupported Media Type", new HxAnon([
				"fileName" => "TinkLiteRoute.hx",
				"lineNumber" => 31,
				"className" => "tink.web.routing.Router281",
				"methodName" => "rec",
			]))));
		});
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
		$_g = $l > 2;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
		$_g1 = $l > 1;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
		$_g2 = $l > 0;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
		$_g3 = $ctx->part(1);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
		$_g4 = $ctx->part(0);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
		$_g5 = $ctx->request->header->method;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
		if ($_g5 === "GET") {
			#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
			switch ($_g4) {
				case "all":
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g2 === true) {
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
						if ($_g1 === false) {
							#src/app/TinkLiteRoute.hx:24: characters 2-6
							return Promise_Impl_::ofSpecific($this->all($ctx));
						} else {
							#src/app/Server.hx:57: characters 12-47
							$this1 = $ctx->request->header->url;
							#src/app/Server.hx:57: characters 12-47
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this1->query === null ? $this1->path : ($this1->path??'null') . "?" . ($this1->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 57,
								"className" => "tink.web.routing.Router281",
								"methodName" => "route",
							]))));
						}
					} else {
						#src/app/Server.hx:57: characters 12-47
						$this11 = $ctx->request->header->url;
						#src/app/Server.hx:57: characters 12-47
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this11->query === null ? $this11->path : ($this11->path??'null') . "?" . ($this11->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 57,
							"className" => "tink.web.routing.Router281",
							"methodName" => "route",
						]))));
					}
					break;
				case "create":
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g2 === true) {
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
						if ($_g1 === false) {
							#src/app/TinkLiteRoute.hx:36: characters 2-6
							return Promise_Impl_::ofSpecific($this->create($ctx));
						} else {
							#src/app/Server.hx:57: characters 12-47
							$this12 = $ctx->request->header->url;
							#src/app/Server.hx:57: characters 12-47
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this12->query === null ? $this12->path : ($this12->path??'null') . "?" . ($this12->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 57,
								"className" => "tink.web.routing.Router281",
								"methodName" => "route",
							]))));
						}
					} else {
						#src/app/Server.hx:57: characters 12-47
						$this13 = $ctx->request->header->url;
						#src/app/Server.hx:57: characters 12-47
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this13->query === null ? $this13->path : ($this13->path??'null') . "?" . ($this13->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 57,
							"className" => "tink.web.routing.Router281",
							"methodName" => "route",
						]))));
					}
					break;
				case "get":
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g2 === true) {
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
						if ($_g1 === true) {
							#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
							if ($_g === false) {
								#src/app/TinkLiteRoute.hx:16: characters 7-16
								return Promise_Impl_::ofSpecific($this->get($ctx, $_g3));
							} else {
								#src/app/Server.hx:57: characters 12-47
								$this14 = $ctx->request->header->url;
								#src/app/Server.hx:57: characters 12-47
								return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this14->query === null ? $this14->path : ($this14->path??'null') . "?" . ($this14->query??'null')))??'null'), new HxAnon([
									"fileName" => "Server.hx",
									"lineNumber" => 57,
									"className" => "tink.web.routing.Router281",
									"methodName" => "route",
								]))));
							}
						} else {
							#src/app/Server.hx:57: characters 12-47
							$this15 = $ctx->request->header->url;
							#src/app/Server.hx:57: characters 12-47
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this15->query === null ? $this15->path : ($this15->path??'null') . "?" . ($this15->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 57,
								"className" => "tink.web.routing.Router281",
								"methodName" => "route",
							]))));
						}
					} else {
						#src/app/Server.hx:57: characters 12-47
						$this16 = $ctx->request->header->url;
						#src/app/Server.hx:57: characters 12-47
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this16->query === null ? $this16->path : ($this16->path??'null') . "?" . ($this16->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 57,
							"className" => "tink.web.routing.Router281",
							"methodName" => "route",
						]))));
					}
					break;
				case "rec":
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g2 === true) {
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
						if ($_g1 === false) {
							#src/app/TinkLiteRoute.hx:30: characters 2-6
							return Promise_Impl_::ofSpecific($this->rec($ctx));
						} else {
							#src/app/Server.hx:57: characters 12-47
							$this17 = $ctx->request->header->url;
							#src/app/Server.hx:57: characters 12-47
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this17->query === null ? $this17->path : ($this17->path??'null') . "?" . ($this17->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 57,
								"className" => "tink.web.routing.Router281",
								"methodName" => "route",
							]))));
						}
					} else {
						#src/app/Server.hx:57: characters 12-47
						$this18 = $ctx->request->header->url;
						#src/app/Server.hx:57: characters 12-47
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this18->query === null ? $this18->path : ($this18->path??'null') . "?" . ($this18->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 57,
							"className" => "tink.web.routing.Router281",
							"methodName" => "route",
						]))));
					}
					break;
				case "tst":
					#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
					if ($_g2 === true) {
						#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:143: characters 22-31
						if ($_g1 === false) {
							#src/app/TinkLiteRoute.hx:9: characters 2-6
							return Promise_Impl_::ofSpecific($this->tst($ctx));
						} else {
							#src/app/Server.hx:57: characters 12-47
							$this19 = $ctx->request->header->url;
							#src/app/Server.hx:57: characters 12-47
							return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this19->query === null ? $this19->path : ($this19->path??'null') . "?" . ($this19->query??'null')))??'null'), new HxAnon([
								"fileName" => "Server.hx",
								"lineNumber" => 57,
								"className" => "tink.web.routing.Router281",
								"methodName" => "route",
							]))));
						}
					} else {
						#src/app/Server.hx:57: characters 12-47
						$this110 = $ctx->request->header->url;
						#src/app/Server.hx:57: characters 12-47
						return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this110->query === null ? $this110->path : ($this110->path??'null') . "?" . ($this110->query??'null')))??'null'), new HxAnon([
							"fileName" => "Server.hx",
							"lineNumber" => 57,
							"className" => "tink.web.routing.Router281",
							"methodName" => "route",
						]))));
					}
					break;
				default:
					#src/app/Server.hx:57: characters 12-47
					$this111 = $ctx->request->header->url;
					#src/app/Server.hx:57: characters 12-47
					return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this111->query === null ? $this111->path : ($this111->path??'null') . "?" . ($this111->query??'null')))??'null'), new HxAnon([
						"fileName" => "Server.hx",
						"lineNumber" => 57,
						"className" => "tink.web.routing.Router281",
						"methodName" => "route",
					]))));
					break;
			}
		} else {
			#src/app/Server.hx:57: characters 12-47
			$this112 = $ctx->request->header->url;
			#src/app/Server.hx:57: characters 12-47
			return Promise_Impl_::ofOutcome(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this112->query === null ? $this112->path : ($this112->path??'null') . "?" . ($this112->query??'null')))??'null'), new HxAnon([
				"fileName" => "Server.hx",
				"lineNumber" => 57,
				"className" => "tink.web.routing.Router281",
				"methodName" => "route",
			]))));
		}
	}


	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function tst ($ctx) {
		#src/app/TinkLiteRoute.hx:10: lines 10-15
		return Promise_Impl_::next(Promise_Impl_::ofOutcome(Outcome::Success($this->target->tst())), Next_Impl_::ofSafeSync(function ($v) {
			#src/app/TinkLiteRoute.hx:10: lines 10-15
			return Response_Impl_::ofString($v);
		}));
	}
}


Boot::registerClass(Router281::class, 'tink.web.routing.Router281');
