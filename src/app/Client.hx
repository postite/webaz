package app;
import app.IRemoteRoot;
using tink.CoreApi;
import app.IRemoteRoot;
import tink.web.proxy.Remote;
import tink.http.clients.JsClient;
import tink.url.Host;
import command.*;
class Client {

	var r:Remote<IRemoteRoot>;
	function new(){
		trace( "hello" + Date.now());
		 r = new Remote<IRemoteRoot>(
			new JsClient(),
			new RemoteEndpoint(new Host('zecastpod.local')));
		execute();
	}


	static function main(){
		CompileTime.importPackage("command");
		new Client();

	}

	public function execute(){
		
		var t:Map<ActionCommand,Dynamic>= haxe.Unserializer.run(untyped actions);
		if(t==null)return;
		for( a in t.keys()){
			Type.createInstance(a,[]).execute(t.get(a));
		}
	}

}



