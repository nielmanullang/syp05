<?php

namespace common\models;

use Yii;
use common\models\Pengguna;

/**
 * This is the model class for table "t_m_artikel".
 *
 * @property integer $id
 * @property string $judul
 * @property string $isi
 * @property string $tgl_mulai
 * @property integer $id_pengguna
 * @property integer $jumlah_lihat
 *
 * @property TDArtikel[] $tDArtikels
 * @property TMPengguna $idPengguna
 */
class MasterArtikel extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName() {
        return 't_m_artikel';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['judul', 'isi'], 'required'],
            [['isi'], 'string'],
            [['tgl_mulai'], 'safe'],
            [['id_pengguna', 'jumlah_lihat'], 'integer'],
            [['judul'], 'string', 'max' => 255],
            [['file'],
                'file',
                'maxFiles' => 10,
//            'extensions' => ['doc','docx','pdf'],
                'maxSize' => 1024 * 1024 * 2
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'tgl_mulai' => 'Tanggal Dibuat',
            'id_pengguna' => 'Id Pengguna',
            'jumlah_lihat' => 'Jumlah Lihat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDArtikels() {
        return $this->hasMany(TDArtikel::className(), ['id_artikel' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPengguna() {
        return $this->hasOne(Pengguna::className(), ['id' => 'id_pengguna']);
    }

}
