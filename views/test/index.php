<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="test-index">

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="layui-elem-quote mylog-info-tit">
        <?= Html::a('Create Test', ['create'], ['data-target'=>'#ajaxCreate',"data-toggle"=>"modal",'class' => 'layui-btn layui-btn-danger']) ?>
    </div>
    <?= GridView::widget([
        'options' => ['class' => 'layui-form'],
        'tableOptions' => ['class' => 'layui-table'],
        'dataProvider' => $dataProvider,
        'layout' => '{items}{summary}',
        'summary' => '<blockquote class="layui-elem-quote">总记录数：'.$dataProvider->totalCount.'条</blockquote>',
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            [
                'attribute' => 'sex',
                'value' => function($data) {
                    return $data['sex'] ? '女' : '男';
                }
            ],
            'tel',
            'area',
            'age',
            'hobby',
            // 'decr',

            [
            'header' => '操作',
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {modal}',
                'buttons' => [
                    // 自定义按钮
                    'view' => function ($url, $model, $key) {
                        $options = [
                            'title' => '查看',
                            'aria-label' => Yii::t('yii', 'View'),
                            'data-pjax' => '0',
                             'data-target'=>'#ajax'.$model['id'],
                            "data-toggle"=>"modal",
                            'class'=>'layui-btn layui-btn-small layui-btn-primary'
                        ];
                        return Html::a('<i class="layui-icon"></i>查看', $url, $options);
                    },
                    'update' => function ($url, $model, $key) {
                        $options = [
                            'title' => '编辑',
                            'aria-label' => Yii::t('yii', 'View'),
                            'data-pjax' => '0',
                             'data-target'=>'#ajax_'.$model['id'],
                            "data-toggle"=>"modal",
                            'class'=>'layui-btn layui-btn-small'
                        ];
                        return Html::a('<i class="layui-icon"></i>编辑', $url, $options);
                    },
                    'delete' => function ($url, $model, $key) {
                        $options = [
                            'title' => '删除',
                            'aria-label' => Yii::t('yii', 'View'),
                            'data-pjax' => '0',
                            'data-id' => $model['id'],
                            'onclick' => 'openDeleteModal(this)',
                            'data-method' => 'post',
                            'class' => 'layui-btn layui-btn-small layui-btn-danger'
                        ];
                        return Html::label('<i class="layui-icon"></i>删除', $url, $options);
                    },
                    'modal' => function ($url, $model) {
                        return '<div class="modal fade" id="ajax' . $model['id'] . '">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        </div>
                                    </div>
                                </div><div class="modal fade" id="ajax_' . $model['id'] . '">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        </div>
                                    </div>
                                </div>';
                    }
                ]
            ],
        ],
    ]); ?>
</div>

<?php echo     LinkPager::widget([
        "pagination" => $dataProvider->pagination,
        'options'=>['lable'=>'div','class'=>'layui-box layui-laypage layui-laypage-default'],'activePageCssClass'=>'layui-laypage-curr'
    ]);?>
</div>


<div class="modal fade" id="ajaxCreate">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>


<?php $this->beginBlock("service")?>
    function openDeleteModal(label){
        var id = $(label).attr('data-id');
        var url = $(label).attr('for');
        layer.confirm('确定删除'+id, function(){
            $.ajax({
                type : 'post',
                url : url,
                success : function(){

                }
            });
        });
    }

    layui.use('form', function(){
        var form = layui.form();
        form.render("select"); //更新全部
        form.render("radio"); //更新全部
    });
<?php $this->endBlock() ?><?php $this->registerJs($this->blocks["service"], \yii\web\View::POS_END);?>