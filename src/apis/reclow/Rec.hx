package apis.reclow;


class Rec  {

	public function new(){}
	
	public var id:String=HaxeLow.uuid();
	public var soundUrl:String;
	public var imageUrl:String;
	public var length:Int;
	public var desc:String;
	public var title:String;
	public var date:datetime.DateTime;

}