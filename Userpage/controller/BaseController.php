<?php

class BaseController{

    public function model($model){
        require_once "../model/" . $model . ".php";  
        return new  $model;
    } 


    public function view($name,$data = []){
        require_once "../view/" . $name . ".php";  
    } 
}