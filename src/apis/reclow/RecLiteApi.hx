package apis.reclow;
import apis.reclow.Rec;
using Lambda;

using tink.CoreApi;
class RecLiteApi{

  // static var cnx:sys.db.Connection;
  var db:HaxeLow.HaxeLow;
   static var _instance:RecLiteApi;
    public function new(){
     
    }
    public static var instance(get,never):RecLiteApi;

    public static  function get_instance():RecLiteApi{
        if (_instance==null)
        _instance= new RecLiteApi();
        return _instance;
    }
    public function tst():String
    {
        
        // Get a collection of a class
		var recs = db.col(Rec);

		// rec is now an Array<Person>
		// that can be manipulated as you like
        var rec=new Rec();
        rec.title="oimo";
		recs.push(rec);
        

		// Save all collections to disk.
		// This is the only way to save, no automatic saving
		// takes place.
		db.save();

        return "'yo";
    }
    public function getAll():HaxeLowCol<Rec,String>{
        //return Rec.manager.all();
        var recs = db.idCol(Rec);
        return recs;
    }
    public function get(id:String):Null<Rec>{
        
        return getAll().idGet(id);
       // return recs.find(rec->(rec.id==id));
    }
    public function delete(id:String):Null<Rec>{
        var rec= getAll().idRemove(id);
        db.save();
        return rec;
    }
    

    public function saveRec(filename,title,desc,length,img,?date:Date):String{
        var datetime=(date!=null)? date : Date.now();
       
        var rec=new Rec();
        rec.title=title;
        rec.soundUrl=filename;
        rec.desc=desc;
        rec.length=length;
        rec.imageUrl=img;
        rec.date=datetime;
        var recs= db.idCol(Rec);
        
        recs.idInsert(rec);
        db.save();
        return rec.id;
    }

    public function update(id:String,props:{}):String{
         var col= getAll();
        var rec = col.idGet(id);
        col.idUpdate(rec.id, props);
        db.save();
        return rec.id;
    }

    public function replace(rec:Rec):String{
        var col= getAll();
        
        col.idReplace(rec);
        db.save();
        return rec.id;
        //return Promise.lift(rec.id);
    }
    public function list(){
        return db.backup();
    }

    // public function testit(){
    //     var rec=new Rec();
    //     rec.soundUrl="broummm";
    //     rec.desc="paglop";
    //     rec.insert();
    // }

    // static public function deleteTable(m:Class<sys.db.Object>){
    //     var manager= Reflect.field(m,"manager");
	// 	cnx.request('DROP TABLE ${manager.dbInfos().name}');
	// }
	// static public function createFile(){
	// 	sys.io.File.saveContent("./dabase.db","");
	// }
    // static function duplicateTable(m:Class<sys.db.Object>){
    //     var manager= Reflect.field(m,"manager");
    //     var tablename:String=manager.dbInfos().name;
    //     cnx.request('ALTER TABLE ${tablename} RENAME TO ${tablename}_old');
    //     //sys.db.TableCreate.
    // }

    // public static function deleteTable(){
    //     var manager= Reflect.field(m,"manager");
    //     var tablename:String=manager.dbInfos().name;
    //     cnx.request('DROP TABLE ${tablename}');
    // }

    public static function init(){
    var self=instance;
     self.db = new HaxeLow('./db.json');
    // cnx = Sqlite.open("dabase.db");
	// 	sys.db.Manager.cnx = cnx;
        
	return instance;
    // if ( !sys.db.TableCreate.exists(Rec.manager) )
    // {
    // sys.db.TableCreate.create(Rec.manager);
    // }
	// 	sys.db.Manager.initialize();
    //     return  RecLiteApi.instance;
     }
}
