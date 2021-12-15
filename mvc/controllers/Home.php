<?php
    class Home extends Controller{
        function xinchao(){
            //model
            $model = $this->model("y");

            //view
            $this->view("1", [
                "SH"=>$model->hi()
            ]);
        }
    }
?>