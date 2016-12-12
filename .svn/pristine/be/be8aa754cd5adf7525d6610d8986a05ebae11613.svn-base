<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_d_denda".
 *
 * @property integer $id
 * @property double $besar_denda
 * @property integer $id_detail_peminjaman
 *
 * @property TDPeminjaman $idDetailPeminjaman
 */
class DetailDenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_denda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['besar_denda', 'id_detail_peminjaman'], 'required'],
            [['besar_denda'], 'number'],
            [['id_detail_peminjaman'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'besar_denda' => 'Besar Denda',
            'id_detail_peminjaman' => 'Id Detail Peminjaman',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDetailPeminjaman()
    {
        return $this->hasOne(TDPeminjaman::className(), ['id' => 'id_detail_peminjaman']);
    }
}
