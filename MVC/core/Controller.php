<?php
class Controller{

    /**
     * @var \app\core\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];
    public string $layout = 'main';
    public string $action = '';
    public function setLayout($layout){
        $this->layput = $layout;
    }

    public function render($view, $params = []){
        return application::$app->view->renderView($view, $params);
    }


    public function registerMiddleware(BaseMiddleware $middleware){
        $this->middlewares[] = $middleware;

    }


    public function getMiddleware():array{
        return $this->middlewares;
    }
}