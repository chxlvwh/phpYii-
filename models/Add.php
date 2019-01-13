<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 *
 */
class Add extends Model
{
    public $name;
    public $author;
    public $sn;
    public $publishCompany;
    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'author', 'sn', 'publishCompany'],'required'],
            // ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            // 'verifyCode', 'Verfication Code'
        ];
    }

    public function addBook($bookAttr)
    {
        return Yii::$app->db->createCommand()->insert('book_list', [
            'name' => $bookAttr['Add']['name'],
            'author' => $bookAttr['Add']['author'],
            'sn' => $bookAttr['Add']['sn'],
            'publishCompany' => $bookAttr['Add']['publishCompany'],
        ])->execute();
    }
}

?>
