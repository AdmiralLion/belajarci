<?php
class Report extends CI_Controller{
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