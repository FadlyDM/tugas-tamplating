<?php
    use yii\helpers\Html;
    use app\widgets\Alert;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;

    /** @var yii\web\View $this */



$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<?=
Html::a('Mahasiswa Baru', ['tambah'], ['class' => 'btn btn-primary']);
// Yii::$app->session->setFlash('success', 'Data mahasiswa berhasil diubah.');
?>

<?=
    GridView::widget([
        'dataProvider'=> $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id',
            'nim',
            'nama',
            'kelas',
            'status',
            ['class' => ActionColumn::className()]

        ]
        ]);
?>