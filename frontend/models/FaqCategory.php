<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faq_category".
 *
 * @property string $id
 * @property string $title
 * @property string $desc
 * @property string $icon
 * @property integer $sort
 * @property integer $app
 * @property integer $status
 */
class FaqCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort', 'app', 'status'], 'integer'],
            [['title', 'desc', 'icon'], 'string', 'max' => 255],
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
            'desc' => 'Desc',
            'icon' => 'Icon',
            'sort' => 'Sort',
            'app' => 'App',
            'status' => 'Status',
        ];
    }
}
