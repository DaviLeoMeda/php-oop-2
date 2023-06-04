<?php

class petsProduct{
    public $picture;
    public $title;
    public $price;
    public $description;
    public $kind;
    public $pet;

    public function __construct($_picture, $_title, $_price, $_description, $_kind, $_pet){
        $this->picture = $_picture;
        $this->title = $_title;
        $this->price = $_price;
        $this->description = $_description;
        $this->kind = $_kind;
        $this->pet = $_pet;
    }

    public function getPet($pet){
        if($pet == 'dog'){
            return $this->kind = 'https://static.vecteezy.com/system/resources/previews/000/567/336/original/dog-icon-vector.jpg';
        } else if($pet == 'cat'){
            return $this->kind = 'https://static.vecteezy.com/system/resources/previews/000/567/690/original/vector-cat-icon.jpg';
        }
    }
}