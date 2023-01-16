<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_menu".
 *
 * @property int $submenu_id
 * @property string $submenu_name ชื่อเมนูย่อย
 * @property string $url url
 * @property int $menu_id
 *
 * @property Menu $menu
 */
class SubMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['submenu_name', 'url', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['submenu_name'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['menu_id' => 'menu_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'submenu_id' => 'Submenu ID',
            'submenu_name' => 'Submenu Name',
            'url' => 'Url',
            'menu_id' => 'Menu ID',
        ];
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::class, ['menu_id' => 'menu_id']);
    }
}
