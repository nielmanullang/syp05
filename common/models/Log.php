<?php

namespace common\models;

use Yii;
use common\models\Pengguna;

/**
 * This is the model class for table "t_d_log".
 *
 * @property integer $id
 * @property integer $id_anggota
 * @property string $tanggal
 * @property string $status
 *
 * @property TMPengguna $idAnggota
 */
class Log extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_anggota'], 'required'],
            [['id_anggota'], 'integer'],
            [['tanggal'], 'safe'],
            [['status'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_anggota' => 'Id Anggota',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnggota()
    {
        return $this->hasOne(Pengguna::className(), ['id' => 'id_anggota']);
    }
}
