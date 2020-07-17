<?php

Class homeController extends Controller {

    public function index($id='',$name ='') {
        $this->view('home'. DS .'index',[
            'action' => 'home', // for nav - to set button ACTIVE
            'id' => $id,
            'name' => $name
        ]);
        $this->view->render();
    }

    public function about() {
        $pageTitle = ' | About Us';
        $this->view('home'. DS .'about',[
            'action' => 'about',
        ],$pageTitle);
        $this->view->render();
    }

    public function contact() {
        $pageTitle = ' | Contact Us';
        $this->view('home'. DS .'contact',[
            'action' => 'contact',
        ],$pageTitle);
        $this->view->render();
    }
    public function room(){
        $this->model('room');
        $this->view('home'. DS .'room',[
            'action' => 'room', // for nav - to set button ACTIVE
            'items' => $this->model->getRooms()
        ],' | Accomodations');
        $this->view->render();
    }

}