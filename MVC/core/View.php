<?php
class View{
    public string $title = '';

    public function renderView($view, $params = []){
        $viewContect =$this->renderOnlyView($view, $params);
        $layoutContent=$this->layoutContent();
        return str_replace('{{content}}', $viewContect, $layoutContent);
        
    }

    protected function layoutContent(){
        $layput = Application::$app->layout;
        if($controller){

            $layout = $controller->layout;
        }
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