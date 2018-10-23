<?php
    /* 
        To create new controller
        create new file in App/Controllers directory with the controller name you want
        and then create class with that file name
        after that you must extends the Controller
        that is the base Controller which exist in the App/libraries/Controller.php

        in the __construct function load the model(eg.$this->exampleModel= $this->model('ExampleModel))
        model file name must be singular

        index is the default function
    */
    
class ExampleController extends Controller{
    public function __construct() {
        //create model for example controller
        $this->exampleModel = $this->model('ExampleModel');
    }

    public function index(){
        // $data array is created to pass the data to view from controller
        $data=[
            'title'=>'Example'
        ];
        //load the view file with data
        $this->view('example',$data);
    }
}