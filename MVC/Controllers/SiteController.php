<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;


class SiteController extends controller{

    public function home(){
        $params = [
            'name' => "Rawan"
        ];
        return $this->render('home', $params);
    }

    public function contact(){
       
        return $this->render('contact');
    }

    public function handleContact(Request $request){
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}
?>