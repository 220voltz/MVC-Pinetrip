<?php

class bookingController extends Controller {

    public function index(){
        // $this->model('item');    
        $this->view('booking'. DS .'index');
        $this->view->renderEmpty();
    }

}