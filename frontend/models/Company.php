<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property string $id
 * @property string $title
 * @property string $desc
 * @property integer $cid
 * @property string $img
 * @property string $content
 * @property integer $status
 * @property string $code
 * @property string $url
 * @property string $template
 * @property string $tourl
 * @property integer $order
 * @property integer $pid
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid', 'status', 'order', 'pid'], 'integer'],
            [['content'], 'string'],
            [['title', 'code'], 'string', 'max' => 50],
            [['desc', 'img', 'url', 'template', 'tourl'], 'string', 'max' => 255],
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
            'cid' => 'Cid',
            'img' => 'Img',
            'content' => 'Content',
            'status' => 'Status',
            'code' => 'Code',
            'url' => 'Url',
            'template' => 'Template',
            'tourl' => 'Tourl',
            'order' => 'Order',
            'pid' => 'Pid',
        ];
    }
}
