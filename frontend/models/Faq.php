<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property string $id
 * @property string $title
 * @property integer $time
 * @property string $content
 * @property string $faqcate
 * @property integer $sort
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'sort'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['faqcate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'time' => 'Time',
            'content' => 'Content',
            'faqcate' => 'Faqcate',
            'sort' => 'Sort',
        ];
    }
}
