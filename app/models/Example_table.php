<?php

class Admin_model
{
  private $table = '% YOUR TABLE NAME %';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAll()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function getByName($name)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE name =:name');
    $this->db->bind('name', $name);
    return $this->db->resultSet();
  }
}
