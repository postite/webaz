<?php
/**
 * Generated by Haxe 4.0.0-rc.2+77068e1
 * Haxe source file: /Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx
 */

namespace tink\web\routing;

use \php\_Boot\HxAnon;
use \tink\core\_Future\SyncFuture;
use \php\Boot;
use \app\SQLiteRoute;
use \tink\core\TypedError;
use \tink\core\Outcome;
use \tink\core\_Lazy\LazyConst;
use \tink\core\_Promise\Next_Impl_;
use \tink\web\routing\_Response\Response_Impl_;
use \tink\core\_Promise\Promise_Impl_;
use \tink\core\_Future\FutureObject;

class Router1 {
	/**
	 * @var SQLiteRoute
	 */
	public $target;

	/**
	 * @param SQLiteRoute $target
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
	public function route ($ctx) {
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:222: characters 11-34
		$l = $ctx->parts->length - $ctx->depth;
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:140: characters 22-41
		$_g2 = $ctx->part(0);
		#/Users/ut/haxe/haxe_libraries/tink_web/0.1.4/github/c4323c7b0c2f0b44e696eea51c9bfdff41716880/src/tink/web/macros/Routing.hx:137: characters 22-39
		if (($ctx->request->header->method === "GET") && (($_g2 === "tst") && ((($l > 0) === true) && (($l > 1) === false)))) {
			#src/app/SQLiteRoute.hx:13: characters 1-6
			return Promise_Impl_::ofSpecific($this->tst($ctx));
		} else {
			#(unknown)
			$this1 = $ctx->request->header->url;
			return new SyncFuture(new LazyConst(Outcome::Failure(new TypedError(404, "Not Found: [" . ($ctx->request->header->method??'null') . "] " . ((($this1->query === null ? $this1->path : ($this1->path??'null') . "?" . ($this1->query??'null')))??'null'), new HxAnon([
				"fileName" => "?",
				"lineNumber" => 1,
				"className" => "tink.web.routing.Router1",
				"methodName" => "route",
			])))));
		}
	}

	/**
	 * @param Context $ctx
	 * 
	 * @return FutureObject
	 */
	public function tst ($ctx) {
		#src/app/SQLiteRoute.hx:14: lines 14-19
		return Promise_Impl_::next(new SyncFuture(new LazyConst(Outcome::Success($this->target->tst()))), Next_Impl_::ofSafeSync(function ($v) {
			return Response_Impl_::ofString($v);
		}));
	}
}

Boot::registerClass(Router1::class, 'tink.web.routing.Router1');
