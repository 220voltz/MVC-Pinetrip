<?php

Class err404Controller extends Controller {

    public function index($id='',$name ='') {
        $this->view('error'. DS .'index');
        $this->view->render();
    }

}