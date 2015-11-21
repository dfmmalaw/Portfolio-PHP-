<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tip".
 *
 * @property integer $id
 * @property string $date
 * @property string $author
 * @property string $post
 */
class Tip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'author', 'post'], 'required'],
            [['date'], 'safe'],
            [['author', 'post'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'author' => 'Author',
            'post' => 'Post',
        ];
    }
}
