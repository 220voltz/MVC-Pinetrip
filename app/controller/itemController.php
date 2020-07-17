<?php

class itemController extends Controller {

    public function index(){
        $this->model('item');
        $this->view('item'. DS .'index',[
            'action' => 'item', // for nav - to set button ACTIVE
            'items' => $this->model->getItem()
        ],' | Item Listing');
        $this->view->render();
    }

}