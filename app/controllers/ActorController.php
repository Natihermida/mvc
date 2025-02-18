<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
use Formacom\models\Actor;

class ActorController extends Controller{
    public function index(...$params){//metodo por defecto los puntos indican que puedo meter + de un parametro
       $actores=Actor::all();
       $this->view("actor_list",$actores);
    
        
        //echo "Hola desde Index de ActorController";
    }

public function new(...$params){
    if(isset($_POST["first_name"])){
        var_dump($_POST);
        exit();
    }else{
        $this->view("new_actor");
    }
}


}


?>