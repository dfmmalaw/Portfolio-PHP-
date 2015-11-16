<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tip".
 *
 * @property string $date
 * @property string $subject
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
            [['date', 'subject', 'post'], 'required'],
            [['date'], 'safe'],
            [['subject', 'post'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'subject' => 'Subject',
            'post' => 'Post',
        ];
    }
}
