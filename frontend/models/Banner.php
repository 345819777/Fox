<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property string $id
 * @property string $title
 * @property string $img
 * @property string $content
 * @property integer $on
 * @property string $link
 * @property integer $view
 * @property integer $order
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['on', 'view', 'order'], 'integer'],
            [['title', 'img', 'link'], 'string', 'max' => 255],
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
            'img' => 'Img',
            'content' => 'Content',
            'on' => 'On',
            'link' => 'Link',
            'view' => 'View',
            'order' => 'Order',
        ];
    }
}
