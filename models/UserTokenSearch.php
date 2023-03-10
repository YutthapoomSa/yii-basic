<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserToken;

/**
 * UserTokenSearch represents the model behind the search form of `app\models\UserToken`.
 */
class UserTokenSearch extends UserToken
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'userId'], 'integer'],
            [['accessToken', 'refreshToken', 'expire', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = UserToken::find();

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
            'userId' => $this->userId,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'refreshToken', $this->refreshToken])
            ->andFilterWhere(['like', 'expire', $this->expire]);

        return $dataProvider;
    }
}
