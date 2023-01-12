<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_token".
 *
 * @property int $id
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property string|null $expire วันหมดอายุ Token
 * @property int|null $userId
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property User $user
 */
class UserToken extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_token';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId'], 'integer'],
            [['createdAt', 'updatedAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['accessToken', 'refreshToken', 'expire'], 'string', 'max' => 255],
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
            'accessToken' => 'Access Token',
            'refreshToken' => 'Refresh Token',
            'expire' => 'Expire',
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
