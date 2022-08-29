<?php
class Blog extends CI_Controller{
//     public function __construct()
//   {
//   	parent::__construct();
//     $this->load->model('post');
//   }
    public function index(){
        echo "hello world!!!";
    }
    public function comments(){
        echo "coba komentar !!";
        echo "<br>";
        echo "<input type='text' placeholder='masukkan nama' id='nama'></input>";
        echo "<br>";
        echo "<input type='submit'></input>";
    }
}