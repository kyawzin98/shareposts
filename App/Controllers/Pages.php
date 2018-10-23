<?php
class Pages extends Controller{
    public function __construct() {

    }

    public function index(){
        if (isLoggedIn()){
            redirect('posts');
        }

        $data=[
            'title'=>'Welcome',
            'description'=>'This is the social network share posts app build with using traversy mvc'
        ];
        $this->view('pages/index',$data);
    }

    public function about(){
        $data=[
            'title'=>'About Us',
            'description'=>'App to share posts with other users'
        ];
        $this->view('pages/about',$data);    
    }
}