<?php
namespace app\models;

use core\base\Model;
use core\db\Db;

/**
 * Model
 */
class Drink extends Model
{
    /**
     * @var string
     */
    protected $table = 'drinks';

    /**
     * @param $title string
     * @return array
     */
    public function search($keyword)
    {
        $sql = "select * from `$this->table` where `name` like :keyword";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->fetchAll();
    }
}