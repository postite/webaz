package app;

import apis.FileApi;
import tink.http.containers.*;
import tink.http.Response;
import tink.web.routing.*;
import tink.http.middleware.Static;
import tink.http.StructuredBody;

using tink.CoreApi;

import tink.http.Response;
import sys.io.File;
import tink.web.forms.FormFile;
// import api.IRoot;
import sys.FileSystem;

using tink.io.Source;
using wire.Actor;
import command.*;

using wire.Tools;

class Server {
	#if server
	static function main() {

		#if php
		var container = PhpContainer.inst;
		#else

		var container = new NodeContainer(8080);
		#end
		var router = new Router<Root>(new Root());
		var handler:tink.http.Handler = function(req) {
			return router.route(Context.ofRequest(req)).recover(OutgoingResponse.reportError);
		}

		handler = handler.applyMiddleware(new Static('./statics', '/'));
		container.run(handler);

	}
	#end
}

class Root implements app.IRemoteRoot{

	public function new() {
		Actor.defaultLayout = new views.Layout();
		Actor.defaultLayout.footer  = views.Footer.render();
		var nav = [{
			url: "/rss",
			title: "abonne toi en afrique ",
			description: "le flux nrss du podcast"
		}];
		Actor.defaultLayout.menu = views.Menu.render(nav);
		Actor.defaultLayout.header = views.Header.render();
	}
	@:sub('/sqlit/')
	#if php
    public var whatever = new SQLiteRoute();
    //public var whatever = new TinkLiteRoute();
	#else
	public var whatever = new LowRoute();
	#end
	@:get('/')
	public function hello():tink.template.Html {
	//	Layout.header = views.HeaderHome.render();
		return views.Home.render().withLayout().addAction(MyCommand).addAction(MyCommand2,"bingo").render();
	}
	@:get('/rss')
	public function rss():tink.template.Html {
	//	Layout.header = views.HeaderHome.render();
		trace("rss");
		return views.Home.render().withLayout().addAction(MyCommand).addAction(MyCommand2,"bongo").render();
	}

	 @:post('/uploadFile')
	 public function uploadFile(body:{file:tink.web.forms.FormFile}){
		 var fileapi=apis.FileApi;
		 return FileApi.saveImg(body.file);
	 }

	// @:get("/db")
	// public function db(){
	// 	sys.db.Admin.handler();
	// }




}