<?php
    class App{
        protected $controller = "Home";
        protected $action = "xinchao";
        protected $params = [];

        function __construct(){
		    $arr = $this -> UrlProcess();
            //Xu li controller
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            } else {
                $this->controller = "x";
            }

            require_once "./mvc/controllers/" . $this->controller . ".php";
            $this->controller =  new $this->controller;

            //Xu li action
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            
            //Xu li params
            $this->params = $arr?array_values($arr):[];
            
            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function UrlProcess() {
            //Home/SayHi/1/2/3
            if (isset($_GET["url"])) {
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>