package apis;
import mimo.Group;

using tink.CoreApi;

#if server
import tink.web.forms.FormFile;
using tink.io.Source;
import mime.Mime;
using Mots;
#end
import tink.http.StructuredBody.UploadedFile;
class FileApi{
#if server
		//max file size by default =10MB
    public static function saveImg(img:Null<FormFile>,?accept:Group,?maxSize:Int=10000000):Promise<{name:String}> {
		if (img != null){
			var cleanName = img.fileName.cleanFile();
			if(!checkMime(img.mimeType,accept)) return Promise.lift(new Error("format not acceptid:"+Mime.extension(img.mimeType) + "paf"));
			if(!checkSize(img.size,maxSize)) return Promise.lift(new Error(img.size +" is too big"));
		return 	img.saveTo("./statics/" + cleanName)
			.next(noise->ImageApi.getResizedImage('statics/${cleanName}'))
			.next(path->{name:path});
		}else{
			return Promise.lift({name: null});
		}
	}


	public static function saveFile(img:Null<FormFile>):Promise<Noise> {
		if (img != null){
			var cleanName = img.fileName.cleanFile();
		return 	img.saveTo("./statics/" + cleanName);
		
		}else{
			return Promise.lift({name: null});
		}
	}



	//todo check Mime 
	public static function saveSound(sound:Null<FormFile>):Promise<{name:String, length:Int}> {
		if (sound != null)
			return sound.read().all().next(function(chunk) {
				var cleanSoundName = sound.fileName.cleanFile();
				sys.io.File.saveBytes("./statics/" + cleanSoundName, chunk.toBytes());
				return {name: cleanSoundName, length: chunk.length};
			});
		else
			return Promise.lift({name: null, length: null});
	}
#end
	public static function checkSize(size:Int,max:Int):Bool{
		//trace('size=$size');
		if( size < max) return true;
		return false;
	}
	public static function checkMime(_mime:String,?accept:Group):Bool{
		if (accept==null) accept=IMGS;
		var ext:mimo.Group.Extension=mime.Mime.extension(_mime);
		
		if((ext:ExtGroup).toGroup() == accept)
		return true;
		return false;
	}



}