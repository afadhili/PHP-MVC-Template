<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Home';
    $this->layout('home/index', $data);
  }
}
