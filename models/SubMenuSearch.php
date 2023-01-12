<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubMenu;

/**
 * SubMenuSearch represents the model behind the search form of `app\models\SubMenu`.
 */
class SubMenuSearch extends SubMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'menu_id'], 'integer'],
            [['sub_menu_name', 'urlIframe', 'urlLink', 'urlDesign'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SubMenu::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'menu_id' => $this->menu_id,
        ]);

        $query->andFilterWhere(['like', 'sub_menu_name', $this->sub_menu_name])
            ->andFilterWhere(['like', 'urlIframe', $this->urlIframe])
            ->andFilterWhere(['like', 'urlLink', $this->urlLink])
            ->andFilterWhere(['like', 'urlDesign', $this->urlDesign]);

        return $dataProvider;
    }
}
