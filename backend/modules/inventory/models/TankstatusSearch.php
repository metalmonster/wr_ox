<?php

namespace backend\modules\inventory\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\inventory\models\Tankstatus;

/**
 * TankstatusSearch represents the model behind the search form about `backend\modules\inventory\models\Tankstatus`.
 */
class TankstatusSearch extends Tankstatus
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tank_status_name'], 'safe'],
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
        $query = Tankstatus::find();

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
        ]);

        $query->andFilterWhere(['like', 'tank_status_name', $this->tank_status_name]);

        return $dataProvider;
    }
}
