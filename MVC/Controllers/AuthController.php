<?php
class AuthController extends controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request){
        if($request->isPost()){
            return 'Handle submitted data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }

}
?>