<?php
/* @var $this yii\web\View */


use common\models\Member;
use yii\grid\GridView;
use kartik\icons\Icon;
Icon::map($this);

$this->title = 'Dashboard';
?>
<div class="site-index">

    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        <?= Member::find()->where(['gymPlanId'=> 1])->count(); ?>
                    </h3>
                    <p>
                        Gold
                    </p>
                </div>
                <div class="icon">
                    <?=Icon::show('trophy', ['class'=>'fa']); ?>
                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                        <?= Member::find()->where(['gymPlanId'=> 2])->count(); ?>
                    </h3>
                    <p>
                        Silver
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-star"></i>
                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>
                        <?= Member::find()->where(['gymPlanId'=> 3])->count(); ?>
                    </h3>
                    <p>
                        Bronze
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-cog"></i>
                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                        <?= Member::find()->count(); ?>
                    </h3>
                    <p>
                        Visitors
                    </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User Memberships</h3>
<!--                    <div class="box-tools">-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">-->
<!--                            <div class="input-group-btn">-->
<!--                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
//                    'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'customerID',
                            'customerName',
//                        'customerAddress1',
//                        'customerAddress2',
                            'customerCity',
//                        'customerStates',
//                        'customerZip',
                            'customerPhone',
                            'gymPlanID',
                            'startDate:date',

                        ],
                    ]); ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</div>