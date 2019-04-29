package app;

import apis.reclow.RecLiteApi;

using haxe.Json;
using Date;

class LowRoute {
	var recApi:RecLiteApi;

	public function new() {
		// recApi=RecLiteApi.instance;
	}

	@:get
	public function tst() {
		recApi = RecLiteApi.init();
		return recApi.tst();
	}

	@:get
	public function all() {
		recApi = RecLiteApi.init();
		return recApi.getAll().stringify();
	}

	@:get
	public function get() {
		recApi = RecLiteApi.init();

		var deleted = recApi.delete("ebac8ce2-f227-4e2b-9e36-f0089d8fa4de");
		if (deleted != null)
			return recApi.get("eb7794f8-f57b-4d9c-8795-a06a72a6b0e1").title;
		return 'heueu';
	}

	@:get
	public function rec() {
		recApi = RecLiteApi.init();
		var recId = recApi.saveRec("zouom.mp3", "zouma", "c'est bo", null, "pop.jpg");
		return recApi.get(recId).date.toString();
	}

	@:get
	public function upd() {
		recApi = RecLiteApi.init();
		var rec = recApi.getAll()[0];
		recApi.update(rec.id, {title: "bazoom"});
		return rec.stringify();
	}

	@:get
	public function repl() {
		recApi = RecLiteApi.init();
		var rec = recApi.getAll()[0];
		rec.date = datetime.DateTime.now();
		recApi.replace(rec);
		return rec.stringify();
	}

	@:get
	public function clean() {
		recApi = RecLiteApi.init();
		var recs = recApi.getAll();
		var fil = recs.filter(rc -> (rc.date == null || !Std.is(rc.date, Float)));
		for (a in fil)
			recApi.delete(a.id);

		return recApi.list();
	}
}
