<?php
require_once("./core/Controller.php");
class ActorControlle extends Controller{
    public function index(){
        echo "Hola desde Index de ActorController";
    }

    public function new(){
        echo "Hola desde New de ActorController";
    }

}


?>