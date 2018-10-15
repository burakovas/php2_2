<?php
namespace app\models;

abstract class Model
{
    private $db;

  //  public function __construct(IDb $db)
  //  {
  //      $this->db = $db;
  //  }

    public function getOne($id)
    {
        $table = $this->getTableName();
        $sql = "SELECT * FROM {$table} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll()
    {
        $table = $this->getTableName();
        $sql = "SELECT * FROM {$table}";
        return $this->db->queryAll($sql);
    }

}
