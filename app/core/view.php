<?php

Class View {

    protected $view_file;
    protected $view_data;
    protected $page_title;

    public function __construct($view_file,$view_data,$page_title){
        $this->view_file = $view_file;
        $this->view_data = $view_data;
        $this->page_title = $page_title;
    }

    public function render(){
        if(file_exists(VIEW . $this->view_file . '.php')){
            include(TEMPLATE . 'header.php');
            include(VIEW . $this->view_file . '.php');
            include(TEMPLATE . 'footer.php');
        }
    }

    public function getAction(){
        return (explode('\\',$this->view_file)[1]);
    }

    public function renderEmpty(){ // render page file only
        include(VIEW . $this->view_file . '.php');
    }

}