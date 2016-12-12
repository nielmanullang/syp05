<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "t_d_artikel".
 *
 * @property integer $id
 * @property integer $id_artikel
 * @property string $file
 *
 * @property TMArtikel $idArtikel
 */
class DetailArtikel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_d_artikel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_artikel'], 'required'],
            [['id_artikel'], 'integer'],
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
            'id_artikel' => 'Id Artikel',
            'file' => 'File',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdArtikel()
    {
        return $this->hasOne(TMArtikel::className(), ['id' => 'id_artikel']);
    }
}
