<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property string $id
 * @property string $post_img
 * @property string $source1
 * @property string $source2
 * @property string $source3
 * @property string $ps
 * @property string $videoCate
 * @property integer $cate
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate'], 'integer'],
            [['post_img', 'source1', 'source2', 'source3', 'ps'], 'string', 'max' => 255],
            [['videoCate'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_img' => 'Post Img',
            'source1' => 'Source1',
            'source2' => 'Source2',
            'source3' => 'Source3',
            'ps' => 'Ps',
            'videoCate' => 'Video Cate',
            'cate' => 'Cate',
        ];
    }
}
