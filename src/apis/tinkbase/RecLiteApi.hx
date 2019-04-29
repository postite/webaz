package apis.tinkbase;
import apis.tinkbase.Rec;
using tink.CoreApi;
import tink.sql.Types;



@:tables(Rec)
class Db extends tink.sql.Database {}


class RecLiteApi{

   
   static var _instance:RecLiteApi;
   var db:Db;
    public function new(){
    }
    public static var instance(get,never):RecLiteApi;

    public static  function get_instance():RecLiteApi{
        if (_instance==null)
        _instance= new RecLiteApi();
        return _instance;
    }
    public function getAll(?limit,?orderBy):Promise<Array<Rec>>{
        return cast db.Rec.all();
    }
    public function get(id:Int){
        return db.Rec
        //.select({title:Rec.title})
        .where(Rec.id == id)
        .first();
        //return Rec.manager.get(id);
    }
    public function saveRec(filename,title,desc,length,img,?date:Date):Promise<Id<Rec>>{
        //var datetime=(date!=null)? date : Date.now();
       
        var rec:Rec=cast {};
        
        rec.title=title;
        rec.soundUrl=filename;
        rec.desc=desc;
        rec.length=length;
        rec.imageUrl=img;
        //rec.date=datetime;
        
        return db.Rec.insertOne(rec);
        
        
    }
    public function tst():String
    {
        return "hellu";
    }
   

   public static function create():Promise<Noise>{
       init();
    return instance.db.Rec.create();
}
public static function init(){

var driver = new tink.sql.drivers.MySql({
  user: 'root',
  password: ''
});
instance.db=
  new Db('tinksqlrec', driver);

 
  return instance;

}

}
