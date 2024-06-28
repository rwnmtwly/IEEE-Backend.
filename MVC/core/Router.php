<?php
namespace app\core;
class Router{
    /**
     * @param \app\core\Request $request
     * 
     * @param \app\core\Response $response
     */
     

    public Request $request;
    public Response $response;
    protected array $routes = [];
    

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    
    
    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }


    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }



    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path]?? false;
        if($callback === false){
            $this->response->setStatusCode(404);
            return $this->renderView("_404");
        }
        if(is_string($callback)){
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback = Application::$app->controller;
        }
        return call_user_func($callback, $this->request);
        // echo '<pre>';
        // var_dump($callback);
        // echo '</pre>';
        // exit;
    }
    public function renderView($view, $params = []){
        $layoutContent=$this->layoutContent();
        $viewContect =$this->renderOnlyView($view, $params);
        return str_replace('{{content}}', $viewContect, $layoutContent);
        
    }

    protected function layoutContent(){
        $layout = Application::$app->controller->layout;
        ob_start();
        include_once Application::$ROOT_DIR."/../views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view,$params){
        foreach ($param as $key => $value){
            $$key = $value;
        }
        echo '<pre>';
        var_dump($params);
        echo '</pre>';
        exit;
        ob_start();
        include_once Application::$ROOT_DIR."/../views/$view.php";
        return ob_get_clean();
    }

    public function renderContent($viewContent){
        $layoutContent=$this->layoutContent();
        return str_replace('{{content}}', $viewContect, $layoutContent);
        
    }

}
?>