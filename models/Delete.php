<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 */
class Delete extends Model
{
    public $name;

    public function rules()
    {
        return [
            ['name','required'],
            // ['verifyCode', 'captcha'],
        ];
    }

    public function findBook($book)
    {
        $name = $book['Delete']['name'];
        $book_arr = Yii::$app->db->createCommand("SELECT * FROM book_list WHERE name='$name'")
                ->queryAll();
        return count($book_arr) == 0 ? false : $book_arr;
    }

    public function deleteBook($book)
    {
        return Yii::$app->db->createCommand()->delete(
            'book_list',
            "name='$book'",
        )->execute();

    }
}

?>
