<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_socket".
 *
 * @property int $id
 * @property string|null $refreshToken
 * @property int|null $userId
 * @property string $createdAt
 * @property string $updatedAt
 *
 * @property User $user
 */
class UserSocket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_socket';
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
            [['refreshToken'], 'string', 'max' => 255],
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
            'refreshToken' => 'Refresh Token',
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
