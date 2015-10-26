<?php

namespace backend\modules\inventory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\inventory\models\Tank;

/**
 * TankSearch represents the model behind the search form about `backend\modules\inventory\models\Tank`.
 */
class TankSearch extends Tank
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gas_id', 'unit_id'], 'integer'],
            [['tankno', 'vol', 'year_check', 'date_modify'], 'safe'],
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
        $query = Tank::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'gas_id' => $this->gas_id,
            'unit_id' => $this->unit_id,
            'year_check' => $this->year_check,
            'date_modify' => $this->date_modify,
        ]);

        $query->andFilterWhere(['like', 'tankno', $this->tankno])
            ->andFilterWhere(['like', 'vol', $this->vol]);

        return $dataProvider;
    }
}
