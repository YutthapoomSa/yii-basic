<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $firstName
 * @property string $lastName
 * @property string $role สิทธิ์การเข้าใช้งาน
 * @property int $status status เปิด ปิด
 * @property string|null $image
 * @property string|null $gender เพศ
 * @property string|null $phoneNumber
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property UserPassword[] $userPasswords
 * @property UserSocket[] $userSockets
 * @property UserToken[] $userTokens
 */
class UserX extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password', 'firstName', 'lastName', 'createdAt', 'updatedAt'], 'required'],
            [['role', 'gender', 'phoneNumber'], 'string'],
            [['status'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['email', 'username', 'password', 'firstName', 'lastName', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'role' => 'Role',
            'status' => 'Status',
            'image' => 'Image',
            'gender' => 'Gender',
            'phoneNumber' => 'Phone Number',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[UserPasswords]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserPasswords()
    {
        return $this->hasMany(UserPassword::class, ['userId' => 'id']);
    }

    /**
     * Gets query for [[UserSockets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserSockets()
    {
        return $this->hasMany(UserSocket::class, ['userId' => 'id']);
    }

    /**
     * Gets query for [[UserTokens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserTokens()
    {
        return $this->hasMany(UserToken::class, ['userId' => 'id']);
    }
}
