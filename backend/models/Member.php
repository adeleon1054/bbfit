<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cif".
 *
 * @property integer $customerID
 * @property string $customerName
 * @property string $customerAddress1
 * @property string $customerAddress2
 * @property string $customerCity
 * @property string $customerStates
 * @property string $customerZip
 * @property string $customerPhone
 * @property integer $gymPlanID
 * @property string $startDate
 *
 * @property GymPlan $gymPlan
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customerName', 'customerAddress1', 'customerCity', 'customerStates', 'customerZip', 'customerPhone', 'gymPlanID'], 'required'],
            [['gymPlanID'], 'integer'],
            [['startDate'], 'safe'],
            [['customerName', 'customerAddress1', 'customerAddress2'], 'string', 'max' => 50],
            [['customerCity'], 'string', 'max' => 25],
            [['customerStates'], 'string', 'max' => 2],
            [['customerZip'], 'string', 'max' => 5],
            [['customerPhone'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customerID' => 'ID',
            'customerName' => 'Name',
            'customerAddress1' => 'Address 1',
            'customerAddress2' => 'Address 2',
            'customerCity' => 'City',
            'customerStates' => 'States',
            'customerZip' => 'Zip Code',
            'customerPhone' => 'Phone Number',
            'gymPlanID' => 'Gym Plan ID',
            'startDate' => 'Start Date',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGymPlan()
    {
        return $this->hasOne(GymPlan::className(), ['gymPlanID' => 'PlanName']);
    }
}
