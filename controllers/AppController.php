<?php

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller {
    
    // распечатка массива
    public function debug($arr){
        echo '<pre>'. print_r($arr, true).'</pre>';
    }
}
