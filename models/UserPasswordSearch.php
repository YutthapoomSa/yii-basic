<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserPassword;

/**
 * UserPasswordSearch represents the model behind the search form of `app\models\UserPassword`.
 */
class UserPasswordSearch extends UserPassword
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'isResetProgress', 'activate', 'userId'], 'integer'],
            [['hashPassword', 'resetCode', 'resetExpires', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = UserPassword::find();

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
            'isResetProgress' => $this->isResetProgress,
            'resetExpires' => $this->resetExpires,
            'activate' => $this->activate,
            'userId' => $this->userId,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'hashPassword', $this->hashPassword])
            ->andFilterWhere(['like', 'resetCode', $this->resetCode]);

        return $dataProvider;
    }
}
