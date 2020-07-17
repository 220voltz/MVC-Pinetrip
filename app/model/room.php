<?php

class room {
    protected static $data_file;
    protected $inventory = [];

    public function __construct() {
        self::$data_file = DATA . 'room_type.txt';
    }

    private function load(){
        if(file_exists(DATA . 'room_type.txt')){
            $this->inventory = file(DATA . 'room_type.txt');
        }
    }

    public function getRooms(){
        $this->load();
        return $this->inventory;
    }
}