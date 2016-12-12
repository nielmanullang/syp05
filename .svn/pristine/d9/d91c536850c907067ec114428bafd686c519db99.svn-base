<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_d_pengumuman".
 *
 * @property integer $id
 * @property integer $id_pengumuman
 * @property string $file
 *
 * @property TMPengumuman $idPengumuman
 */
class DetailPengumuman extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_pengumuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengumuman'], 'required'],
            [['id_pengumuman'], 'integer'],
            [['file'], 'string', 'max' => 55]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pengumuman' => 'Id Pengumuman',
            'file' => 'File',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPengumuman()
    {
        return $this->hasOne(TMPengumuman::className(), ['id' => 'id_pengumuman']);
    }
}
