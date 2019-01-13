<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 */
class Update extends Model
{
    public $id;
    public $name;
    public $author;
    public $sn;
    public $publishCompany;

    public function rules()
    {
        return [
            [['id','name', 'author', 'sn', 'publishCompany'], 'required']
        ];
    }

    public function findBook($book)
    {
        $id = $book['Update']['id'];
        $book_arr = Yii::$app->db->createCommand("SELECT * FROM book_list WHERE id='$id'")
                ->queryOne();
        return count($book_arr) == 0 ? false : $book_arr;
    }

    public function updataBookInfo($id,$book)
    {
        $name = $book['name'];
        $author = $book['author'];
        $sn = $book['sn'];
        $publishCompany = $book['publishCompany'];
        Yii::$app->db->createCommand("UPDATE book_list SET name='$name',author='$author',sn='$sn',publishCompany='$publishCompany' WHERE id=$id")->execute();
    }
}

?>
