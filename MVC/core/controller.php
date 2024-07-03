<?php
class Controller{

    /**
     * @var
     */
    public array $middlewares = [];
    public string $layout = 'main';
    public function setLayout($layout){
        $this->layput = $layout;
    }

    public function render($view, $params = []){
        return application::$app->router->renderView($view, $params);
    }


    public function registerMiddleWare(){
        
    }
}