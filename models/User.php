<?php

namespace app\models;

use Yii;
use app\models\BaseModel;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $tel
 * @property string $email
 * @property string $salt
 * @property string $password
 * @property string $weixin
 * @property string $avatar_img
 * @property integer $status
 * @property string $login_ip
 * @property integer $login_time
 * @property integer $login_count
 * @property integer $del_flag
 * @property string $created_time
 * @property string $updated_time
 */
class User extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'login_time', 'login_count', 'del_flag'], 'integer'],
            [['created_time', 'updated_time'], 'safe'],
            [['tel', 'salt'], 'string', 'max' => 15],
            [['email', 'password', 'weixin', 'avatar_img'], 'string', 'max' => 50],
            [['login_ip'], 'string', 'max' => 22],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'tel' => 'Tel',
            'email' => 'Email',
            'salt' => 'Salt',
            'password' => 'Password',
            'weixin' => 'Weixin',
            'avatar_img' => 'Avatar Img',
            'status' => 'Status',
            'login_ip' => 'Login Ip',
            'login_time' => 'Login Time',
            'login_count' => 'Login Count',
            'del_flag' => 'Del Flag',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
        ];
    }
}
