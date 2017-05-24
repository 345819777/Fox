<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "firmware".
 *
 * @property string $id
 * @property string $model
 * @property string $url
 * @property string $series
 * @property string $attentions
 * @property string $img_url
 * @property string $size
 * @property string $System_Firmware_Version
 * @property string $WebUI_Firmware_Version
 * @property string $version
 * @property integer $order
 * @property integer $on
 */
class Firmware extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firmware';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order', 'on'], 'integer'],
            [['model', 'url', 'series', 'attentions', 'img_url', 'size', 'System_Firmware_Version', 'WebUI_Firmware_Version', 'version'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'url' => 'Url',
            'series' => 'Series',
            'attentions' => 'Attentions',
            'img_url' => 'Img Url',
            'size' => 'Size',
            'System_Firmware_Version' => 'System  Firmware  Version',
            'WebUI_Firmware_Version' => 'Web Ui  Firmware  Version',
            'version' => 'Version',
            'order' => 'Order',
            'on' => 'On',
        ];
    }
}
