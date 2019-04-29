package app;

using tink.CoreApi;

import command.*;
class Client {

	function new(){
		trace( "hello cli" + Date.now());
		execute();
	}


	static function main(){
		CompileTime.importPackage("command");
		new Client();

	}

	public function execute(){
		
		var t:Map<ActionCommand,Dynamic>= haxe.Unserializer.run(untyped actions);
		for( a in t.keys()){
			Type.createInstance(a,[]).execute(t.get(a));
		}
	}

}



