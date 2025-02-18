<?php
namespace Formacom\controllers;
use Formacom\core\Controller;
use Formacom\models\Film;

class FilmController extends Controller{
    public function index(...$params){//metodo por defecto los puntos indican que puedo meter + de un parametro
       $films=Film::all();
       $this->view("actor_list",$films);
    
        
    }

public function new(...$params){
    if(isset($_POST["title"])){
        var_dump($_POST);
        exit();
    }else{
        $this->view("new_film");
    }
}

public function json(){
    $films=Film::where("title")->get();
    $datos=["mensaje"=>"Listado de peliculas",
    "listado"=>$films];

    $jason=json_encode($datos);
    header("Content-Type: application/json");
    echo $jason;
    exit();
    
}

}


?>