<?php
    /* 
        This is the base Controller
        load models and views
    */
class Controller{
    // Load model
    public function model($model){
        //Require model file
        require_once "../App/Models/". $model .".php";

        //Instantiate the model
        return new $model();
    }

    //load views
    public function view($view,$data=[]){
        // check for the view file
        if(file_exists('../App/Views/'.$view.'.php')){
            require_once '../App/Views/'.$view.'.php';
        }else{
            //view file does not exist
            die('View does not exist');
        }
    }
}