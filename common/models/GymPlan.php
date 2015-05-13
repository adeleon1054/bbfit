<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gym_plan".
 *
 * @property integer $gymPlanID
 * @property string $planName
 * @property string $planDescription
 * @property double $planCost
 *
 * @property Cif[] $cifs
 */
class GymPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gym_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['planName', 'planCost'], 'required'],
            [['planCost'], 'number'],
            [['planName'], 'string', 'max' => 10],
            [['planDescription'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gymPlanID' => 'Gym Plan ID',
            'planName' => 'Plan Name',
            'planDescription' => 'Plan Description',
            'planCost' => 'Plan Cost',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCifs()
    {
        return $this->hasMany(Cif::className(), ['gymPlanID' => 'gymPlanID']);
    }
}
