<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_password".
 *
 * @property int $id
 * @property string $hashPassword password hash
 * @property int $isResetProgress
 * @property string|null $resetCode
 * @property string|null $resetExpires
 * @property int $activate
 * @property int $userId
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property User $user
 */
class UserPassword extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_password';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hashPassword', 'userId', 'createdAt', 'updatedAt'], 'required'],
            [['isResetProgress', 'activate', 'userId'], 'integer'],
            [['resetExpires', 'createdAt', 'updatedAt'], 'safe'],
            [['hashPassword', 'resetCode'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hashPassword' => 'รหัสผ่าน',
            'isResetProgress' => 'Is Reset Progress',
            'resetCode' => 'Reset Code',
            'resetExpires' => 'Reset Expires',
            'activate' => 'Activate',
            'userId' => 'User ID',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'userId']);
    }
}
