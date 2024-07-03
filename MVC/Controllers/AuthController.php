<?php
namespace app\Controllers;


use app\core\Controller;
use app\core\Request;
use app\models\User;


class AuthController extends controller{


    public function __construct(){
        //this is to restrict access to the profile
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response){
        $loginForm = new LoginForm();
        if($request->isPost()){
            $loginForm->loadData($request->getBody());
            if($loginForm->validate()&& $loginForm->login()){
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login',[
            'model'=>$loginForm
        ]);
    }

    public function register(Request $request){
        
        if($request->isPost()){
            $user = new User();
            $user->loadData($request->getBody());

            if($user->validate() &&$user->register()){
                Application::$app->session->getFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
            
            return $this->render('register', [
                'model'=>$user
            ]);

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model'=>$user
        ]);

        return empty($this->errors);
    }


    public function logout(Request $request, Response $response){
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile(){
        return $this->render('profile');
    }

}
?>