<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bobot".
 *
 * @property int $id
 * @property int $jenis_bobot
 * @property int $bobot
 * @property string $keterangan_bobot
 */
class Bobot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bobot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_bobot', 'bobot', 'keterangan_bobot'], 'required'],
            [['jenis_bobot', 'bobot'], 'integer'],
            [['keterangan_bobot'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_bobot' => 'Jenis Bobot',
            'bobot' => 'Bobot',
            'keterangan_bobot' => 'Keterangan Bobot',
        ];
    }
}
