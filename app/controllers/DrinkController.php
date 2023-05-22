<?php
namespace app\controllers;

use core\base\Controller;
use app\models\Drink;

class DrinkController extends Controller
{
    public function index()
    {
        $items = (new Drink)->where()->order(['id ASC'])->fetchAll();
        $this->assign('items', $items);
        $this->render();
    }

    public function all()
    {
        $items = (new Drink)->where()->order(['id ASC'])->fetchAll();
        echo (json_encode($items));
    }

    public function detail($id)
    {
        $item = (new Drink())->where(["id = ?"], [$id])->fetch();
        echo (json_encode($item));
    }

    public function add()
    {
        $data['item_name'] = $_POST['value'];
        $count = (new Drink)->add($data);
        echo ('success');
    }

    public function update()
    {
        $data = array('id' => $_POST['id'], 'item_name' => $_POST['value']);
        $count = (new Drink)->where(['id = :id'], [':id' => $data['id']])->update($data);
        echo ('success');
    }

    public function delete($id = null)
    {
        $count = (new Drink)->delete($id);
        echo ('success');
    }
}