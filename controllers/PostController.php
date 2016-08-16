<?php

namespace app\controllers;

class PostController extends AppController{
    
    public function actionIndex($name = "Гость"){
        $hello = "Повторяй Харе Кришна!";
        $hi = "Говинда джая джя, Гопала джая джая!";
        return $this->render("index", compact("hello","hi","name"));
    }
    
    public function actionTest(){
        return "Харе Кришна Харе Кришна Кришна Кришна Харе Харе!";
    }
}
