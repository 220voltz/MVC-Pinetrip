<?php

class item {
    protected static $data_file;
    protected $inventory = [];

    public function __construct() {
        self::$data_file = DATA . 'item.txt';
    }

    private function load(){
        if(file_exists(DATA . 'item.txt')){
            $this->inventory = file(DATA . 'item.txt');
        }
    }

    public function getItem(){
        $this->load();
        return $this->inventory;
    }
}