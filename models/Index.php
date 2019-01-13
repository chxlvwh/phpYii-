<?php
namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 */
class Index extends Model
{

    public function getList()
    {
        return Yii::$app->db->createCommand('SELECT * FROM book_list')->queryAll();
    }

}

?>
