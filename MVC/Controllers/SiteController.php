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

    public function contact(Resquest $request, Response $response){

        $contact = new ContactForm();
        if($request->is_post()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('Success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
       
        return $this->render('contact', [
            'model'=>$contact
        ]);
    }

}
?>