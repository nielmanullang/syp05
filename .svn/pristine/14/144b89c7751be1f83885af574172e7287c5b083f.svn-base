<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\base\NotSupportedException;

/**
 * This is the model class for table "t_m_pengguna".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $batas_buku
 * @property integer $status
 * @property string $NI
 * @property string $nama
 * @property string $alamat
 * @property string $no_hp
 * @property string $jabatan
 * @property string $jurusan
 *
 * @property TDLog[] $tDLogs
 * @property TDPengumuman[] $tDPengumumen
 * @property TMArtikel[] $tMArtikels
 * @property TMArtikel[] $tMArtikels0
 * @property TRJenis $status0
 * @property TTPesanPinjam[] $tTPesanPinjams
 */
class Pengguna extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_m_pengguna';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'batas_buku', 'status'], 'required'],
            [['batas_buku', 'status'], 'integer'],
            [['jurusan'], 'string'],
            [['username', 'email', 'nama'], 'string', 'max' => 45],
            [['NI'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 125],
            [['no_hp'], 'string', 'max' => 14],
            [['jabatan'], 'string', 'max' => 25],
            [['jurusan'], 'string', 'max' => 25],
            [['username', 'NI'], 'unique', 'message' => '{attribute} sudah dipergunakan akun lain'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'batas_buku' => 'Batas Buku',
            'status' => 'Status',
            'NI' => 'Nomor Induk',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'jabatan' => 'Jabatan',
            'jurusan' => 'Jurusan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDLogs()
    {
        return $this->hasMany(TDLog::className(), ['id_anggota' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTDPengumumen()
    {
        return $this->hasMany(TDPengumuman::className(), ['id_pengguna' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTMArtikels()
    {
        return $this->hasMany(TMArtikel::className(), ['id_pembuat' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTMArtikels0()
    {
        return $this->hasMany(TMArtikel::className(), ['id_penyunting' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(TRJenis::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTPesanPinjams()
    {
        return $this->hasMany(TTPesanPinjam::className(), ['id_pengguna' => 'id']);
    }

    public static function findByUsername($username){              
        return static::findOne(['username'=>$username]);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public static function findIdentity($id) {
        return static::findOne(['id'=>$id]);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['access_token'=>$token]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        //return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }        

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
}