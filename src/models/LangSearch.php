<?php

namespace ayaalkaplin\multilang\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use ayaalkaplin\multilang\models\Lang;

/**
 * LangSearch represents the model behind the search form of `ayaalkaplin\multilang\models\Lang`.
 */
class LangSearch extends Lang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'default', 'updated_at', 'created_at'], 'integer'],
            [['url', 'local', 'name'], 'safe'],
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
        $query = Lang::find();

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
            'default' => $this->default,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'local', $this->local])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}