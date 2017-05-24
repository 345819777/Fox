<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "appmanual".
 *
 * @property string $id
 * @property string $type
 * @property string $OS
 * @property string $Version
 * @property string $Size
 * @property string $url
 */
class Appmanual extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'appmanual';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'OS', 'Version', 'Size', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'OS' => 'Os',
            'Version' => 'Version',
            'Size' => 'Size',
            'url' => 'Url',
        ];
    }
}
