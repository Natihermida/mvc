<?php
//controlador por defecto, se puede hacer aqui o en el constructor de la clase App
class App{
    protected $controller="HomeController";//controlador por defecto
    protected $method;//metodo por defecto
    protected $params=[];//parametros por defecto

    public function __construct(){
        $url=$this->parseUrl();//obtiene la url, esta variable es temporal porque esta en este metodo.
        if(file_exists('./app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        require_once './app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller ;//crea un objeto del controlador
        }
    
        private function parseUrl() {//obtiene la url
            if(isset($_GET['url'])) {//si se ha pasado una url
                return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }//devuelve un array con los elementos de la url
            return ['home'];
        }
    }

  





?>