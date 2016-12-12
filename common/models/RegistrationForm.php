<?php

namespace common\models;

use Yii;
use yii\base\Model;
use common\models\Pengguna;
use backend\models\AuthAssignment;

class RegistrationForm extends Model
{
	/**
	* @inheritdoc
	*/
		public $username;
		public $password;
		public $email;
		public $batas_buku;
		public $status;
		public $NI;
		public $nama;
		public $alamat;
		public $no_hp;
		public $jabatan;
		public $jurusan;

	public function rules()
	{
		return [
			[['username', 'password', 'batas_buku', 'status'], 'required'],
            [['batas_buku', 'status'], 'integer'],
            [['jurusan'], 'string'],
            [['username','email', 'nama'], 'string', 'max' => 45],
            ['email', 'email'],
	        ['email', 'filter', 'filter' => 'trim'],
            [['NI'], 'string', 'max' => 15],
            [['alamat'], 'string', 'max' => 125],
            [['no_hp'], 'string', 'max' => 14],
            [['jabatan'], 'string', 'max' => 25]
		];

	}
	/**
	* @inheritdoc
	*/

	public function attributeLabels()
	{
		return [
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'batas_buku' => 'Batas Buku',
			'status' => 'Status',
			'NI' => 'NI',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'no_hp' => 'No HP',
			'jabatan' => 'Jabatan',
			'jurusan' => 'Jurusan'
		];
	}

    public static function hashPassword($_password) {
        return (Yii::$app->getSecurity()->generatePasswordHash($_password));
    }

	public function register()
	{
		if ($this->validate()){
			$pengguna = new Pengguna();
			$pengguna->username = $this->username;
			$pengguna->password = self::hashPassword($this->password);
			$pengguna->email = $this->email;
			$pengguna->batas_buku = $this->batas_buku;
			$pengguna->status = $this->status;
			$pengguna->NI = $this->NI;
			$pengguna->nama = $this->nama;
			$pengguna->alamat = $this->alamat;
			$pengguna->no_hp = $this->no_hp;
			$pengguna->jabatan = $this->jabatan;
			$pengguna->jurusan = $this->jurusan;
			if ($pengguna->save()) {
                $auth_assignment = new AuthAssignment();
                $auth_assignment->item_name = 'member';
                $auth_assignment->user_id = $pengguna->id;
                $auth_assignment->save();
				return $pengguna; //return user yang berhasil register
			}else{
				print_r($pengguna->errors);
			}
		}
	}
}