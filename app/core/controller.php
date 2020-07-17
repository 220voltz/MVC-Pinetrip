<?php

Class Controller {

    protected $view;
    protected $model;

    public function view($viewName,$data = [],$pageTitle = ''){
        $this->view = new View($viewName,$data,$pageTitle);
        return $this->view; 
    }

    public function model($modelName,$data = []){
        if(file_exists(MODEL . $modelName . '.php')){
            require MODEL . $modelName . '.php';
            $this->model = new $modelName;
        }
    }
}