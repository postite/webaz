package command;
#if jqueryextern
import js.jquery.Helper.*;
#end
@:keep
class MyCommand implements ICommand{

    public function execute<T>(?data:T){
   #if jqueryextern    
        trace("execute commando");
        J(onDom);
    #end
    }

    #if js

    function onDom(){

       // J("#logo").css({"width":'10px'});

    }

    #end

}