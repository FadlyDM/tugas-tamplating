<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('Buku Baru', ['index'], ['class' => 'btn btn-primary'])
?>

<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nim',
            'nama',
            'kelas',
            'status',
        ]
    ])
?>

    
