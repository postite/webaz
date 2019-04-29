package app;
import apis.tinklite.RecLiteApi;
class TinkLiteRoute{
    var recApi:RecLiteApi;
public function new(){
   // recApi=RecLiteApi.instance;
}

@:get
public function tst(){

    recApi=RecLiteApi.init();

    return recApi.tst();
}
@:get('get/$id')
	public function get(?id:Int) {
		recApi = RecLiteApi.init();

		//return 'popop $id';
		return recApi.get(id);
		
	}
@:get
	public function all() {
		recApi = RecLiteApi.init();
		return recApi.getAll();
	}

@:get
	public function rec() {
		recApi = RecLiteApi.init();
		return recApi.saveRec("philo.mp3", "naturelle", "terme archaique", 0, "ceci.jpg");
		
	}
@:get
public function create()
{
    //recApi=RecLiteApi.init();
   return  RecLiteApi.create();
}




}