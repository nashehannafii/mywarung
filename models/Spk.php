<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spk".
 *
 * @property int $id
 * @property string $nama_barang
 * @property int $keuntungan
 * @property int $penjualan
 * @property int $harga
 */
class Spk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_barang', 'keuntungan', 'penjualan', 'harga'], 'required'],
            [['keuntungan', 'penjualan', 'harga'], 'integer'],
            [['nama_barang'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_barang' => 'Nama Barang',
            'keuntungan' => 'Keuntungan',
            'penjualan' => 'Penjualan',
            'harga' => 'Harga',
        ];
    }
}
