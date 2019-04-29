package apis.tinkbase;

import tink.sql.Types;

 
typedef Rec = {

@:autoIncrement @:primary 
var id:Id<Rec>;
 var soundUrl:VarChar<255>;
 var imageUrl:Null<VarChar<255>>;
 var length:SmallInt;
 var desc:Null<Text>;
 var title:VarChar<255>;

	//typedef DateTime = Date;

	//@:unique email:VarChar<255>,
	//password:VarChar<255>,
}


// class Rec extends sys.db.Object {
	
// 	public var id:sys.db.Types.SId;
// 	public var soundUrl:sys.db.Types.SString<256>;
// 	public var imageUrl:Null<sys.db.Types.SString<256>>;
// 	public var length:sys.db.Types.SInt;
// 	public var desc:sys.db.Types.SSmallText;
// 	public var title:sys.db.Types.SString<256>;

// }