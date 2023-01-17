<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $menu_id
 * @property string $menu_name ชื่อเมนู
 * @property string $url url
 *
 * @property SubMenu[] $subMenus
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_name', 'url'], 'required'],
            [['menu_name'], 'string', 'max' => 150],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
            'url' => 'Url',
        ];
    }

    /**
     * Gets query for [[SubMenus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubMenus()
    {
        return $this->hasMany(SubMenu::class, ['menu_id' => 'menu_id']);
    }
}
