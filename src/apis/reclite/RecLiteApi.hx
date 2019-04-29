package apis.reclite;
import apis.reclite.Rec;
import sys.db.Sqlite;

using tink.CoreApi;
class RecLiteApi{

   static var cnx:sys.db.Connection;
   static var _instance:RecLiteApi;
    public function new(){
      
     // deleteTable(Rec);
      //createFile();
     // init();
    }
    public static var instance(get,never):RecLiteApi;

    public static  function get_instance():RecLiteApi{
        if (_instance==null)
        _instance= new RecLiteApi();
        return _instance;
    }
    public function tst():String
    {
        return "hellu";
    }
    public function getAll():List<Rec>{
        return Rec.manager.all();
    }
    public function get(id:Int):Rec{
        return Rec.manager.get(id);
    }
    public function delete(id:Int){
        Rec.manager.get(id).delete();
    }
    

    public function saveRec(filename,title,desc,length,img):Promise<Int>{
        var rec=new Rec();
        rec.title=title;
        rec.soundUrl=filename;
        rec.desc=desc;
        rec.length=length;
        rec.imageUrl=img;
        rec.insert();
        return Promise.lift(rec.id);
    }

    public function updateRec(id:Int,filename:Null<String>,title:String,desc:String,length:Int,img:String):Promise<Int>{
        var rec=Rec.manager.get(id);
        rec.title=title;
        rec.desc=desc;
        if( filename !=null){
        rec.soundUrl=filename;
        rec.length=length;
        }
        if( img!=null)
        rec.imageUrl=img;
        
        rec.update();
        return Promise.lift(rec.id);
    }

    public function testit(){
        var rec=new Rec();
        rec.soundUrl="broummm";
        rec.desc="paglop";
        rec.insert();
    }

    static public function deleteTable(m:Class<sys.db.Object>){
        var manager= Reflect.field(m,"manager");
		cnx.request('DROP TABLE ${manager.dbInfos().name}');
	}
	static public function createFile(){
		sys.io.File.saveContent("./dabase.db","");
	}
    static function duplicateTable(m:Class<sys.db.Object>){
        var manager= Reflect.field(m,"manager");
        var tablename:String=manager.dbInfos().name;
        cnx.request('ALTER TABLE ${tablename} RENAME TO ${tablename}_old');
        //sys.db.TableCreate.
    }

    // public static function deleteTable(){
    //     var manager= Reflect.field(m,"manager");
    //     var tablename:String=manager.dbInfos().name;
    //     cnx.request('DROP TABLE ${tablename}');
    // }

    public static function init(){
        
    cnx = Sqlite.open("dabase.db");
		sys.db.Manager.cnx = cnx;
        
	
    if ( !sys.db.TableCreate.exists(Rec.manager) )
    {
    sys.db.TableCreate.create(Rec.manager);
    }
		sys.db.Manager.initialize();
        return  RecLiteApi.instance;
    }

}
