<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_r_jenis".
 *
 * @property integer $id
 * @property string $status
 *
 * @property TDBuku[] $tDBukus
 * @property TDBuku[] $tDBukus0
 * @property TDKaset[] $tDKasets
 * @property TDPemesanan[] $tDPemesanans
 * @property TMKaset[] $tMKasets
 * @property TMPengguna[] $tMPenggunas
 * @property TTPesanPinjam[] $tTPesanPinjams
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_r_jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDBukus()
    {
        return $this->hasMany(TDBuku::className(), ['jenis' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDBukus0()
    {
        return $this->hasMany(TDBuku::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDKasets()
    {
        return $this->hasMany(TDKaset::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPemesanans()
    {
        return $this->hasMany(TDPemesanan::className(), ['id_status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTMKasets()
    {
        return $this->hasMany(TMKaset::className(), ['jenis' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTMPenggunas()
    {
        return $this->hasMany(TMPengguna::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTPesanPinjams()
    {
        return $this->hasMany(TTPesanPinjam::className(), ['id_jenis' => 'id']);
    }
}
