<?php

namespace app\core;

class Application{
    

    public static string $ROOT_DIR;

    public string $layout = 'main';
    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Database $db;
    public static Application $app;
    public ?Controller $controller = null;
    public ?DbModel $user;  //"?" means user might me null (e.g. browsing as a guest)

    

    public function __construct($rootPath, array $config){
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR=$rootPath;
        self::$app =$this;
        $this->request = new Request();  
        $this->router = new Router($this->request, $this->response);
        $this->response = new Response();
        $this->session = new Session();
        $this->db = new Database($config['db']);
        $primaryValue = $this->session->get('user');
        if($primaryValue){
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey=>$primaryValue]);
        }
        else{
            $this->user = null;
        }
    }
    public function run(){
        echo $this->router->resolve();
    }

    public function getController(){
        return $this->controller;
    }


    public function setController(Controller $controller){
        return $this->controller = $controller;
    }


    public function login(DbModel $user){
        $this->user=$user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }


    public function logout(){
        $this->user = null;
        $this->session->remove('user');
    }

    public static function isGuest(){
        return !self::$app->user;
    }


}
?>