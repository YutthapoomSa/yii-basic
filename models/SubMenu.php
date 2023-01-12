<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_menu".
 *
 * @property int $id หมายเลขลำดับเมนูย่อย
 * @property string $sub_menu_name
 * @property string $urlIframe url หน้า dashBoard
 * @property string $urlLink url อื่นๆ
 * @property string $urlDesign หน้าว่าง
 * @property int $menu_id ลำดับของเมนูหลัก
 *
 * @property Menu $menu
 * @property Menu $menu0
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
            [['sub_menu_name', 'urlIframe', 'urlLink', 'urlDesign', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['sub_menu_name', 'urlIframe', 'urlLink', 'urlDesign'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::class, 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_menu_name' => 'Sub Menu Name',
            'urlIframe' => 'Url Iframe',
            'urlLink' => 'Url Link',
            'urlDesign' => 'Url Design',
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
        return $this->hasOne(Menu::class, ['id' => 'menu_id']);
    }

    /**
     * Gets query for [[Menu0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu0()
    {
        return $this->hasOne(Menu::class, ['id' => 'menu_id']);
    }
}
