<?php

class Controller
{
  public function layout($view, $data = [])
  {
    require_once 'views/layouts/main.php';
  }

  public function view($view, $data = [])
  {
    require_once 'views/' . $view . '.php';
  }

  public function model($model)
  {
    require_once 'app/models/' . $model . '.php';
    return new $model;
  }
}
