<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Member;

/**
 * MemberSearch represents the model behind the search form about `backend\models\Member`.
 */
class MemberSearch extends Member
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customerID', 'gymPlanID'], 'integer'],
            [['customerName', 'customerAddress1', 'customerAddress2', 'customerCity', 'customerStates', 'customerZip', 'customerPhone', 'startDate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Member::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'customerID' => $this->customerID,
            'gymPlanID' => $this->gymPlanID,
            'startDate' => $this->startDate,
        ]);

        $query->andFilterWhere(['like', 'customerName', $this->customerName])
            ->andFilterWhere(['like', 'customerAddress1', $this->customerAddress1])
            ->andFilterWhere(['like', 'customerAddress2', $this->customerAddress2])
            ->andFilterWhere(['like', 'customerCity', $this->customerCity])
            ->andFilterWhere(['like', 'customerStates', $this->customerStates])
            ->andFilterWhere(['like', 'customerZip', $this->customerZip])
            ->andFilterWhere(['like', 'customerPhone', $this->customerPhone]);

        return $dataProvider;
    }
}
